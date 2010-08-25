<?php
function d2code_dflydev_setup() {
    define('D2CODE_CHILD_IN_USE', true);
}
add_action( 'after_setup_theme', 'd2code_dflydev_setup' );

function d2code_child_enqueue_style() {
    wp_enqueue_style('d2code_dflydev', get_bloginfo('stylesheet_directory').'/style.css', null, null, 'all');
}

function d2code_dflydev_print_styles() {
    ?>
    <link href="http://www.google.com/profiles/simensen" rel="me" type="text/html" />
    <link href="http://www.google.com/profiles/srcmvn" rel="me" type="text/html" />
    <link href="http://www.google.com/profiles/dflydev" rel="me" type="text/html" />
    <link href="http://dflydev.com/favicon.ico" rel="shortcut icon" />
    <meta name="google-site-verification" content="2s7zw_Jp175z5ry2upkaDlMUfhCGkUQfjqqYlEM_MpY" />
    <?php
}
add_action('wp_print_styles', 'd2code_dflydev_print_styles');
?>