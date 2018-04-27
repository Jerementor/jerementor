<?php 
/**
 * The template for the index page
 *
 * 
 * @since 1.0
 */
get_header(); 
?>

<!-- Index.php -->
<h1 class="jer_page_header"><?php single_cat_title(); ?></h1>
<ul class="jer_blog_ul">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
    <li>
   	    <?php the_title(sprintf('<a class="jer_post_link" href="%s" rel="bookmark">', esc_url(get_permalink() )), '</li>'); ?>
    </li>
<?php endwhile; ?>
<?php endif; ?>    		



<?php get_footer(); ?>

