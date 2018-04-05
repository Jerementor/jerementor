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
      <div class="w-row">
        <div class="w-col w-col-8">
          <div class="w-row">
            <div class="column w-col w-col-3"><img src="/wp-content/uploads/2018/03/jer3.jpg" width="105" class="image"></div>
            <div class="w-col w-col-9">
              <h1 class="jer_min_header">Jeremy Alexander</h1>
              <p class="paragraph-2">Thoughts on e-commerce, specifically courses, ebooks, memberships, SaaS, design and marketing.</p>
            </div>
          </div>
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
        <div class="w-col w-col-4">
          <div class="jer_categories">
            <h3 class="jer_min_header">Categories</h3>
              <?php get_sidebar(); ?>	            
          </div>
        </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>