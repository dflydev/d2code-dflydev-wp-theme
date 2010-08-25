<?php
function d2code_dflydev_setup() {
    define('D2CODE_CHILD_IN_USE', true);
}
add_action( 'after_setup_theme', 'd2code_dflydev_setup' );

function d2code_child_enqueue_style() {
    wp_enqueue_style('d2code_dflydev', get_bloginfo('stylesheet_directory').'/style.css', null, null, 'all');
}
?>