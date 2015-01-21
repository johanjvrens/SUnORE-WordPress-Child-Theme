<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// Function to add prism.css and prism.js to the site
function add_prism() {
// Register prism.css file
wp_register_style(
'prismCSS', // handle name for the style so we can register, de-register, etc.
get_stylesheet_directory_uri() . '/css/prism.css' // location of the prism.css file
);
// Register prism.js file
wp_register_script(
'prismJS', // handle name for the script so we can register, de-register, etc.
get_stylesheet_directory_uri() . '/js/prism.js' // location of the prism.js file
);
// Enqueue the registered style and script files
wp_enqueue_style('prismCSS');
wp_enqueue_script('prismJS');
}
add_action('wp_enqueue_scripts', 'add_prism');
?>