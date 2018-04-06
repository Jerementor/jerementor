<?php 
/**
 * The template for displaying all pages
 * Template Name: Main Section
 *
 * @since 1.0
 */
get_header(); 
?>
<!-- Main Section -->
<div class="section-80">
		<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				//
				the_content();
				//
			} // end while
		} // end if
		?>
</div>
<?php get_footer();