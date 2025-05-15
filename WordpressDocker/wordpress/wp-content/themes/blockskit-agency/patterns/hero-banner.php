<?php
/**
 * Title: Hero Banner
 * Slug: blockskit-agency/hero-banner
 * Categories: all, banner
 * Keywords: hero banner
 */
$blockskit_agency_images = array(
    '1' => BLOCKSKIT_AGENCY_URL . 'assets/images/home-banner-img1.jpg',
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($blockskit_agency_images[1]); ?>","id":64,"isUserOverlayColor":true,"focalPoint":{"x":0.68,"y":0.25},"customGradient":"linear-gradient(90deg,rgba(0,0,0,0.84) 12%,rgba(255,255,255,0) 100%)","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-small)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(90deg,rgba(0,0,0,0.84) 12%,rgba(255,255,255,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-64" alt="" src="<?php echo esc_url($blockskit_agency_images[1]); ?>" style="object-position:68% 25%" data-object-fit="cover" data-object-position="68% 25%"/><div class="wp-block-cover__inner-container"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-white"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"pure-white","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-pure-white-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'TRUST AND CLIENT FOCUS', 'blockskit-agency' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fixed","flexSize":"50px"}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:0;margin-bottom:0"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-white"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.1"}},"textColor":"pure-white"} -->
<h2 class="wp-block-heading has-pure-white-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--small);font-style:normal;font-weight:700;line-height:1.1"><?php echo wp_kses_post( html_entity_decode( esc_html__( 'Financial Strategies For Business &amp; Agency' , 'blockskit-agency' ) ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Quibusdam facilisis ornare exercitation beatae sociosqu potenti litora, congue, proident laborum nascetur excepturi modi maiores, quidem feugiat praesent cubilia dictum adipisicing morbi eget scelerisque.', 'blockskit-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"30px"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:30px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'GET STARTED', 'blockskit-agency' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"30px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"borderColor":"pure-white","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-border-color has-pure-white-border-color wp-element-button" style="border-width:1px;border-radius:30px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'CONTACT US', 'blockskit-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->