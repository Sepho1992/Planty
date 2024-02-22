<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
?>


<?php add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );
 function add_admin_link( $items, $args ) 
{ if (is_user_logged_in() && $args->menu_class == 'hfe-menu-item'){
 $items .= '<li id="menu-item-319" class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"><a href="'. 
get_admin_url() .' class="hfe-menu-item">Admin</a></li>'; 
}
 return $items; } ?>




