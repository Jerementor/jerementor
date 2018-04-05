<?php
//Loading in Scripts
function jerementor_enqueue_styles(){
    wp_enqueue_script('webflow-js', get_template_directory_uri() . '/assets/js/webflow.js', array('jquery'));
    // wp_enqueue_script('jerementor_custom', get_template_directory_uri() . '/assets/js/jerementor_custom.js', array('jquery'));
    
    wp_enqueue_style("normalize",  get_template_directory_uri() . "/assets/css/normalize.css");
    wp_enqueue_style("webflow",  get_template_directory_uri() . "/assets/css/webflow.css");
    wp_enqueue_style("jerementor",  get_template_directory_uri() ."/assets/css/jerementor-32240a.webflow.css");
    wp_enqueue_style("jerementor-style", get_stylesheet_uri());
    
}
add_action("wp_enqueue_scripts", "jerementor_enqueue_styles");
function jerementor_menu_setup(){
    
    //Registers custom primary nav menu 
    register_nav_menus( array(
        // 'logged-in'     => __("Logged-In Menu", "thegameclass-login"),
        'logged-out'    => __("Logged-Out Menu", "jerementor-logout"),
        // 'drop-down'    => __("Dropdown Menu", "thegameclass-drop"),
        // 'second-nav'    => __("Second Nav Menu", "thegameclass-secondnav"),
        
    ));
    
}
add_action("after_setup_theme", "jerementor_menu_setup");
function jerementor_setup(){
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	
	) );
}
add_action( 'after_setup_theme', 'jerementor_setup' );
// remove_filter('the_content', 'wpautop');
add_post_type_support( 'page', 'excerpt' );

add_filter ('get_the_excerpt','jerementor_filter_excerpt');

function jerementor_filter_excerpt ($post_excerpt) { 
  $post_excerpt = '<p class="jer_blog_sub">' . $post_excerpt . '</p>';
  return $post_excerpt;
}  

function jerementor_widgets(){

  
    register_sidebar(array(
     'name'           => __('Categories- Sidebar', 'jerementor'),
     'id'             => 'article-sidebar',
     'description'    => __('Add widgets here to appear in the sidebar', 'jerementor'),
     'before_widget'  => '<div id="%1$s" class="%2$s">',
     'after_widget'   => '</div>',
     'before_title'   => '<h3 class="jer_h3"> ',
     'after_title'    => '</h3>',
  ));
  
  
  
    
}
add_action('widgets_init', 'jerementor_widgets');

add_filter('widget_title','jerementor_widget_title'); 
function jerementor_widget_title($t)
{

    return null;
}