<?php

function my_files() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.4', 'all' );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main-js.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_files');

function blog_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
}
add_action('after_setup_theme', 'blog_features');

function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 4;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '4');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

function get_breadcrumb() {
    if (is_single()) { ?>
        <?php echo '<li class="breadcrumbs__home list-breadcrumbs"><a class="breadcrumbs__home--link" href="'.home_url().'" rel="nofollow">Strona główna</a></li>' . '<strong class="classifier-breadrumbs"> / </strong>' . '<li class="breadcrumbs__all-category list-breadcrumbs"><a class="breadcrumbs__all-category--link" href="'.get_category_link('115').'" rel="nofollow">Wszystkie wpisy</a></li>'; ?>
        <li class="breadcrumbs__current-post list-breadcrumbs"><strong class="classifier-breadrumbs"> / </strong><?php the_title() ?> </li>
    <?php
    } elseif ( is_page() ) { ?>
        <?php echo '<li class="breadcrumbs__home list-breadcrumbs"><a class="breadcrumbs__home--link" href="'.home_url().'" rel="nofollow">Strona główna</a></li>'; ?>
        <li class="breadcrumbs__current-post list-breadcrumbs"><strong class="classifier-breadrumbs"> / </strong><?php the_title() ?> </li>
   <?php
    } elseif ( is_search() ) {
        echo the_search_query(' / ');
    }
}