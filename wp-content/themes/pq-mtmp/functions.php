<?php 

/* Front Facing Styles and Scripts
-------------------------------------------------------------- */
 
function load_my_styles_scripts() {
    
    // Styles
    
   	wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', '', 5, 'all' ); 
    
    // Disables jquery then registers it again to go into footer
    
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
    wp_enqueue_script( 'jquery' );
		
    // Enqueue Script

     wp_enqueue_script( 'jquery-lity', get_template_directory_uri() . '/js/lity-min.js', 'jquery', '', true );
     wp_enqueue_script( 'jquery-slick', get_template_directory_uri() . '/js/slick-min.js', 'jquery', '', true );
     wp_enqueue_script( 'jquery-waypoints', get_template_directory_uri() . '/js/waypoints-min.js', 'jquery', '', true );
     wp_enqueue_script( 'jquery-underscore', get_template_directory_uri() . '/js/underscore-min.js', 'jquery', '', true );
     wp_enqueue_script( 'jquery-lazysizes', get_template_directory_uri() . '/js/lazysizes-min.js', 'jquery', '', true );
     
     wp_enqueue_script( 'jquery-addon', get_template_directory_uri() . '/js/custom-min.js', 'jquery', '', true );

     // wp_enqueue_script( 'jquery-macy', get_template_directory_uri() . '/js/macy.js', 'jquery', '', true );

     // wp_enqueue_script( 'jquery-modernizr', get_template_directory_uri() . '/js/modernizr-webp.js', 'jquery', '', true );

    // Gravity Form Files if you want to defer all gform files to the footer

    // wp_enqueue_script( 'jquery-mygravity', get_template_directory_uri() . '/js/gravityforms-min.js', 'jquery', '', true );
    

 }
 
 add_action( 'wp_enqueue_scripts', 'load_my_styles_scripts', 20 );

/* Backend/Admin Styles and Scripts
-------------------------------------------------------------- */

function admin_scripts( ) {

    // Styles

    // The files below are needed to properly show a few ACF Gutenberg Blocks in the text editor see /scss/imports/components/acf-blocks/admin/admin.scss file for reference

    wp_enqueue_style( 'styles', get_template_directory_uri() . '/scss/imports/components/acf_blocks/admin/admin.css', '', 5, 'all' ); 

    // Scripts

    // The files below are needed to properly show a few ACF Gutenberg Blocks in the text editor

    wp_enqueue_script( 'jquery-lity', get_template_directory_uri() . '/js/lity-min.js', 'jquery', '', true );
    wp_enqueue_script( 'jquery-slick', get_template_directory_uri() . '/js/slick-min.js', 'jquery', '', true );

  }

  add_action('admin_enqueue_scripts', 'admin_scripts');
 
 
 
 /* Defer JS for Lighthouse
-------------------------------------------------------------- */
 
 
/*
 function add_defer_attribute($tag, $handle) {
   // add script handles to the array below
   $scripts_to_defer = array('jquery', 'jquery-addon', 'jquery-mygravity');
   
   foreach($scripts_to_defer as $defer_script) {
      if ($defer_script === $handle) {
         return str_replace(' src', ' defer="defer" src', $tag);
      }
   }
   return $tag;
}


add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);
*/



/* dequeue embed for lighthouse
-------------------------------------------------------------- */


/*
 function my_deregister_scripts(){
  
  wp_deregister_script( 'wp-embed' );

	}

	add_action( 'wp_footer', 'my_deregister_scripts' );
*/



/* dequeue gravity form files that effect critical chain page speed and defer them later in a combined file
-------------------------------------------------------------- */
	
	
/*
	function deregister_scripts(){
			
  wp_deregister_script("gform_placeholder");
  wp_deregister_script("gform_masked_input");
  wp_deregister_script("gform_json");
  wp_deregister_script("gform_gravityforms");
  
 }
	
	
add_action("gform_enqueue_scripts", "deregister_scripts");
*/



/* CSS in Header for Lighthouse
-------------------------------------------------------------- */
 
 
// function internal_css_print() {
//    echo '<style>';
   
