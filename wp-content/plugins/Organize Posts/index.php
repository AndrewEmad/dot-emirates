<?php
/*
 * Plugin Name: Organize Posts
 * Author: Andrew Emad
 * Description: This plugin helps you to organize your posts in blocks by simply drag & drop them until match the desired order.
 * Version: 1.0
 */

include "includes/functions.php";
include "includes/ui.php";

 define('BLOCKS_TABLE_NAME', 'blocks');
 define('RELATION_TABLE_NAME', 'block_posts');

 if (!function_exists('add_action')) {
    echo 'Not Allowed !';
}

// Setup

// Functions

// Check WP version
function op_activate_plugin()
{
    if (version_compare(get_bloginfo('version'), '4.5', '<')) {
        wp_die(__('Your wordpress version is not supported !'));
    }
    global $table_prefix, $wpdb;
    $wp_track_table = $table_prefix . BLOCKS_TABLE_NAME ;
    #Check to see if the table exists already, if not, then create it
    if($wpdb->get_var( "show tables like '".$wp_track_table."'" ) != $wp_track_table)
    {

        $sql = "CREATE TABLE `". $wp_track_table . "` ( ";
        $sql .= "  `ID`  bigint(20) unsigned  NOT NULL primary key AUTO_INCREMENT, ";
        $sql .= "  `Name`  varchar(128) NOT NULL, ";
        $sql .= "  `Date`  DATETIME DEFAULT CURRENT_TIMESTAMP ";
        $sql .= ")";
        require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
        dbDelta($sql);
    }
    $wp_track_table = $table_prefix . RELATION_TABLE_NAME ;
    if($wpdb->get_var( "show tables like '".$wp_track_table."'" ) != $wp_track_table)
    {
        $sql = "CREATE TABLE `". $wp_track_table . "` ( ";
        $sql .= "  `PostID`  bigint(20) unsigned  NOT NULL, ";
        $sql .= "  `BlockID`  bigint(20) unsigned  NOT NULL, ";
        $sql .= "  `Order`  int(128) NOT NULL, ";
        $sql .= "   PRIMARY KEY (PostID , BlockID),";
        $sql .= "   FOREIGN KEY (PostID) REFERENCES " . $table_prefix . "posts(ID),";
        $sql .= "   FOREIGN KEY (BlockID) REFERENCES " . $table_prefix . BLOCKS_TABLE_NAME . "(ID)";
        $sql .= ")";
        require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
        dbDelta($sql);
    }
}


// Register Admin Menu
function op_menu()
{
    add_menu_page(
        'Organize Posts',
        'Organize Posts',
        'activate_plugins',
        'op_menu',
        'op_menu_page'
    );
    

}

// Enqueue Styles & Scripts
function admin_enqueue()
{
    wp_register_style('op_bootstrap', plugins_url('/assets/css/bootstrap.min.css', __FILE__));
    wp_register_style('op_style', plugins_url('/assets/css/style.css', __FILE__));
    wp_register_style('op_datatable', plugins_url('/assets/css/datatables.min.css', __FILE__));
    wp_register_style('op_jquery_ui', plugins_url('/assets/css/jquery-ui.min.css', __FILE__));

    wp_enqueue_style('op_bootstrap');
    wp_enqueue_style('op_style');
    wp_enqueue_style('op_datatable');
    wp_enqueue_style('op_jquery_ui');

    wp_register_script('op_bootstrap', plugins_url('/assets/js/bootstrap.min.js', __FILE__), array('jquery'), false, true);
    wp_register_script('op_jquery_ui', plugins_url('/assets/js/jquery-ui.min.js', __FILE__), array('jquery'), false, true);
    wp_register_script('op_jquery_dataTable', plugins_url('/assets/js/jquery.dataTables.min.js', __FILE__), array('jquery'), false, true);
    wp_register_script('op_jquery_dataTable_bootstrap', plugins_url('/assets/js/dataTables.bootstrap4.min.js', __FILE__), array('jquery'), false, true);
    wp_register_script('op_dataTable', plugins_url('/assets/js/datatables.min.js', __FILE__), array('jquery'), false, true);
    wp_register_script('op_script', plugins_url('/assets/js/script.js', __FILE__), array('jquery'), false, true);

    wp_enqueue_script('op_bootstrap');
    wp_enqueue_script('op_script');
    wp_enqueue_script('op_jquery_ui');
    wp_enqueue_script('op_datatable');
    wp_enqueue_script('op_jquery_dataTable');
    wp_enqueue_script('op_jquery_dataTable_bootstrap');

}

