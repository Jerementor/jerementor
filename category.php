<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); 
?>


<!-- Category.php -->
<div class="section-140">
	<div class="w-container">
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
<!--End Section-->

<?php get_footer(); ?>