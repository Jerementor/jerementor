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
			        '<a class="jer_link_cat" href="%1$s" alt="%2$s">%3$s</a>',
			        esc_url( get_category_link( $category->term_id ) ),
			        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
			        esc_html( $category->name )
			    );
			     
			    echo '<li>' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</li> ';
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