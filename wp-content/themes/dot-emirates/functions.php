<?php

    include "navwalker.php";

    /*
    * Enqueue style & scripts
    * author: Andrew Emad
    */
    function de_enqueue(){
        wp_register_style( 'de_boilerplate', get_template_directory_uri() . "/assets/css/boilerplate.css");
        wp_register_style( 'de_mygrid', get_template_directory_uri() . "/assets/css/mygrid.css");
        wp_register_style( 'de_main', get_template_directory_uri() . "/assets/css/main.css");

        wp_enqueue_style('de_boilerplate');
        wp_enqueue_style('de_mygrid');
        wp_enqueue_style('de_main');

        wp_deregister_script( 'jquery');
        wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), false, true);
        wp_register_script( 'de_respond', get_template_directory_uri() . '/assets/js/respond.min.js');
        wp_register_script( 'de_myscript', get_template_directory_uri() . '/assets/js/myscript.js', array(), false, true);
        
        wp_enqueue_script('jquery');
        wp_enqueue_script('de_respond');
        wp_enqueue_script('de_myscript');

    }


    /*
    * Theme setup & configurations
    * author: Andrew Emad
    */
    function de_theme_setup(){
        register_nav_menu( 'primary', __('Primary Menu'));
    }



    /*
     * Add Theme Options if not exists
     * author: Andrew Emad
     */
    function de_activate(){
        $theme_opts = get_option('de_opts');
        if(!$theme_opts){
            $opts = array(
              'facebook'        => '',
              'twitter'         => '',
              'telegram'        => '',
              'logo'            => '',
              'apple'           => '',
              'windows'         => '',
              'android'         => ''
            );

           add_option('de_opts', $opts);
        }
    }

    /*
     * Admin Options Menu
     * author: Andrew Emad
     */
    function de_options_menu(){
        add_menu_page(
            'Dot Emirates Options',
            'Theme Options',
            'edit_theme_options',
            'de_theme_opts',
            'de_options_page'
        );
    }


    /*
     * Admin Options Page
     * author: Andrew Emad
     */
    function de_options_page(){
        $opts = get_option('de_opts');
        if(isset($_GET['status']) && $_GET['status'] == '1'){
            ?>
            <div class="alert alert-success">Saved!</div>
            <?php
        }
        ?>
        <div class="container">
            <h1 style="margin-bottom:20px;margin-top:10px">Options</h1>
                <form method="post" action="admin-post.php">
                    <input type="hidden" name="action" value="de_save_options" />
                    <?php wp_nonce_field('de_verify_options'); ?>
                    <div class="row" style="margin-bottom:20px">
                        <label class="col-md-2 col-xs-6">Logo</label>
                        <div class="row custom-file col-md-9 col-xs-6 btn-group">
                            <input type="text" class="form-control col-md-9" readonly style="display:inline" name="de_option_logo" value="<?php echo $opts['logo']?>" />
                            <button type="button" id="logo" class="btn-sm btn-primary col-md-2">Upload</button>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom:20px">
                        <label class="col-md-2 col-xs-6">Facebook</label>
                        <input class="col-md-8 col-xs-6 form-control" type="text" name="de_option_facebook" value="<?php echo $opts['facebook']?>" />
                    </div>
                    <div class="row" style="margin-bottom:20px">
                        <label class="col-md-2 col-xs-6">Twitter</label>
                        <input class="col-md-8 col-xs-6 form-control" type="text" name="de_option_twitter" value="<?php echo $opts['twitter']?>" />
                    </div>
                    <div class="row" style="margin-bottom:20px">
                        <label class="col-md-2 col-xs-6">Telegram</label>
                        <input class="col-md-8 col-xs-6 form-control" type="text" name="de_option_telegram" value="<?php echo $opts['telegram']?>" />
                    </div>
                    <div class="row" style="margin-bottom:20px">
                        <label class="col-md-2 col-xs-6">Apple</label>
                        <input class="col-md-8 col-xs-6 form-control" type="text" name="de_option_apple" value="<?php echo $opts['apple']?>" />
                    </div>
                    <div class="row" style="margin-bottom:20px">
                        <label class="col-md-2 col-xs-6">Windows</label>
                        <input class="col-md-8 col-xs-6 form-control" type="text" name="de_option_windows" value="<?php echo $opts['windows']?>" />
                    </div>
                    <div class="row" style="margin-bottom:50px">
                        <label class="col-md-2 col-xs-6">Android</label>
                        <input class="col-md-8 col-xs-6 form-control" type="text" name="de_option_android" value="<?php echo $opts['android']?>" />
                    </div>

                    <input type="submit" value="Save Changes" class="btn  btn-primary" />
                </form>
        </div>
        <?php
    }

    /*
     * Initiate admin panel
     * author: Andrew Emad
     */
    function de_admin_init(){
        add_action('admin_enqueue_scripts', 'de_options_enqueue');
        add_action('admin_post_de_save_options', 'de_save_options');

    }

    /*
     * Enqueue Styles & Scripts for Options Page
     * author: Andrew Emad
     */
    function de_options_enqueue(){
        if(isset($_GET["page"]) && $_GET['page'] == 'de_theme_opts') {
            wp_register_style('de_bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css");
            wp_enqueue_style('de_bootstrap');

            wp_register_script('de_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
            wp_enqueue_script('de_bootstrap');

            wp_register_script( 'de_options', get_template_directory_uri() . '/assets/js/options.js', array(), false, true);
            wp_enqueue_script('de_options');

            wp_enqueue_media();
        }
    }

    /*
     * Save Options
     * author: Andrew Emad
     */
    function de_save_options(){
        if(!current_user_can('edit_theme_options')){
            wp_die(__("You don't have permission to do this action."));
        }
        check_admin_referer('de_verify_options');
        $opts                   = get_option('de_opts');

        $opts["facebook"]       = sanitize_text_field($_POST['de_option_facebook']);
        $opts["twitter"]        = sanitize_text_field($_POST['de_option_twitter']);
        $opts["telegram"]       = sanitize_text_field($_POST['de_option_telegram']);
        $opts["android"]       = sanitize_text_field($_POST['de_option_android']);
        $opts["windows"]       = sanitize_text_field($_POST['de_option_windows']);
        $opts["apple"]       = sanitize_text_field($_POST['de_option_apple']);
        $opts["logo"]           = esc_url_raw($_POST['de_option_logo']);

        update_option('de_opts', $opts);
        wp_redirect( admin_url('admin.php?page=de_theme_opts&status=1'));


    }

    /*
     * Return the relative date instead of plain date
     * author: Andrew Emad
     */
    function wp_relative_date() {
        $seconds = current_time( 'timestamp' ) - get_the_time('U') ;
        $minutes = $seconds * 1.0 / 60;
        $hours = $minutes *1.0 / 60;
        $days = $hours / 24;
        $months = $days / 30;
        $years = $months / 12;
        if($minutes < 2){
            return "منذ دقيقة";
        }
        else if($minutes < 3){
            return "منذ دقيقتين";
        }
        else if($minutes < 11){
            return "منذ ".floor($minutes)." دقائق";
        }
        else if($hours < 1){
            return "منذ ". floor($minutes) ." دقيقة";
        }
        
        else if($hours < 2){
            return "منذ ساعة";
        }
        
        else if($hours < 3){
            return "منذ ساعتين";
        }
        else if($hours < 11){
            return "منذ ".floor($hours)." ساعات";
        }
        else if($days < 1){
            return "منذ ".floor($hours)." ساعة";
        }
        else if($days < 2){
            return "منذ يوم";
        }
        else if($days < 3){
            return "منذ يومين";
        }
        else if($days < 11){
            return "منذ ".floor($days)." ايام";
        }
        else if($months < 1){
            return "منذ ".floor($days)." يوم";
        }
        else if($months < 2){
            return "منذ شهر";
        }
        else if($months < 3){
            return "منذ شهرين";
        }
        else if($months < 11){
            return "منذ ".floor($months)." اشهر";
        }
        else if($years < 1){
            return "منذ ".floor($months)." شهر";
        }
        else if($years < 2){
            return "منذ سنة";
        }
        else if($years < 3){
            return "منذ سنتين";
        }
        else if($years < 11){
            return "منذ ".floor($years)." سنوات";
        }
        else if($years >= 11){
            return "منذ ".floor($years)." سنين";
        }
        
      }
      
    /*
    * Custom length for excerpt
    * author: Andrew Emad
    */
    function custom_excerpt_length( $length ) {
        return 50;
    }

    /*
    * Create Custom Post Types
    * author: Andrew Emad
    */
 
    function create_post_types() {
 
        // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => 'Videos',
            'singular_name'       =>'Video',
            'menu_name'           => 'Videos',
            'parent_item_colon'   => 'Parent Video',
            'all_items'           => 'All Videos',
            'view_item'           => 'View Video',
            'add_new_item'        => 'Add New Video',
            'add_new'             => 'Add New',
            'edit_item'           => 'Edit Video',
            'update_item'         => 'Update Video',
            'search_items'        => 'Search Video',
            'not_found'           => 'Not Found',
            'not_found_in_trash'  => 'Not found in Trash',
        );
         
        // Set other options for Custom Post Type
         
        $args = array(
            'label'               => 'Videos',
            'description'         => 'Video news and reviews',
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres', 'category' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
         
        // Registering your Custom Post Type
        register_post_type( 'Videos', $args );


        // Blog Post Type
        $labels = array(
            'name'                => 'Articles',
            'singular_name'       =>'Article',
            'menu_name'           => 'Articles',
            'parent_item_colon'   => 'Parent Article',
            'all_items'           => 'All Articles',
            'view_item'           => 'View Article',
            'add_new_item'        => 'Add New Article',
            'add_new'             => 'Add New',
            'edit_item'           => 'Edit Article',
            'update_item'         => 'Update Article',
            'search_items'        => 'Search Article',
            'not_found'           => 'Not Found',
            'not_found_in_trash'  => 'Not found in Trash',
        );
         
        // Set other options for Custom Post Type
         
        $args = array(
            'label'               => 'Articles',
            'description'         => 'Article news and reviews',
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres', 'category' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
          // Registering your Custom Post Type
        register_post_type( 'Articles', $args );



        // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => 'Contacts',
            'singular_name'       =>'Contact',
            'menu_name'           => 'Contacts',
            'parent_item_colon'   => 'Parent Contact',
            'all_items'           => 'All Contacts',
            'view_item'           => 'View Contact',
            'add_new_item'        => 'Add New Contact',
            'add_new'             => 'Add New',
            'edit_item'           => 'Edit Contact',
            'update_item'         => 'Update Contact',
            'search_items'        => 'Search Contact',
            'not_found'           => 'Not Found',
            'not_found_in_trash'  => 'Not found in Trash',
        );
         
        // Set other options for Custom Post Type
         
        $args = array(
            'label'               => 'Contacts',
            'description'         => 'Contact news and reviews',
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres', 'category' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );


        // Registering your Custom Post Type
        register_post_type( 'Contacts', $args );
    }


    
    function load_more_scripts() {
 
        // register our main script but do not enqueue it yet
        wp_register_script( 'load_more', get_template_directory_uri() . '/assets/js/loadmore.js', array('jquery') );
     
        // now the most interesting part
        // we have to pass parameters to loadmore.js script but we can get the parameters values only in PHP
        // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
        wp_localize_script( 'load_more', 'load_more_params', array(
            'ajaxurl'   => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
            'offset'    => 19,
            
        ) );
     
         wp_enqueue_script( 'load_more' );
    }
     




    function loadmore_ajax_handler(){
 
        // prepare our arguments for the query
        $args = array(
            'offset'            => $_POST['offset'], // we need next page to be loaded
            'post_status'       => 'publish',
            'post_type' 		=> 'post',
			'posts_per_page'	=> 2
        );
        // it is always better to use WP_Query but not here
        query_posts( $args );
        
        if( have_posts() ) :
            $out  = '<div class="oneSection">';
            $out .= '<div class="myrow clearfix">';
            while( have_posts() ): the_post();
                $out .= '<div class="mycol-lg-6">';
                $out .= '<div class="mainPost big">';
                $out .= '<div class="top">';
                $out .= '<div class="img"><img src="'. get_field('source_logo') .'" alt=""></div>';
                $out .= '<div class="data">';
                $out .= '<div class="source">'.get_field('source_name').'</div>';
                $out .= '<div>'.get_the_date().'</div>';
                $out .= '</div>';
                $out .= '</div>';
                $out .= '<a href="'.get_permalink().'" class="avatar"><img src="'. get_the_post_thumbnail_url().'" class="bgCover" alt=""></a>';
                $out .= '<div class="content">';
                $out .= '<h3 class="title"><a href="'.get_permalink().'">'. get_the_title().'</a></h3>';
                $out .= '<div class="description"><div class="in">'.get_the_excerpt() .'</div></div>';
                $out .= '<div class="sectionAndSocial clearfix">';
                $out .= '<div class="section">';
                $post_categories = get_the_category();
                if ($post_categories) {
                    foreach($post_categories as $cat) {
                        $out .= $cat->name . ' '; 
                    }
                }
                $out .= '</div>';
                $out .= '<div class="mainSocial pullLeft">';
                $out .= '<a href="#"><i class="icon-telegram"></i></a>';
                $out .= '<a href="https://twitter.com/share?ref_src=twsrc%5Etfw"><i class="icon-twitter"></i></a>';
                $out .= '<a href="https://www.facebook.com/sharer/sharer.php?u='.get_the_permalink().'&t='.get_the_title() .'"><i class="icon-facebook"></i></a>';
                $out .= '</div>';
                $out .= '</div>';
                $out .= '</div>';
                $out .= '</div>';
                $out .= '</div>';
    
            endwhile;
        $out .= '</div>';
        $out .= '</div>';
        $out .= '<hr/>';

        endif;
    
        
        die($out); // here we exit the script and even no wp_reset_query() required!
    }
     
     




    function search_scripts() {
 
        // register our main script but do not enqueue it yet
        wp_register_script( 'search', get_template_directory_uri() . '/assets/js/search.js', array('jquery') );
     
        // now the most interesting part
        // we have to pass parameters to loadmore.js script but we can get the parameters values only in PHP
        // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
        wp_localize_script( 'search', 'search_params', array(
            'ajaxurl'   => site_url() . '/wp-admin/admin-ajax.php' // WordPress AJAX
            
        ) );
     
         wp_enqueue_script( 'search' );
    }
     





    function search_handler(){
 
        // prepare our arguments for the query
        $args = array(
            'post_status'       => 'publish',
            'posts_per_page'	=> 5,
            'de_title'        => $_POST['title'],
            'post_type'         => 'post'

        );
        // it is always better to use WP_Query but not here
        query_posts( $args );
        
        if( have_posts() ) :
            $out  = '';
            while( have_posts() ): the_post();
            $out.= '<a href="'.get_the_permalink().'" class="oneResult">';
            $out.= '<span class="avatar"><img src="'.get_the_post_thumbnail_url().'" alt=""></span>';
            $out.= '<span class="title">'.get_the_title().'</span>';
            $out.= '</a>';
            endwhile;

        endif;
    
        
        die($out); // here we exit the script and even no wp_reset_query() required!
    }




    function contact_scripts() {
 
        // register our main script but do not enqueue it yet
        wp_register_script( 'contact', get_template_directory_uri() . '/assets/js/contactus.js', array('jquery') );
     
        // now the most interesting part
        // we have to pass parameters to loadmore.js script but we can get the parameters values only in PHP
        // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
        wp_localize_script( 'contact', 'contact_params', array(
            'ajaxurl'   => site_url() . '/wp-admin/admin-ajax.php' // WordPress AJAX
            
        ) );
     
         wp_enqueue_script( 'contact' );
    }
     





    function contact_handler(){
 
        // prepare our arguments for the query
        $args = array(
            'post_content'       => $_POST['message'],
            'post_title'         => $_POST['name'],
            'post_type'          => 'contacts'
        );
        // it is always better to use WP_Query but not here
        $id = wp_insert_post( $args );
        update_field('name', $_POST['name'], $id);
        update_field('address', $_POST['address'], $id);
        update_field('mobile', $_POST['phone'], $id);
        update_field('email', $_POST['email'], $id);
 

        die('Submitted Successfully'); // here we exit the script and even no wp_reset_query() required!
    }




    function de_posts_where( $where, &$wp_query )
    {
        global $wpdb;
        if ( $de_title = $wp_query->get( 'de_title' ) ) {
            $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'' . esc_sql( $wpdb->esc_like( $de_title ) ) . '%\'';
        }
        return $where;
    }

    function modify_search_pages( $query ) {
        if ( $query->is_search() ) {
            $query->query_vars['nopaging'] = 1;
            $query->query_vars['posts_per_page'] = -1;
            $post_types = get_post_types(array('public' => true, 'exclude_from_search' => false), 'objects');
            $searchable_types = array();
            // Add available post types
            if( $post_types ) {
                foreach( $post_types as $type) {
                    $searchable_types[] = $type->name;
                }
            }
            $query->set( 'post_type', $searchable_types );
        }
    }
    


    // Actions & Filters
    add_action('wp_enqueue_scripts', 'de_enqueue');
    add_action( 'wp_enqueue_scripts', 'load_more_scripts' );
    add_action( 'wp_enqueue_scripts', 'search_scripts' );
    add_action( 'wp_enqueue_scripts', 'contact_scripts' );
    add_action('after_setup_theme', 'de_theme_setup');
    add_action('after_switch_theme', 'de_activate');
    add_action('admin_menu', 'de_options_menu');
    add_action('admin_init', 'de_admin_init');
    add_action( 'init', 'create_post_types' );
    add_action( 'pre_get_posts', 'modify_search_pages' );
    add_action('wp_ajax_loadmore', 'loadmore_ajax_handler'); // wp_ajax_{action}
    add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler');

    add_action('wp_ajax_search', 'search_handler'); // wp_ajax_{action}
    add_action('wp_ajax_nopriv_search', 'search_handler'); // wp_ajax_nopriv_{action}

    add_action('wp_ajax_contact', 'contact_handler'); // wp_ajax_{action}
    add_action('wp_ajax_nopriv_contact', 'contact_handler'); // wp_ajax_nopriv_{action}

    add_filter( 'get_the_date', 'wp_relative_date' ); // for posts
    add_filter( 'get_comment_date', 'wp_relative_date' ); // for comments
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
    add_filter( 'posts_where', 'de_posts_where', 10, 2 );




    // Supports
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );

    
?>