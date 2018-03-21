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
<div class="section-140">
<div class="w-container">
<div class="jer_640">
    <h1 class="jer_header"><?php wp_title(''); ?></h1>
    <h3><?php the_excerpt(); ?></h3>
    <div class="jer_blog_meta">
		<?php
			$categories = get_categories( array(
			    'orderby' => 'name',
			    'order'   => 'ASC'
			) );
	 
			foreach( $categories as $category ) {
			    $category_link = sprintf( 
			        '<a href="%1$s" alt="%2$s">%3$s ></a>',
			        esc_url( get_category_link( $category->term_id ) ),
			        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
			        esc_html( $category->name )
			    );
			     
			 echo '<a class="jer_category_on_post">' . sprintf(__('%s', 'textdomain' ), $category_link ) . '</a> ';
			    // echo '<p>' . sprintf( esc_html__( 'Description: %s', 'textdomain' ), $category->description ) . '</p>';
			    // echo '<p>' . sprintf( esc_html__( 'Post Count: %s', 'textdomain' ), $category->count ) . '</p>';
			}
		?>
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
</div>
<?php get_footer(); ?>