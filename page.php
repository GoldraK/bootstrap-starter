<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="blog-post">
          <h2 class="blog-post-title"><?php the_title(); ?></h2>
          <p class="blog-post-meta"><?php echo get_the_date( 'Y-m-d' ); ?> by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></p>
          <?php if (has_category()) : ?>
            <p>Categorías: <?php echo get_the_category_list(', ') ?></p>
          <?php endif; ?>
          <?php echo get_the_tag_list('<p>Tags: ',', ','</p>'); ?>
          <p><?php the_content(); ?></p>
        </article>
      <?php endwhile; else : ?>
      <article>
        <p>Sorry, no page was found!</p>
      </article>
    <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
