<?php


//#########  Dynamic Header Title ######### 
function twentytwentytal_theme_support(){
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'twentytwentytal_theme_support');
// ################## ######### ######### ######### 


//#########  Menu Header Title ######### 

class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
  private $current_item;
  private $dropdown_menu_alignment_values = [
    'dropdown-menu-start',
    'dropdown-menu-end',
    'dropdown-menu-sm-start',
    'dropdown-menu-sm-end',
    'dropdown-menu-md-start',
    'dropdown-menu-md-end',
    'dropdown-menu-lg-start',
    'dropdown-menu-lg-end',
    'dropdown-menu-xl-start',
    'dropdown-menu-xl-end',
    'dropdown-menu-xxl-start',
    'dropdown-menu-xxl-end'
  ];

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $dropdown_menu_class[] = '';
    foreach($this->current_item->classes as $class) {
      if(in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = 'nav-item';
    $classes[] = 'nav-item-' . $item->ID;
    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-menu dropdown-menu-end';
    }

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor) ? 'active' : '';
    $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
    $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}

register_nav_menu('main-menu', 'Main menu');

//####################



//######### Register Styles ######### 
function twentytwentytal_register_styles(){

    $twentytwentytal_version = wp_get_theme()->get('Version');
    wp_enqueue_style('twentytwentytal-styles',get_template_directory_uri().'/style.css',array('bootstrap'), $twentytwentytal_version, 'all');
    wp_enqueue_style('bootstrap','https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css',array(), '5.0.0', 'all');
    wp_enqueue_style('fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css',array(), '5.15.2', 'all');
    wp_enqueue_style('swiperJS','https://unpkg.com/swiper/swiper-bundle.min.css',array(), '6.6.2', 'all');


}

add_action('wp_enqueue_scripts','twentytwentytal_register_styles');
// ################## ######### ######### ######### 


//######### Register Scripts ######### 
function twentytwentytal_register_scripts(){

    $twentytwentytal_version = wp_get_theme()->get('Version');
    wp_enqueue_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js',array(), '2.5.4', true);
    wp_enqueue_script('bootstrap','https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js',array(), '5.0.0', true);
    wp_enqueue_script('swiperJS','https://unpkg.com/swiper/swiper-bundle.min.js',array(), '6.6.2', true); 
    wp_enqueue_script('twentytwentytal',get_template_directory_uri().'/assets/js/main.js',array(), $twentytwentytal_version, true);


}

add_action('wp_enqueue_scripts','twentytwentytal_register_scripts');
// ################## ######### ######### ######### 

/* Donation post type */

function donation_post_type(){


    $args = array(
        'labels'=> array(
            'name'=>'Donations',
            'singular'=> 'Donation',
        ),
        'public' => true,
        'has_archive'=>true,
        'menu_icon'=> 'dashicons-money-alt',
        'supports' => array('title', 'editor', 'thumbnail'),
        
    );
    register_post_type('donation', $args);

}

add_action('init', 'donation_post_type'); 

// ################## ######### ######### ######### 


/* Story Post type */

function story_post_type(){

    $args = array(
        'labels'=> array(
            'name'=>'Story',
        ),
        'public' => true,
        'has_archive'=>true,
        'menu_icon'=> 'dashicons-book',
        'supports' => array('title', 'editor', 'thumbnail'),
        
    );
    register_post_type('story', $args);

}

add_action('init', 'story_post_type'); 


?>