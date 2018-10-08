<?php 


if ( ! function_exists( 'bootstrap_starter_setup' ) ) {
    /**
     *
     * @since bootstrap_starter 0.1
     */
    function bootstrap_starter_setup() {

        load_theme_textdomain( 'bootstrap-starter', get_template_directory() . '/languages' );

        if ( ! file_exists( get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php' ) ) {
          // file does not exist... return an error.
            return new WP_Error( 'class-wp-bootstrap-navwalker-missing',  __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'bootstrap-starter' ) );
        } else {
          // file exists... require it.
          require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
        }

        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );

        add_theme_support('post-formats', array(
        'aside',
        'link',
        'gallery',
        'status',
        'quote',
        'chat',
        'image',
        'video',
        'audio'
      ));

        register_nav_menu('primary', 'Principal' );
    }
}

add_action( 'after_setup_theme', 'bootstrap_starter_setup' );


function new_excerpt_more( $more ) {
    return sprintf( '... <a href="%1$s" class="btn btn-outline-primary btn-sm">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'bootstrap-starter' )
    );
} 
add_filter('excerpt_more', 'new_excerpt_more');


// Register a new sidebar simply named 'sidebar'
function add_widget_Support() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div class="sidebar-modules">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );


add_action( 'wp_enqueue_scripts', 'enqueue_load_styles' );

function enqueue_load_styles() {

    wp_enqueue_style( 'bootstrap4', esc_url( get_template_directory_uri() ).'/css/bootstrap.min.css');

    wp_enqueue_style( 'gfont', 'https://fonts.googleapis.com/css?family=Playfair+Display:700,900');

    wp_enqueue_style( 'style', esc_url( get_template_directory_uri() ).'/style.css');

    wp_enqueue_style( 'flaticon', esc_url( get_template_directory_uri() ) . '/css/flaticon.css');

    wp_register_style( 'baguettebox',esc_url( get_template_directory_uri() ).'/css/baguetteBox.min.css');

}


add_action( 'wp_enqueue_scripts', 'enqueue_load_scripts' );

function enqueue_load_scripts() {

    wp_enqueue_script('jquery3',esc_url( get_template_directory_uri() ).'/js/jquery-3.3.1.slim.min.js',array(),'3.3.1',true);

    wp_enqueue_script('popper',esc_url( get_template_directory_uri() ).'/js/popper.min.js',array('jquery3'),'1.14.3',true);
 
    wp_enqueue_script('bootstrap4',esc_url( get_template_directory_uri() ).'/js/bootstrap.min.js',array('jquery3','popper'),'4.1.3',true);

    wp_register_script('baguettebox',esc_url( get_template_directory_uri() ).'/js/baguetteBox.min.js',array(),'1.11.0',true);

    wp_register_script('baguettebox-js-start',get_template_directory_uri().'/js/baguetteBox_start.js',array('baguettebox'),'0.1',true);
}





function bootstrap_starter_category()
{
  if (has_category()) : ?>
    <?php 
     return _n(
      'Category',
      'Categories',
      count(get_the_category()),
      'bootstrap-starter'
      ). get_the_category_list(', '); 
   endif;

}

function bootstrap_starter_tags()
{
  return get_the_tag_list(_n(
    'Tag',
    'Tags',
    !get_the_tags() ? 0 : count(get_the_tags()),
    'bootstrap-starter').": ",', ','');
}

function bootstrap_starter_title_thumbnail()
{
  return get_the_post_thumbnail_caption() ? get_the_post_thumbnail_caption() : get_the_title();
}


?>