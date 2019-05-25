<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/* ------------------------------------*\
  External Modules/Files
  \*------------------------------------ */

// Load any external files you have here

/* ------------------------------------*\
  Theme Support
  \*------------------------------------ */

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

if (!isset($content_width)) {
    $content_width = 900;
}

if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('project', 500, 500, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /* add_theme_support('custom-background', array(
      'default-color' => 'FFF',
      'default-image' => get_template_directory_uri() . '/img/bg.jpg'
      )); */

    // Add Support for Custom Header - Uncomment below if you're going to use
    /* add_theme_support('custom-header', array(
      'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
      'header-text'			=> false,
      'default-text-color'		=> '000',
      'width'				=> 1000,
      'height'			=> 198,
      'random-default'		=> false,
      'wp-head-callback'		=> $wphead_cb,
      'admin-head-callback'		=> $adminhead_cb,
      'admin-preview-callback'	=> $adminpreview_cb
      )); */

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/* ------------------------------------*\
  Functions
  \*------------------------------------ */

// HTML5 Blank navigation
function html5blank_nav() {
    wp_nav_menu(
            array(
                'theme_location' => 'header-menu',
                'menu' => '',
                'container' => 'div',
                'container_class' => 'menu-{menu slug}-container',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'depth' => 0,
                'walker' => ''
            )
    );
}

// Register HTML5 Blank Navigation
function register_html5_menu() {
    register_nav_menus(array(// Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'language-menu' => __('Language Menu', 'html5blank'), // Main Navigation
        'footer-menu' => __('Footer Menu', 'html5blank'), // Main Navigation
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '') {
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var) {
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist) {
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes) {
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar')) {
    
     // Define Sidebar
     register_sidebar(array(
         'name' => __('Footer info', 'html5blank'),
         'description' => __('...', 'html5blank'),
         'id' => 'footer-about-sidebar',
         'before_widget' => '',
         'after_widget' => '',
         'before_title' => '<h4 class="column-title">',
         'after_title' => '</h4>'
     ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination() {
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) { // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length) {
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '') {
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more) {
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar() {
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag) {
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions($html) {
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar($avatar_defaults) {
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments() {
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND ( get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ('div' == $args['style']) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty($args['has_children']) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <?php if ('div' != $args['style']) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
        <?php endif; ?>
        <div class="comment-author vcard">
            <?php if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['180']); ?>
            <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
        </div>
        <?php if ($comment->comment_approved == '0') : ?>
            <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
            <br />
        <?php endif; ?>

        <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>">
                <?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'), '  ', '');
                ?>
        </div>

        <?php comment_text() ?>

        <div class="reply">
            <?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
        <?php if ('div' != $args['style']) : ?>
        </div>
    <?php endif; ?>
    <?php
}

/* ------------------------------------*\
  Actions + Filters + ShortCodes
  \*------------------------------------ */

// Add Actions
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination
// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

add_filter('wp_list_pages', create_function('$t', 'return str_replace("<a ", "<a class=\"list-group-item\" ", $t);'));
add_filter('wp_list_pages', create_function('$t', 'return str_replace("</li>", " ", $t);'));

add_filter('jpeg_quality', function($arg){return 100;});

function remove_page_class($wp_list_pages) {
    $pattern = '/\<li class="page_item[^>]*>/';
    $replace_with = '';
    return preg_replace($pattern, $replace_with, $wp_list_pages);
}

add_filter('wp_list_pages', 'remove_page_class');

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether
// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.
// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/* ------------------------------------*\
  ShortCode Functions
  \*------------------------------------ */

function url_shortcode() {
    return get_bloginfo('url');
}

function url_template_shortcode() {
    return get_template_directory_uri();
}

add_shortcode('url', 'url_shortcode');
add_shortcode('url-template', 'url_template_shortcode');
add_action('template_redirect', 'bwp_template_redirect');

function bwp_template_redirect() {
    if (is_author()) {
        wp_redirect(home_url());
        exit;
    }
}

//bootstrap gallery
function bootstrap_gallery($output = '', $atts, $instance) {
    if (strlen($atts['columns']) < 1) {
        $columns = 3;
    } else {
        $columns = $atts['columns'];
    }

    $images = explode(',', $atts['ids']);
    if ($columns < 1 || $columns > 12) {
        $columns == 3;
    }

    $col_class = 'col-md-' . 12 / $columns;

    $return = '<div class="row gallery">';
    $i = 0;
    foreach ($images as $key => $value) {
        if ($i % $columns == 0 && $i > 0) {
            $return .= '</div><div class="row gallery">';
        }
        $image_attributes = wp_get_attachment_image_src($value, 'thumbnail');
        $image_full = wp_get_attachment_image_src($value, 'full');
        $return .= '
            <div class="' . $col_class . '">
                <div class="gallery-image-wrap">
                    <a href="' . $image_full[0] . '" data-lightbox="gallery">
                        <img src="' . $image_attributes[0] . '" alt="" class="img-fluid d-block mx-auto">
                    </a>
                </div>
            </div>';
        $i++;
    }
    $return .= '</div>';
    return $return;
}

add_filter('post_gallery', 'bootstrap_gallery', 10, 4);

// klasa responsywnosci zalacznikow w edytorze
function image_tag_class($class) {
    $class .= ' img-fluid';
    return $class;
}
add_filter('get_image_tag_class', 'image_tag_class' );

// dlugosc wpisu w liscie wpisow danej kategorii 
function wpdocs_custom_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Custom post type team
function referencje_init() {
    $args = array(
        'label' => 'Referencje',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'referencje'),
        'query_var' => true,
        'menu_icon' => 'dashicons-format-status',
        'supports' => array(
            'title',
            'editor',
            'page-attributes',)
    );
    register_post_type('referencje', $args);
}

add_action('init', 'referencje_init');
?>