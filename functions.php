<?php
/*
Theme Name: Yamada-tax
*/

function my_stylesheet()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('drawer', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css');
    wp_enqueue_style('g-font', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');
    wp_enqueue_style('awsomefont', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
}
add_action('wp_enqueue_scripts', 'my_stylesheet');

function my_scripts()
{
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js');
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
}

// wp_footerに処理を登録
add_action('wp_footer', 'my_scripts');

/**
 * Delete the archive of before
 */
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>' ;
    } elseif (is_month()) {
        $title = single_month_title('', false);
    } elseif (is_post_type_archive('news')) {
        $title = post_type_archive_title('', false);
    }
        
    return $title;
});

