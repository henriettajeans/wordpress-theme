<?php


// Custom image sizing, måste förankras 
add_image_size('blog-large', 800, 400, true);
add_image_size('contact-large', 400, 600, true);



function theme_setup()
{

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');


    register_nav_menus(array("primary_menu" => "Navbar", "sub_menu" => "Undermeny", "orientation" => "Orientering", "footer_menu" => "Footer"));

    /**
     * Add post-formats support.
     */
    add_theme_support(
        'post-formats',
        array(
            'link',
            'aside',
            'gallery',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
        )
    );

    /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
    // add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));

    /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets',
        )
    );



    // Custom background color
    $bg_defaults = array(
        'default-image'          => '',
        'default-preset'         => 'default',
        'default-size'           => 'cover',
        'default-repeat'         => 'no-repeat',
        'default-attachment'     => 'scroll',
    );
    add_theme_support(
        'custom-background',
        array(
            'default-color' => 'd1e4dd',  $bg_defaults
        )
    );

    // Editor color palette.
    $black     = '#000000';
    $dark_gray = '#28303D';
    $gray      = '#39414D';
    $green     = '#D1E4DD';
    $blue      = '#D1DFE4';
    $purple    = '#D1D1E4';
    $red       = '#E4D1D1';
    $orange    = '#E4DAD1';
    $yellow    = '#EEEADD';
    $white     = '#FFFFFF';

    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name'  => esc_html__('Black', 'twentytwentyone'),
                'slug'  => 'black',
                'color' => $black,
            ),
            array(
                'name'  => esc_html__('Dark gray', 'twentytwentyone'),
                'slug'  => 'dark-gray',
                'color' => $dark_gray,
            ),
            array(
                'name'  => esc_html__('Gray', 'twentytwentyone'),
                'slug'  => 'gray',
                'color' => $gray,
            ),
            array(
                'name'  => esc_html__('Green', 'twentytwentyone'),
                'slug'  => 'green',
                'color' => $green,
            ),
            array(
                'name'  => esc_html__('Blue', 'twentytwentyone'),
                'slug'  => 'blue',
                'color' => $blue,
            ),
            array(
                'name'  => esc_html__('Purple', 'twentytwentyone'),
                'slug'  => 'purple',
                'color' => $purple,
            ),
            array(
                'name'  => esc_html__('Red', 'twentytwentyone'),
                'slug'  => 'red',
                'color' => $red,
            ),
            array(
                'name'  => esc_html__('Orange', 'twentytwentyone'),
                'slug'  => 'orange',
                'color' => $orange,
            ),
            array(
                'name'  => esc_html__('Yellow', 'twentytwentyone'),
                'slug'  => 'yellow',
                'color' => $yellow,
            ),
            array(
                'name'  => esc_html__('White', 'twentytwentyone'),
                'slug'  => 'white',
                'color' => $white,
            ),
        )
    );
    //    Register many widgets
    function theme_register_widget_areas()
    {
        $widget_areas = array(
            array(
                'name' => 'Sidebar Widget Area',
                'id' => 'sidebar-widget-area',
                'description' => 'This is the primary sidebar widget area.',
                'before_widget' => '<div class="sub-sidebar">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ),
            array(
                'name' => 'Footer Widget Area',
                'id' => 'footer-widget-area',
                'description' => 'This is the footer widget area.',
                'before_widget' => '<div class="sidebar">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ),
            array(
                'name' => 'Orientering',
                'id' => 'orientation',
                'description' => 'Dethär är sidomenyn för kategori, författare och arkvinsidan.',
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ),
            array(
                'name'          => __('Sidomeny', 'text-domain'),
                'id'            => 'custom-sidebar',
                'description'   => __('Detta widget-område visas på de fyra anpassade sidorna.', 'text-domain'),
                'before_widget' => '<div id="sub-menu">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ),
            // Lägg till fler widget-områden här om du behöver.
        );

        foreach ($widget_areas as $widget_area) {
            register_sidebar($widget_area);
        }
    }

    add_action('widgets_init', 'theme_register_widget_areas');

    add_theme_support(
        'editor-gradient-presets',
        array(
            array(
                'name'     => esc_html__('Purple to yellow', 'twentytwentyone'),
                'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
                'slug'     => 'purple-to-yellow',
            ),
            array(
                'name'     => esc_html__('Yellow to purple', 'twentytwentyone'),
                'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
                'slug'     => 'yellow-to-purple',
            ),
            array(
                'name'     => esc_html__('Green to yellow', 'twentytwentyone'),
                'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
                'slug'     => 'green-to-yellow',
            ),
            array(
                'name'     => esc_html__('Yellow to green', 'twentytwentyone'),
                'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
                'slug'     => 'yellow-to-green',
            ),
            array(
                'name'     => esc_html__('Red to yellow', 'twentytwentyone'),
                'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
                'slug'     => 'red-to-yellow',
            ),
            array(
                'name'     => esc_html__('Yellow to red', 'twentytwentyone'),
                'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
                'slug'     => 'yellow-to-red',
            ),
            array(
                'name'     => esc_html__('Purple to red', 'twentytwentyone'),
                'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
                'slug'     => 'purple-to-red',
            ),
            array(
                'name'     => esc_html__('Red to purple', 'twentytwentyone'),
                'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
                'slug'     => 'red-to-purple',
            ),
        )
    );

    // Add support for responsive embedded content.
    add_theme_support('responsive-embeds');

    // Add support for custom line height controls.
    add_theme_support('custom-line-height');

    // Add support for link color control.
    add_theme_support('link-color');

    // Add support for experimental cover block spacing.
    add_theme_support('custom-spacing');

    // Add support for custom units.
    // This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
    add_theme_support('custom-units');

    // Remove feed icon link from legacy RSS widget.
    add_filter('rss_widget_feed_link', '__return_empty_string');
}

add_action('after_setup_theme', 'theme_setup');


function load_css()
{
    wp_register_style(
        'bootstrap',
        get_template_directory_uri() . '/css/bootstrap.min.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('bootstrap');

    wp_register_style(
        'css-styling',
        get_template_directory_uri() . '/style.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('css-styling');
    wp_register_style(
        'sass',
        get_template_directory_uri() . '/sass-to-css/main.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('sass');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script(
        'bootstrap',
        get_template_directory_uri() . '/js/bootstrap.min.js',
        'jquery',
        false,
        true
    );
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');


// // Sidebar functionality
// function theme_register_widget_areas()
// {
//     register_sidebar(array(
//         'name' => 'Sidebar Widget Area',
//         'id' => 'sidebar-widget-area',
//         'description' => 'This is the sidebar widget area.',
//         'before_widget' => '<div class="widget">',
//         'after_widget' => '</div>',
//         'before_title' => '<h2 class="widget-title">',
//         'after_title' => '</h2>',
//     ));
// }
// add_action('widgets_init', 'theme_register_widget_areas');
