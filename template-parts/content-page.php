<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package casinos
 */

?>



<h1 class="border border-red-400">Content-page.php</h1>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'casinos'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->