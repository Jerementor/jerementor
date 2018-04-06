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
<div class="section-140">
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
		<?php if(have_posts()) : ?>
		     <?php while(have_posts()) : the_post(); ?>
		          <div class="post"> 
		               <!--<li><a href="<!?php the_permalink(); ?>"><!?php the_title(); ?></a></li>-->
		               <div class="entry">	
		                    <?php the_content(); ?>
		                    <?php
		                    $current_date ="";
		                    $count_posts = wp_count_posts();
		                    $nextpost = 0;
		                    $published_posts = $count_posts->publish;
		                    $myposts = get_posts(array('posts_per_page'=>$published_posts)); 
			               foreach($myposts as $post) :
		                         $nextpost++;
		                         setup_postdata($post);
		                         $date = get_the_date("F Y");   
		                         if($current_date!=$date): 
		                              if($nextpost>1): ?> 
		                                   </ul>
		                              <?php endif; ?> 
		                              <!--<strong><!?php echo $date; ?></strong>-->
		                              <ul start = "<?php echo $nextpost; ?>">
				                          <?php $current_date=$date;
				                         endif; ?>
				                         <li><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				                    	<?php endforeach; wp_reset_postdata(); ?>
		                    		</ul>
		              </div>
		          </div>
		     <?php endwhile; ?>
		<?php endif; ?>
        <!--<li><a href="#" class="jer_link">Quick Thoughts On Hosting Sites</a></li>-->
        <!--<li><a href="#" class="jer_link">Marketing</a></li>-->
        <!--<li><a href="#" class="jer_link">SaaS</a></li>-->
        <!--<li><a href="#" class="jer_link">Software</a></li>-->
        <!--<li><a href="#" class="jer_link">Life</a></li>-->
        <!--<li><a href="#" class="jer_link">WordPress</a></li>-->
        <!--<li><a href="#" class="jer_link">Challenges</a></li>-->
        <!--<li><a href="#" class="jer_link">Online Business</a></li>-->
        <!--<li><a href="#" class="jer_link">Courses</a></li>-->
        <!--<li><a href="#" class="jer_link">Learning</a></li>-->
        <!--<li><a href="#" class="jer_link">Audience Building</a></li>-->
      </ul>
    </div>
    <div class="w-col w-col-5">
      <div class="jer_categories">
        <h3 class="jer_min_header">Categories</h3>
        <ul class="unordered-list">
			<?php
			$categories = get_categories( array(
			    'orderby' => 'name',
			    'order'   => 'ASC'
			) );
			 
			foreach( $categories as $category ) {
			    $category_link = sprintf( 
			        '<a href="%1$s" alt="%2$s">%3$s</a>',
			        esc_url( get_category_link( $category->term_id ) ),
			        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
			        esc_html( $category->name )
			    );
			     
			    echo '<p>' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</p> ';
			    // echo '<p>' . sprintf( esc_html__( 'Description: %s', 'textdomain' ), $category->description ) . '</p>';
			    // echo '<p>' . sprintf( esc_html__( 'Post Count: %s', 'textdomain' ), $category->count ) . '</p>';
			}  
			?>
        	
          <!--<li><a href="#" class="jer_link_cat">Design</a></li>-->
          <!--<li><a href="#" class="jer_link_cat">Marketing</a></li>-->
          <!--<li><a href="#" class="jer_link_cat">SaaS</a></li>-->
          <!--<li><a href="#" class="jer_link_cat">Software</a></li>-->
          <!--<li><a href="#" class="jer_link_cat">Life</a></li>-->
          <!--<li><a href="#" class="jer_link_cat">WordPress</a></li>-->
          <!--<li><a href="#" class="jer_link_cat">Challenges</a></li>-->
          <!--<li><a href="#" class="jer_link_cat">Online Business</a></li>-->
          <!--<li><a href="#" class="jer_link_cat">Courses</a></li>-->
          <!--<li><a href="#" class="jer_link_cat">Learning</a></li>-->
          <!--<li><a href="#" class="jer_link_cat">Audience Building</a></li>-->
        </ul>
      </div>
    </div>
  </div>
</div>
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

<?php get_footer();