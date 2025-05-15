<?php
/**
 * Title: Testimonial
 * Slug: blockskit-agency/testimonial
 * Categories: all, testimonial
 * Keywords: testimonial
 */
$blockskit_agency_images = array(
    '1' => BLOCKSKIT_AGENCY_URL . 'assets/images/testimonial-img-1.png',
    '2' => BLOCKSKIT_AGENCY_URL . 'assets/images/testimonial-img2.jpg',
    '3' => BLOCKSKIT_AGENCY_URL . 'assets/images/testimonial-img3.jpg',
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"var:preset|spacing|large"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--large);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} -->
<h6 class="wp-block-heading has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'OUR TESTIMONIAL', 'blockskit-agency' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"secondary"} -->
<hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.1"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--small);font-style:normal;font-weight:700;line-height:1.1"><?php esc_html_e( 'Our Customer Reviews', 'blockskit-agency' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"},"margin":{"bottom":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--large)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"border":{"radius":"12px"}},"backgroundColor":"pure-white","className":"is-style-bk-box-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bk-box-shadow has-pure-white-background-color has-background" style="border-radius:12px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":112,"width":"50px","height":"auto","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["rgba(88, 209, 205, 0.2)","rgba(88, 209, 205, 0.2)"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($blockskit_agency_images[1]); ?>" alt="" class="wp-image-112" style="width:50px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|small"}}}} -->
<p class="has-text-align-left" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Gravida nihil nulla eum esent reiciendis! Pariatur expedita integer accuss eouys rem molestias. Etiam consequatee Pariatur eouys expedita integer accuss eouys rem molestias.', 'blockskit-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"id":111,"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($blockskit_agency_images[2]); ?>" alt="" class="wp-image-111" style="border-radius:50%;width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-small"}},"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"700"}}} -->
<h5 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--xx-small);font-style:normal;font-weight:700;line-height:1.1"><?php esc_html_e( 'Nat Reynoldes', 'blockskit-agency' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:500;line-height:1"><?php esc_html_e( 'CUSTOMER', 'blockskit-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"border":{"radius":"12px"}},"backgroundColor":"pure-white","className":"is-style-bk-box-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bk-box-shadow has-pure-white-background-color has-background" style="border-radius:12px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":112,"width":"50px","height":"auto","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["rgba(88, 209, 205, 0.2)","rgba(88, 209, 205, 0.2)"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($blockskit_agency_images[1]); ?>" alt="" class="wp-image-112" style="width:50px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|small"}}}} -->
<p class="has-text-align-left" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Gravida nihil nulla eum esent reiciendis! Pariatur expedita integer accuss eouys rem molestias. Etiam consequatee Pariatur eouys expedita integer accuss eouys rem molestias.', 'blockskit-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"id":113,"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($blockskit_agency_images[3]); ?>" alt="" class="wp-image-113" style="border-radius:50%;width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-small"}},"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"700"}}} -->
<h5 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--xx-small);font-style:normal;font-weight:700;line-height:1.1"><?php esc_html_e( 'Adam Henr', 'blockskit-agency' ); ?>y</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:500;line-height:1"><?php esc_html_e( 'CUSTOMER', 'blockskit-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}},"border":{"radius":"30px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button" style="border-radius:30px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'VIEW MORE REVIEWS', 'blockskit-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->