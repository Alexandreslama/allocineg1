<?php 
function ajout_scripts() {

// enregistrement d'un nouveau script
wp_register_script('bootstrap_script', get_template_directory_uri() . '/assets/scripts/bootstrap.min.js', array('jquery'),'1.1', true);
wp_enqueue_script('bootstrap_script');

// enregistrement d'un nouveau script
wp_register_script('main_script', get_template_directory_uri() . '/assets/scripts/main.js', array('jquery'),'1.1', true);
wp_enqueue_script('main_script');




// enregistrement d'un nouveau style
wp_register_style( 'googlefont_style', 'https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,500,700,900' );
wp_enqueue_style( 'googlefont_style' );

// enregistrement d'un nouveau style
wp_register_style( 'bootstrap_style', get_template_directory_uri() . '/assets/styles/bootstrap.min.css' );
wp_enqueue_style( 'bootstrap_style' );



// enregistrement d'un nouveau style
wp_register_style( 'main_style', get_template_directory_uri() . '/assets/styles/main.css' );

// appel du style dans la page
wp_enqueue_style( 'main_style' );

}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );