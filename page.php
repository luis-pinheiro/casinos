<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package casinos
 */

get_header();
?>

<main id="primary" class="container mx-auto site-main">
  <h1 class="bg-green-400">Page.php</h1>

  <?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', 'page');

	// If comments are open or we have at least one comment, load up the comment template.


	endwhile; // End of the loop.
	?>
</main><!-- #main -->