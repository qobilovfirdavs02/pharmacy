<?php
 /**
  * Title: Blog Section One
  * Slug: blog-section-one
  * Categories: medical-heed
  * Keywords: blog, blog one, blog section, home blog section, home page blog section
  */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"},"metadata":{"name":"Blog Layout One"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"15px","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"full","className":"section-title-wrapper","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignfull section-title-wrapper"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"super-title"} -->
<p class="has-text-align-center super-title" style="font-style:normal;font-weight:600"><?php esc_html_e('Our Latest Posts','medical-heed'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h2 class="wp-block-heading alignfull has-text-align-center" style="margin-top:0;margin-bottom:0"><?php esc_html_e('Business News & Articles','medical-heed'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"5px","bottom":"5px"}}}} -->
<p class="has-text-align-center" style="margin-top:5px;margin-bottom:5px"><?php esc_html_e('Welcome and thank you for installing themes. Business Roy is a clean, beautiful, and fully customizable responsive modern free WordPress business theme, especially for App-related landing pages.','medical-heed'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":30,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"className":"box-shadow","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group box-shadow" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"blog-post-thumbnail","layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-post-thumbnail"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-title {"textAlign":"center","level":4,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.4"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:post-author {"avatarSize":24,"showBio":false,"isLink":true} /-->

<!-- wp:post-date {"className":"blog-date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"textAlign":"center","moreText":""} /-->

<!-- wp:read-more {"content":"Read More","style":{"layout":{"selfStretch":"fit","flexSize":null}},"className":"is-style-primary-button"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->