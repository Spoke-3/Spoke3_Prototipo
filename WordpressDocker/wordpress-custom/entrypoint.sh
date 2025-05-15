#!/bin/bash
set -e

# 1. Attendi che i file WordPress siano disponibili
while [ ! -f /var/www/html/wp-config-sample.php ]; do
  echo "⏳ Waiting for WordPress files..."
  sleep 2
done

# 2. Attendi che MySQL sia raggiungibile (timeout 30s)
echo "⏳ Waiting for MySQL on $WORDPRESS_DB_HOST:3306..."
for i in {1..15}; do
  if nc -z "$WORDPRESS_DB_HOST" 3306; then
    echo "✅ MySQL is reachable"
    break
  fi
  echo "⌛ MySQL not yet ready ($i)..."
  sleep 2
done

# 3. Solo se WordPress è già installato
if [ -f /var/www/html/wp-config.php ]; then
  echo "🔍 Detected wp-config.php — WordPress installed."

  # 3.1 Ottieni dominio corrente
  CURRENT_DOMAIN=${CURRENT_DOMAIN:-$(curl -s http://169.254.169.254/latest/meta-data/public-hostname || echo "localhost:8080")}
  NEW_URL="http://$CURRENT_DOMAIN"

  # 3.2 Ottieni dominio salvato nel DB
  SAVED_URL=$(wp option get home --allow-root)

  echo "💡 Saved URL: $SAVED_URL"
  echo "💡 New URL: $NEW_URL"

  # 3.3 Fai sempre un replace sicuro se il dominio salvato è corretto
  if [ "$SAVED_URL" = "$NEW_URL" ]; then
    echo "🔁 Forcing cleanup of old URL references (e.g. localhost/wordpress ➜ $NEW_URL)"
    wp search-replace 'http://localhost/wordpress' "$NEW_URL" --all-tables --allow-root || true
  else
    echo "🔁 Detected change in domain ➜ replacing $SAVED_URL → $NEW_URL"
    wp search-replace "$SAVED_URL" "$NEW_URL" --all-tables --allow-root || true
  fi

else
  echo "⚠️ No wp-config.php found — skipping search-replace."
fi

# 4. Avvia Apache
exec docker-entrypoint.sh apache2-foreground
