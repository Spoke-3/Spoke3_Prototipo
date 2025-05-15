<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href').substring(1);
      const targetElement = document.getElementById(targetId);

      if (!targetElement) return;

      // Trova tutti i <details> genitori, ordinati dal più esterno
      const detailsToOpen = [];
      let current = targetElement.closest('details');
      while (current) {
        detailsToOpen.unshift(current); // mette in ordine corretto
        current = current.parentElement.closest('details');
      }

      // Apri ogni <details> con delay per evitare glitch
      function openDetailsSequentially(index) {
        if (index >= detailsToOpen.length) {
          targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
          return;
        }

        const details = detailsToOpen[index];
        if (!details.hasAttribute('open')) {
          details.setAttribute('open', '');
        }

        setTimeout(() => openDetailsSequentially(index + 1), 150);
      }

      openDetailsSequentially(0);
      e.preventDefault();
    });
  });
});
</script>
<!-- end Simple Custom CSS and JS -->
