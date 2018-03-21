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
<div class="section-140">
<div class="w-container">
 
    <h1 class="jer_header"><?php wp_title(''); ?></h1>
    <h3 class="jer_sub"><?php the_excerpt(); ?></h3>
    <div class="jer_blog_meta">
        <a class="jer_category_on_post"><?php get_the_category(); ?></a>
    </div>
    
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
</div>
<?php get_footer(); ?>