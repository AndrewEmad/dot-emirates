<?php

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

           add_option('de_opts',$opts);
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
        add_action('admin_enqueue_scripts','de_options_enqueue');
        add_action('admin_post_de_save_options','de_save_options');

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

        update_option('de_opts',$opts);
        wp_redirect( admin_url('admin.php?page=de_theme_opts&status=1'));


    }

    // Actions & Filters
    add_action('wp_enqueue_scripts', 'de_enqueue');
    add_action('after_setup_theme','de_theme_setup');
    add_action('after_switch_theme', 'de_activate');
    add_action('admin_menu','de_options_menu');
    add_action('admin_init','de_admin_init');

    // Supports
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );


?>