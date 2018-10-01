<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}


if ($wp_query->max_num_pages <= 1) return;

$args = array(
 'mid_size' 		  => 1,
 'prev_text'          => __('&laquo;', 'bootstrap-starter'),
 'next_text'          => __('&raquo;', 'bootstrap-starter'),
 'type'               => 'array',
);

$links = paginate_links($args);

?>

<nav aria-label="<?php echo $args['screen_reader_text']; ?>">

    <ul class="pagination justify-content-center">

        <?php

        foreach ( $links as $key => $link ) : ?>

            <li class="page-item <?php echo strpos( $link, 'current' ) ? 'active' : '' ?>">

                <?php echo str_replace( 'page-numbers', 'page-link', $link ); ?>

            </li>

        <?php endforeach; ?>

    </ul>

</nav>