//    include_once get_template_directory() . '/style.css';
  
//    echo '</style>';
// }


// add_action( 'wp_head', 'internal_css_print' );


/* Force Gravity Forms to init scripts in the footer and ensure that the DOM is loaded before scripts are executed
-------------------------------------------------------------- */

add_filter( 'gform_init_scripts_footer', '__return_true' );
add_filter( 'gform_cdata_open', 'wrap_gform_cdata_open', 1 );
function wrap_gform_cdata_open( $content = '' ) {
if ( ( defined('DOING_AJAX') && DOING_AJAX ) || isset( $_POST['gform_ajax'] ) ) {
return $content;
}
$content = 'document.addEventListener( "DOMContentLoaded", function() { ';
return $content;
}
add_filter( 'gform_cdata_close', 'wrap_gform_cdata_close', 99 );
function wrap_gform_cdata_close( $content = '' ) {
if ( ( defined('DOING_AJAX') && DOING_AJAX ) || isset( $_POST['gform_ajax'] ) ) {
return $content;
}
$content = ' }, false );';
return $content;
}

/* Remove margin from admin bar
-------------------------------------------------------------- */

function ilaw_remove_html_admin_margin() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'ilaw_remove_html_admin_margin');

/* No Tab Conflicts Gravity Forms
 --------------------------------------------------------------------------------------- */

add_filter( 'gform_tabindex', 'gform_tabindexer', 10, 2 );
function gform_tabindexer( $tab_index, $form = false ) {
  $starting_index = 1000; // if you need a higher tabindex, update this number
  if( $form )
    add_filter( 'gform_tabindex_' . $form['id'], 'gform_tabindexer' );
  return GFCommon::$tab_index >= $starting_index ? GFCommon::$tab_index : $starting_index;
}

/* Remove Unnecessary Scripts
-------------------------------------------------------------- */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/* Register Nav-Menus
-------------------------------------------------------------- */

register_nav_menus(array(
    'main_menu' => 'Main Menu',
    //'pa_menu' => 'PA Sidebar Menu',
));

/* Widgets
-------------------------------------------------------------- */

/*
if (function_exists('register_sidebars')) {


    register_sidebar(array(
        'name' => 'Recent Posts',
        'id' => 'recent_posts',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));

    
    register_sidebar(array(
        'name' => 'Category',
        'id' => 'category_sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
        'name' => 'Archive',
        'id' => 'archive_sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
        'name' => 'Default Sidebar',
        'id' => 'default_sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));

 }
*/

/* Add Theme Support Page Thumbnails
-------------------------------------------------------------- */

add_theme_support('post-thumbnails');

/* Modify the_excerpt() " read more "
-------------------------------------------------------------- */

function new_excerpt_more($more)
{
    global $post;
    return '... <a href="' . get_permalink($post->ID) . '">' . 'read more' . '</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');

/* Add Page Slug to Body Class
-------------------------------------------------------------- */
function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}

add_filter('body_class', 'add_slug_body_class');



/* ACF: CREATE OPTIONS PAGE
-------------------------------------------------------------- */

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title' 	=> 'Theme Options',
    'menu_title'	=> 'Theme Options',
    'menu_slug' 	=> 'theme-options',
    'capability'	=> 'edit_posts',
    'redirect'		=> false
  ));

}

/* ACF Blocks for PA Pages and Posts
-------------------------------------------------------------- */

