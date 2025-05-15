<?php
/**
 * Title: Gallery
 * Slug: blockskit-agency/gallery
 * Categories: all, gallery
 * Keywords: gallery
 */
$blockskit_agency_images = array(
    '1' => BLOCKSKIT_AGENCY_URL . 'assets/images/about-img1.jpg',
    '2' => BLOCKSKIT_AGENCY_URL . 'assets/images/gallery-img1.png',
    '3' => BLOCKSKIT_AGENCY_URL . 'assets/images/gallery-img2.jpg',
    '4' => BLOCKSKIT_AGENCY_URL . 'assets/images/gallery-img3.png',
    '5' => BLOCKSKIT_AGENCY_URL . 'assets/images/service-img1.jpg',
    '6' => BLOCKSKIT_AGENCY_URL . 'assets/images/gallery-img4.png',
    '7' => BLOCKSKIT_AGENCY_URL . 'assets/images/service-img3.jpg',
    '8' => BLOCKSKIT_AGENCY_URL . 'assets/images/gallery-img5.png',
    '9' => BLOCKSKIT_AGENCY_URL . 'assets/images/service-img4.jpg',
    '10' => BLOCKSKIT_AGENCY_URL . 'assets/images/gallery-img6.png',
    '11' => BLOCKSKIT_AGENCY_URL . 'assets/images/service-img2.jpg',
    '12' => BLOCKSKIT_AGENCY_URL . 'assets/images/gallery-img7.png',
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"},"blockGap":{"top":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--large)"><!-- wp:column {"width":"55%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} -->
<h6 class="wp-block-heading has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'OUR PORTFOLIO', 'blockskit-agency' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"secondary"} -->
<hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.1"}}} -->
<h2 class="wp-block-heading" style="font-style:normal;font-weight:700;line-height:1.1"><?php esc_html_e( 'Our Completed Activities', 'blockskit-agency' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"right","style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}},"border":{"radius":"30px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-right wp-element-button" style="border-radius:30px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'VIEW ALL PROJECTS', 'blockskit-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:cover {"url":"<?php echo esc_url($blockskit_agency_images[1]); ?>","id":42,"isUserOverlayColor":true,"minHeight":250,"customGradient":"linear-gradient(0deg,rgba(0,0,0,0.63) 42%,rgba(255,255,255,0) 100%)","contentPosition":"bottom center","style":{"layout":{"selfStretch":"fill","flexSize":null},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0","margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:12px;margin-bottom:var(--wp--preset--spacing--medium);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);min-height:250px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgba(0,0,0,0.63) 42%,rgba(255,255,255,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-42" alt="" src="<?php echo esc_url($blockskit_agency_images[1]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:image {"id":268,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url($blockskit_agency_images[2]); ?>" alt="" class="wp-image-268"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-white"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"textColor":"pure-white"} -->
<h5 class="wp-block-heading has-pure-white-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--x-small);font-style:normal;font-weight:700;line-height:1.2"><?php echo wp_kses_post( html_entity_decode( esc_html__( 'Implementing Plans For Digital Marketing &amp; Business' , 'blockskit-agency' ) ) ); ?></h5>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url($blockskit_agency_images[3]); ?>","id":269,"isUserOverlayColor":true,"minHeight":450,"customGradient":"linear-gradient(0deg,rgba(0,0,0,0.63) 42%,rgba(255,255,255,0) 100%)","contentPosition":"bottom center","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:12px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgba(0,0,0,0.63) 42%,rgba(255,255,255,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-269" alt="" src="<?php echo esc_url($blockskit_agency_images[3]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:image {"id":270,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url($blockskit_agency_images[4]); ?>" alt="" class="wp-image-270"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-white"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"textColor":"pure-white"} -->
<h5 class="wp-block-heading has-pure-white-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--x-small);font-style:normal;font-weight:700;line-height:1.2"><?php echo wp_kses_post( html_entity_decode( esc_html__( 'Online Workshops for Business Agency &amp; Corporate' , 'blockskit-agency' ) ) ); ?></h5>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url($blockskit_agency_images[5]); ?>","id":69,"isUserOverlayColor":true,"minHeight":450,"customGradient":"linear-gradient(0deg,rgba(0,0,0,0.63) 42%,rgba(255,255,255,0) 100%)","contentPosition":"bottom center","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0","margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:12px;margin-bottom:var(--wp--preset--spacing--medium);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgba(0,0,0,0.63) 42%,rgba(255,255,255,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-69" alt="" src="<?php echo esc_url($blockskit_agency_images[5]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:image {"id":272,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url($blockskit_agency_images[6]); ?>" alt="" class="wp-image-272"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-white"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"textColor":"pure-white"} -->
<h5 class="wp-block-heading has-pure-white-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--x-small);font-style:normal;font-weight:700;line-height:1.2"><?php echo wp_kses_post( html_entity_decode( esc_html__( 'Consulting to Business &amp; Agency Uplift the Market Value' , 'blockskit-agency' ) ) ); ?></h5>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url($blockskit_agency_images[7]); ?>","id":81,"isUserOverlayColor":true,"minHeight":250,"customGradient":"linear-gradient(0deg,rgba(0,0,0,0.63) 42%,rgba(255,255,255,0) 100%)","contentPosition":"bottom center","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0","margin":{"bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:12px;margin-bottom:0;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);min-height:250px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgba(0,0,0,0.63) 42%,rgba(255,255,255,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-81" alt="" src="<?php echo esc_url($blockskit_agency_images[7]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:image {"id":274,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url($blockskit_agency_images[8]); ?>" alt="" class="wp-image-274"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-white"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"textColor":"pure-white"} -->
<h5 class="wp-block-heading has-pure-white-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--x-small);font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e( 'Everything You Should Know About Return', 'blockskit-agency' ); ?></h5>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url($blockskit_agency_images[9]); ?>","id":82,"isUserOverlayColor":true,"minHeight":250,"customGradient":"linear-gradient(0deg,rgba(0,0,0,0.63) 42%,rgba(255,255,255,0) 100%)","contentPosition":"bottom center","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0","margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:12px;margin-bottom:var(--wp--preset--spacing--medium);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);min-height:250px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgba(0,0,0,0.63) 42%,rgba(255,255,255,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-82" alt="" src="<?php echo esc_url($blockskit_agency_images[9]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:image {"id":275,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url($blockskit_agency_images[10]); ?>" alt="" class="wp-image-275"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-white"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"textColor":"pure-white"} -->
<h5 class="wp-block-heading has-pure-white-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--x-small);font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e( '6 Big Commerce Design Tips For Big Results', 'blockskit-agency' ); ?></h5>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url($blockskit_agency_images[11]); ?>","id":80,"isUserOverlayColor":true,"minHeight":450,"customGradient":"linear-gradient(0deg,rgba(0,0,0,0.63) 42%,rgba(255,255,255,0) 100%)","contentPosition":"bottom center","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:12px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgba(0,0,0,0.63) 42%,rgba(255,255,255,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-80" alt="" src="<?php echo esc_url($blockskit_agency_images[11]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:image {"id":276,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url($blockskit_agency_images[12]); ?>" alt="" class="wp-image-276"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-white"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"textColor":"pure-white"} -->
<h5 class="wp-block-heading has-pure-white-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--x-small);font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e( 'Four Steps To Conduct A Successful Usability', 'blockskit-agency' ); ?></h5>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->