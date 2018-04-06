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
      <h1 class="jer_header">Jeremy Alexander</h1>
      <div class="w-row">
        <div class="w-col w-col-2"><img src="/wp-content/uploads/2018/03/jer3.jpg" width="105" class="image"></div>
        <div class="w-col w-col-10">
          <p class="paragraph-2">Thoughts on e-commerce, courses, ebooks, memberships, SaaS, design and marketing. <a class="jer_link_cat">Looking for my game courses?</a></p>
        </div>
      </div>
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
          <div class="jer_categories">
            <h3 class="jer_min_header">Categories</h3>
            <?php get_sidebar(); ?>	          
            
            <!--<ul class="unordered-list">-->
            <!--  <li><a href="#" class="jer_link_cat">Design</a></li>-->
            <!--  <li><a href="#" class="jer_link_cat">Marketing</a></li>-->
            <!--  <li><a href="#" class="jer_link_cat">SaaS</a></li>-->
            <!--  <li><a href="#" class="jer_link_cat">Software</a></li>-->
            <!--  <li><a href="#" class="jer_link_cat">Life</a></li>-->
            <!--  <li><a href="#" class="jer_link_cat">WordPress</a></li>-->
            <!--  <li><a href="#" class="jer_link_cat">Challenges</a></li>-->
            <!--  <li><a href="#" class="jer_link_cat">Online Business</a></li>-->
            <!--  <li><a href="#" class="jer_link_cat">Courses</a></li>-->
            <!--  <li><a href="#" class="jer_link_cat">Learning</a></li>-->
            <!--  <li><a href="#" class="jer_link_cat">Audience Building</a></li>-->
            <!--</ul>-->
          </div>
        </div>
      </div>
    </div>
  </div>



<?php get_footer(); ?>

