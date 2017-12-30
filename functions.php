<?php 
if(!function_exists('lemiho_food_setup')) :
        function lemiho_food_setup(){
            load_theme_textdomain('lemiho_food',get_template_directory() . '/languages');
            $content = 680;
            add_theme_support('custom-logo');
            add_theme_support('post-formats',array('video','image','gallery'));
            add_editor_style();
            add_theme_support( 'post-thumbnails' );
            register_nav_menus( array(
                'primary' => __( 'Primary Navigation', 'lemiho_food' ),
                'Secondary' => __( 'Footer Navigation', 'lemiho_food' ),
            ) );
            add_theme_support( 'automatic-feed-links' );
            add_theme_support( 'customize-selective-refresh-widgets' );
            add_theme_support( 'title-tag' );    
        }
        add_action('after_setup_theme','lemiho_food_setup');
        function lemiho_food_style(){
            wp_enqueue_style('bootstrap.min.css',get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
            wp_enqueue_script('bootstrap.min.js',get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js');
        }
        add_action('wp_enqueue_scripts','lemiho_food_style');
endif;
require get_template_directory() . '/home.php';
