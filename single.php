<?php 
/**
 * The template for displaying all blog posts
 *
 *
 * @package Platformer
 * @since 1.0
 */
get_header(); 
?>

<!--SINGLE.PHP-->
<h1 class="jer_home_header"><?php wp_title(''); ?></h1>

<div class="jer_meta_data">
	
	<div class="jer_meta_categories">
		<?php the_category(' ', 'multiple')?>
	</div>	
	<?php the_excerpt(); ?>

</div>
<div class="jer_blog">
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
<a href="/" class="jer_link_back">Back to home</a>
<?php get_footer(); ?>