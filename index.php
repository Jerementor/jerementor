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
<div class="section-80">
	<div class="w-container">
    <h1 class="jer_header"><?php wp_title(''); ?></h1>
    <h1 class="jer_header"><?php single_cat_title(); ?></h1>
    
    <div class="w-row">
        <div class="w-col w-col-7">
          	<ul class="jer_blog_ul">
		     <?php if ( have_posts() ) : ?>
        		<?php while ( have_posts() ) : the_post(); ?>
        		    <li>
           			    <?php the_title(sprintf('<a class="jer_link" href="%s" rel="bookmark">', esc_url(get_permalink() )), '</li>'); ?>
                    </li>
		        <?php endwhile; ?>
		    <?php endif; ?>    		
          	</ul>            

        </div>
        
        <div class="w-col w-col-5">
                   
	        <?php get_sidebar(); ?>	
        </div>
    </div>
    <!--End Row-->

	</div>
	<!--End Container-->
</div>



<?php get_footer(); ?>

