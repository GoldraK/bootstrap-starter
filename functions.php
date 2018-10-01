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

        register_nav_menu('primary', 'Principal' );
    }
}

add_action( 'after_setup_theme', 'bootstrap_starter_setup' );

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

function bootstrap_starter_category()
{
  if (has_category()) : ?>
    <p><?php 
    echo _n(
      'Category',
      'Categories',
      count(get_the_category()),
      'bootstrap-starter'
      );?> <?php echo get_the_category_list(', ') ?></p>
  <?php endif;

}

function bootstrap_starter_tags()
{
  echo get_the_tag_list('<p>'._n(
    'Tag',
    'Tags',
    !get_the_tags() ? 0 : count(get_the_tags()),
    'bootstrap-starter').": ",', ','</p>');
}


?>