add_action('acf/init', 'my_acf_init');
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
	
		acf_register_block(array(
			'name'				=> 'ilawyer-video',
			'title'				=> __('iLawyer Video'),
			'description'		=> __('An iLawyer video block that supports Wistia and Youtube.'),
            'render_template'	=> 'page-templates/includes/blocks/video-block.php',
            'enqueue_assets' => function(){
                wp_enqueue_style( 'video-block-css', get_template_directory_uri() . '/scss/imports/components/acf_blocks/video_block/style.css' );
                wp_enqueue_script( 'jquery-video-block', get_template_directory_uri() . '/js/acf_blocks/video_block/custom-min.js', 'jquery', '', true );
              },
            'category'			=> 'media',
            'post_types'        => array('post', 'page'),
            'supports'	        =>  array(
                'align'	=>  false,
            ),
            'keywords'		    => array( 'video', 'quote' ),
			'icon' => array(
                'foreground' => '#3766eb',
                'src'        => 'format-video',
              ),
              'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    
                )
            )
        ));
        
        acf_register_block(array(
			'name'				=> 'ilawyer-case-results',
			'title'				=> __('iLawyer Case Results'),
			'description'		=> __('An iLawyer Case Results block.'),
            'render_template'	=> 'page-templates/includes/blocks/featured-case-results-block.php',
            'enqueue_assets' => function(){
                wp_enqueue_style( 'featured-case-results-block-css', get_template_directory_uri() . '/scss/imports/components/acf_blocks/featured_case_results_block/style.css' );
                wp_enqueue_script( 'jquery-featured-case-results-block', get_template_directory_uri() . '/js/acf_blocks/featured_case_results_block/custom-min.js', 'jquery', '', true );
              },
            'category'			=> 'text',
            'post_types'        => array('post', 'page'),
            'keywords'		    => array( 'case results', 'quote' ),
            'supports'	        =>  array(
                'align'	=>  false,
            ),
			'icon' => array(
                'foreground' => '#3766eb',
                'src'        => 'wordpress',
              ),
              'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    
                )
            )
		));
	}
}

/* Adds Default Images to ACF Image Field
-------------------------------------------------------------- */

add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field');
	function add_default_value_to_image_field($field) {
		acf_render_field_setting( $field, array(
			'label'			=> 'Default Image',
			'instructions'		=> 'Appears when creating a new post',
			'type'			=> 'image',
			'name'			=> 'default_value',
		));
	}

/* Adds Default Rows to ACF Featured Case Results Block Repeater 
-------------------------------------------------------------- */

    add_filter('acf/load_value/key=field_5f3870bcc4d42',  'acf_load_my_defaults', 10, 3);

    function acf_load_my_defaults($value, $post_id, $field) {
    
      if ($value === false) {
    
        $value = array();
    
        $value[] = array(
            'field_5f3870d1c4d43' => '$72 Million',
            'field_5f3870d7c4d44' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        );
        $value[] = array(
            'field_5f3870d1c4d43' => '$55 Million',
            'field_5f3870d7c4d44' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
          );
        $value[] = array(
            'field_5f3870d1c4d43' => '$72 Million',
            'field_5f3870d7c4d44' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        );
        $value[] = array(
            'field_5f3870d1c4d43' => '$55 Million',
            'field_5f3870d7c4d44' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
          );
      }
    
      return $value;
    }


/* Allow Various to Media Upload
-------------------------------------------------------------- */

add_filter('upload_mimes', 'add_custom_upload_mimes');
 function add_custom_upload_mimes($existing_mimes) {
     
    $existing_mimes['woff2'] = 'application/x-font-woff2';
    $existing_mimes['webp'] = 'image/webp';
    $existing_mimes['svg'] = 'image/svg+xml';

     return $existing_mimes;
 }

/* Blog Pagination
-------------------------------------------------------------- */

function wpbeginner_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="paged_wrapper"><div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li class="myprev">%s</li>' . "\n", get_previous_posts_link('prev') );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="mynext">%s</li>' . "\n", get_next_posts_link('next') );
 
    echo '</ul></div></div>' . "\n";
 
}

/* Remove Block Library 
-------------------------------------------------------------- */

// function smartwp_remove_wp_block_library_css(){
//  wp_dequeue_style( 'wp-block-library' );
//  wp_dequeue_style( 'wp-block-library-theme' );
// }
// add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css' );

/* Responsive Content Images 
-------------------------------------------------------------- */

function ilaw_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if( 'page' === get_post_type()){
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}
	
	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'ilaw_content_image_sizes_attr', 10 , 2 );

// Responsive Featured Images 
function ilaw_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'ilaw_post_thumbnail_sizes_attr', 10 , 3 );





