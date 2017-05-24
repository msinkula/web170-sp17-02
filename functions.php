<?php

/*
Theme Name: Web170 Sping 2017 Section 01 Demo Theme
Theme URI: https://github.com/msinkula/web170-sp17-02
Author: Mike Sinkula
Author URI: http://mikesinkula.com/
Description: This is the demo theme for my Web170 section 01 classs in the Spring 2017 Quarter. 
Version: 42.0
*/


// Register Sidebar(s)
register_sidebars(2, array('before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>'));
register_sidebar(array('name' => __('Sherrod', 'sherrod'), 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>'));
//



// Register Menu Locations
register_nav_menus(array('main-menu' => __('Main Menu'), 'footer-menu' => __('Footer Menu'),));
//

// Add theme support for Post Thumbnails & Featured Images
add_theme_support('post-thumbnails');
//

?>