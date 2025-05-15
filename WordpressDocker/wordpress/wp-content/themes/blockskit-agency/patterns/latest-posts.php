<?php
/**
 * Title: Latest Posts
 * Slug: blockskit-agency/latest-posts
 * Categories: all, latest-posts
 * Keywords: latest-posts
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"var:preset|spacing|large"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--large);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} -->
<h6 class="wp-block-heading has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'OUR BLOG', 'blockskit-agency' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"secondary"} -->
<hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.1"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--small);font-style:normal;font-weight:700;line-height:1.1"><?php esc_html_e( 'Our Latest Posts', 'blockskit-agency' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":42,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"0","bottom":"var:preset|spacing|medium","right":"0","left":"0"}},"border":{"radius":"12px"}},"backgroundColor":"accent-text","className":"is-style-bk-box-shadow","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group is-style-bk-box-shadow has-accent-text-background-color has-background" style="border-radius:12px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--medium);padding-left:0"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"0px","bottomRight":"0px"}},"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium","top":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:post-title {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"}}} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":10,"className":"link-no-underline","fontSize":"small"} /-->

<!-- wp:read-more {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small","fontFamily":"body"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->