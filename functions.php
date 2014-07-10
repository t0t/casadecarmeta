<?php
//Registra areas en los widgets
if ( function_exists('register_sidebar') ) {
    register_sidebar( array('name' => 'primary', 'before_widget' => '', 'after_widget' => '', 'before_title' => '
<h2>', 'after_title' => '</h2>
 
') );

}

//Registra los menus
    add_action( 'init', 'register_my_menus' );
     
    function register_my_menus() {
    register_nav_menus(
    array(
    'menu-principal' => __( 'Menu Principal' ),
    'subsidiary' => __( 'Atencion al Cliente' ),
    'menu-footer' => __( 'Menu Footer' )
    )
    );
    }

// Add support for Featured Images
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_image_size('fotogrande', 360, 460, true);
    add_image_size('slider', 700, 268, true);
    add_image_size('thumbsportada', 230, 180, true);
    add_image_size('thumbspie', 100, 135, true);
    add_image_size('portadaproductos', 818, 200, true);
    add_image_size('thumbsservicios', 150, 150, true);
    add_image_size('thumbscomunicacion', 285, 175, true);
    add_image_size('carruselsubsidiary', 510, 120, true);
	add_image_size('sidebar', 185, 100, true);
    add_image_size('galeria', 105, 105, true);
}




?>