// Admin Plugin Page
function op_menu_page()
{
    global $wpdb,$table_prefix;
    if(isset($_GET['block_id']) && is_numeric($_GET['block_id'])){
        $result = $wpdb->get_results('select * from '.$table_prefix.BLOCKS_TABLE_NAME.' WHERE ID = '.$_GET['block_id']);
        if(sizeof($result) != 0) {
            get_edit_block_page($result[0]);
            return;
        }

    }
    $table_name= $table_prefix.BLOCKS_TABLE_NAME;

    $result = $wpdb->get_results(
        'select '.$table_name.'.* , COUNT(`order`) as \'post_count\' 
                    FROM '.$table_name.' left outer join de_block_posts 
                    on '.$table_name.'.ID = '.$table_prefix.RELATION_TABLE_NAME.'.BlockID 
                    GROUP BY '.$table_name.'.ID');

    get_menu_page($result);
}


// Add New Block
function op_add_block(){
    check_admin_referer('op_verify_block');
    $name        = sanitize_text_field($_POST['op_block_name']);
    global $wpdb,$table_prefix;
    $wpdb->insert($table_prefix.BLOCKS_TABLE_NAME,array(
            'Name'      => $name
    ));
    wp_redirect(admin_url()."/admin.php?page=op_menu&&block_id=".$wpdb->insert_id);
}



// Enqueue scripts for reorder
function op_scripts()
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
function op_handler()
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

function op_search_scripts() {

    // register our main script but do not enqueue it yet
    wp_register_script( 'search', plugins_url('/assets/js/search.js',__FILE__), array('jquery') );

    // now the most interesting part
    // we have to pass parameters to loadmore.js script but we can get the parameters values only in PHP
    // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
    wp_localize_script( 'search', 'search_params', array(
        'ajaxurl'   => site_url() . '/wp-admin/admin-ajax.php' // WordPress AJAX

    ) );

    wp_enqueue_script( 'search' );
}


function op_search_handler(){

    global $wpdb,$table_prefix;
    $query = $wpdb->prepare('SELECT ID, post_title, post_content FROM '.$table_prefix.'posts WHERE post_title LIKE %s',array("%".$_POST['title']."%"));
    $res=$wpdb->get_results($query);
    die(json_encode($res));
}





function AIOThemes_joinPOSTMETA_to_WPQuery($join) {
    global $wp_query, $wpdb,$table_prefix;
    if(isset($wp_query->query_vars["op_order"]) && $wp_query->query_vars["op_order"] == 1) {
        $join .= "LEFT OUTER JOIN " . $table_prefix . TABLE_NAME ." ON ".$table_prefix."posts.ID = ".$table_prefix . TABLE_NAME . ".ID";
    }
    return $join;
}

function edit_posts_orderby($orderby_statement) {
    global $wp_query, $wpdb,$table_prefix;
    if(isset($wp_query->query_vars["op_order"]) && $wp_query->query_vars["op_order"] == 1) {
        $orderby_statement = $table_prefix . TABLE_NAME.".order DESC";
    }
    return $orderby_statement;
}
add_filter('posts_join', 'AIOThemes_joinPOSTMETA_to_WPQuery');
add_filter('posts_orderby', 'edit_posts_orderby');

// Hooks
register_activation_hook(__FILE__, 'op_activate_plugin');
add_action('admin_menu', 'op_menu');
add_action('admin_init', 'admin_enqueue');
add_action('admin_init', 'op_search_scripts');
add_action('admin_init', 'op_scripts');
add_action('wp_ajax_reorder', 'op_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_reorder', 'op_handler'); // wp_ajax_nopriv_{action}
add_action('admin_post_op_add_block', 'op_add_block');
add_action('wp_ajax_op_search', 'op_search_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_op_search', 'op_search_handler'); // wp_ajax_nopriv_{action}

?>