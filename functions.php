<?php
require_once get_theme_file_path('inc/example.php');
if ( ! isset( $content_width ) ) $content_width = 900;

function philosophy_all_scripts(){
    load_theme_textdomain('philosophy');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support( 'automatic-feed-links' );
    add_theme_support('custom-logo');
    add_theme_support('widgets');
    add_theme_support('html5',array('search-form','comment-list'));
    add_theme_support('post-formats',array('image','gallery','video','quote','audio','link'));
    add_image_size('philosophy_thumb',400,400,true);

   register_nav_menus(array(
        'top_menu'  => __('Top Menu','philosophy'),
       'footer_left' => __('footer_left','philosophy'),
       'footer_middle' => __('footer_middle','philosophy'),
       'footer_right' => __('footer_right','philosophy')
   ));
}
add_action('after_setup_theme','philosophy_all_scripts');



function philosophy_all_script(){
    wp_enqueue_style('forntawesome',get_theme_file_uri('/assets/css/font-awesome/fonts/fontawesome-webfont.svg'),null,'1.0');
    wp_enqueue_style('fonts',get_theme_file_uri('/assets/css/font-awesome/fonts.css'),null,'1.0');
    wp_enqueue_style('base',get_theme_file_uri('/assets/css/base.css'),null,'1.0');
    wp_enqueue_style('vendor',get_theme_file_uri('/assets/css/vendor.css'),null,'1.0');
    wp_enqueue_style('main-css',get_theme_file_uri('/assets/css/main.css'),null,'1.0');
    wp_enqueue_style('philosophy_css',get_stylesheet_uri());

     wp_enqueue_script('modernizr-js',get_theme_file_uri('/assets/js/modernizr.js'),null,'1.0');
     wp_enqueue_script('pace-js',get_theme_file_uri('/assets/js/pace.min.js'),null,'1.0');
     wp_enqueue_script('plugins-js',get_theme_file_uri('assets/js/plugins.js'),array('jquery'),'1.0',true);
      if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
     wp_enqueue_script('main-js',get_theme_file_uri('assets/js/main.js'),array('jquery'),'1.0',true);
}
add_action('wp_enqueue_scripts','philosophy_all_script');



function philosophy_paginate(){
    global $wp_query;
    $links = paginate_links(array(
        'current'=>max(1,get_query_var('paged')),
        'total'=>$wp_query->max_num_pages,
        'type' => 'list',
        'mid_size' => 3

    ));
    $links = str_replace('page-numbers','pgn__num',$links);
    $links = str_replace("<ul class='pgn__num'>","<ul>",$links);
    $links = str_replace("next pgn__num","pgn__next",$links);
    $links = str_replace("prev pgn__num","pgn__prev",$links);
    echo wp_kses_post($links);
}

remove_action('term_description','wpautop');


function philosophy_slide_1() {
    register_sidebar( array(
        'name'          => __( 'About us page', 'philosophy' ),
        'id'            => 'slide-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'philosophy' ),
        'before_widget' => '<div id="%1$s" class="col-block %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="quarter-top-margin">',
        'after_title'   => '</h3>',
    ) );


    register_sidebar( array(
        'name'          => __( 'contact us page', 'philosophy' ),
        'id'            => 'contact-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'philosophy' ),
        'before_widget' => '<div id="%1$s" class="col-six tab-full %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>Contact Info</h3>',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => __( 'Google map', 'philosophy' ),
        'id'            => 'map-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'philosophy' ),
        'before_widget' => '<div id="%1$s" class=" %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'before footer right side', 'philosophy' ),
        'id'            => 'before_footer',
        'description'   => __( 'Widgets in this area will be shown on before footer right side.', 'philosophy' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );


    register_sidebar( array(
        'name'          => __( 'copy right section', 'philosophy' ),
        'id'            => 'copyright',
        'description'   => __( 'Widgets in this area will be shown on copyright', 'philosophy' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'newsletter section', 'philosophy' ),
        'id'            => 'footer_new',
        'description'   => __( 'Widgets in this area will be shown on NEWSLETTER', 'philosophy' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'philosophy_slide_1' );

function philosophy_search_form($form){
    $kyeword = __('Type Keywords','philosophy');
    $search = __('search for:','philosophy');
    $newform = <<<FORM
            <form role="search" method="get" class="header__search-form" action="#">
            <label>
                <span class="hide-content">{$search}</span>
                <input type="search" class="search-field" placeholder="{$kyeword}" value="" name="s" title="{$search}" autocomplete="off">
            </label>
            <input type="submit" class="search-submit" value="Search">
        </form>
FORM;

    return $newform;
}
add_filter('get_search_form','philosophy_search_form');




