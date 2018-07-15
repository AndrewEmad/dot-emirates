<?php
/*
 * Plugin Name: Reorder Posts
 * Author: Andrew Emad
 * Description: This plugin helps you to reorder your posts by simply drag & drop them until match the desired order.
 * Version: 1.0
 */

if (!function_exists('add_action')) {
    echo 'Not Allowed !';
}

// Setup

// Functions

// Check WP version
function rp_activate_plugin()
{
    if (version_compare(get_bloginfo('version'), '4.5', '<')) {
        wp_die(__('Your wordpress version is not supported !'));
    }

}

// Register Admin Menu
function rp_menu()
{
    add_menu_page(
        'Reorder Posts',
        'Reorder Posts',
        'activate_plugins',
        'rp_menu',
        'rp_menu_page'
    );
}

// Enqueue Styles & Scripts
function admin_enqueue()
{
    wp_register_style('rp_bootstrap', plugins_url('/assets/css/bootstrap.min.css', __FILE__));
    wp_register_style('rp_style', plugins_url('/assets/css/style.css', __FILE__));
    wp_register_style('rp_jquery_ui', plugins_url('/assets/css/jquery-ui.min.css', __FILE__));

    wp_enqueue_style('rp_bootstrap');
    wp_enqueue_style('rp_style');
    wp_enqueue_style('rp_jquery_ui');

    wp_register_script('rp_bootstrap', plugins_url('/assets/js/bootstrap.min.js', __FILE__), array('jquery'), false, true);
    wp_register_script('rp_jquery_ui', plugins_url('/assets/js/jquery-ui.min.js', __FILE__), array('jquery'), false, true);
    wp_register_script('rp_script', plugins_url('/assets/js/script.js', __FILE__), array('jquery'), false, true);

    wp_enqueue_script('rp_bootstrap');
    wp_enqueue_script('rp_script');
    wp_enqueue_script('rp_jquery_ui');


}

// Admin Plugin Page
function rp_menu_page()
{
    if (isset($_GET['status']) && $_GET['status'] == '1') {
        ?>
        <div class="alert alert-success">Saved!</div>
        <?php
    }
    $posts = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => -1,
        'nopaging'       => 1
    ));?>
    <div class="container">
        <div class="header">
            <h1> Reorder Posts</h1>
            <h5>Drag & Drop to reorder posts</h3>
        </div>
        <div class="column" id="sortable">

    <?php while($posts->have_posts()){
        $posts->the_post();
    ?>
    
            <div class="portlet row" id="<?php echo get_the_ID() ?>" data-index = "0">
                <img class="img col-md-2" src="<?php echo get_the_post_thumbnail_url() ?>" />
                <div class="content col-md-10">
                    <div class="portlet-header"><?php echo get_the_title() ?></div>
                    <div class="portlet-content"><?php echo get_the_content() ?></div>
                </div>
            </div>
            
     
    
    <?php }?>
    </div>
    </div>
    <?php

}

// Hooks
register_activation_hook(__FILE__, 'rp_activate_plugin');
add_action('admin_menu', 'rp_menu');
add_action('admin_init', 'admin_enqueue');

// Shortcodes

?>