<?php
/*
 * Plugin Name: Reorder Posts
 * Author: Andrew Emad
 * Description: This plugin helps you to reorder your posts by simply drag & drop them until match the desired order.
 * Version: 1.0
 */

 include "functions.php";

define('TABLE_NAME', 'posts_order');

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
    global $table_prefix, $wpdb;

    $wp_track_table = $table_prefix . TABLE_NAME ;

    #Check to see if the table exists already, if not, then create it

    if($wpdb->get_var( "show tables like '".$wp_track_table."'" ) != $wp_track_table) 
    {

        $sql = "CREATE TABLE `". $wp_track_table . "` ( ";
        $sql .= "  `ID`  bigint(20) unsigned  NOT NULL primary key, ";
        $sql .= "  `order`  int(128)   NOT NULL, ";
        $sql .= "   FOREIGN KEY (ID) REFERENCES ".$table_prefix."posts(ID)";
        $sql .= ")";
        require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
        dbDelta($sql);
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

    $posts=query_ordered_posts(array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'nopaging' => 1
    ));?>
    <div class="alert alert-success" style="display:none">Saved!</div>
    <div class="container">
        <div class="header row">
            <div class="col-6">
                <h1> Reorder Posts</h1>
                <h6>Drag & Drop to reorder posts</h6>
            </div>
            <div class="col-6" style="text-align:right">
                <button id="rp-save-order" class="btn btn-primary">
                    Save Order
                </button>
            </div>
        </div>
        <div class="column" id="sortable">

    <?php
    $cnt = 0;
    while ($posts->have_posts()) {
        $posts->the_post();
        ?>

            <div class="portlet row" id="<?php echo get_the_ID() ?>" 
                data-index = "<?php echo $cnt ?>" data-oldindex = "<?php echo $cnt ?>" data-newindex = "<?php echo $cnt++ ?>">
                <div class="post-id"><?php echo get_the_ID() ?></div>
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

// Enqueue scripts for reorder
function rp_scripts()
{

    // register our main script but do not enqueue it yet
    wp_register_script('save_order',  plugins_url('/assets/js/save-order.js', __FILE__), array('jquery'));

    // now the most interesting part
    // we have to pass parameters to loadmore.js script but we can get the parameters values only in PHP
    // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
    wp_localize_script('save_order', 'reorder_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX

    ));

    wp_enqueue_script('save_order');
}


// Ajax Handler for reorder posts
function rp_handler()
{
    global $wpdb,$table_prefix;
    $array = $_POST['elements'];
    $size = sizeof($_POST['elements']);
    for($i=0;$i<$size;$i++){
        $wpdb->replace($table_prefix.TABLE_NAME, array(
            'ID'      => $array[$i]['id'],
            'order'   => $array[$i]['order']*-1
        ));    
    }
}



function AIOThemes_joinPOSTMETA_to_WPQuery($join) {
    global $wp_query, $wpdb,$table_prefix;
    if(isset($wp_query->query_vars["rp_order"]) && $wp_query->query_vars["rp_order"] == 1) {
        $join .= "LEFT OUTER JOIN " . $table_prefix . TABLE_NAME ." ON ".$table_prefix."posts.ID = ".$table_prefix . TABLE_NAME . ".ID";
    }
    return $join;
}

function edit_posts_orderby($orderby_statement) {
    global $wp_query, $wpdb,$table_prefix;
    if(isset($wp_query->query_vars["rp_order"]) && $wp_query->query_vars["rp_order"] == 1) {
        $orderby_statement = $table_prefix . TABLE_NAME.".order DESC";
    }
    return $orderby_statement;
}
add_filter('posts_join', 'AIOThemes_joinPOSTMETA_to_WPQuery');
add_filter('posts_orderby', 'edit_posts_orderby');

// Hooks
register_activation_hook(__FILE__, 'rp_activate_plugin');
add_action('admin_menu', 'rp_menu');
add_action('admin_init', 'admin_enqueue');
add_action('admin_init', 'rp_scripts');
add_action('wp_ajax_reorder', 'rp_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_reorder', 'rp_handler'); // wp_ajax_nopriv_{action}

// Shortcodes

?>