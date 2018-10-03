<?php get_header(); ?>

<div class="container">

  <div class="row">

    <div class="col-md-10">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="blog-post">
          <div class="row">
            <?php 
              if ( has_post_thumbnail() ) : ?>
              <div class="col-md-3">
              <?php 
                the_post_thumbnail('medium_large',['class' => 'img-fluid', 'alt' => esc_html ( bootstrap_starter_title_thumbnail() ) ]); ?>
            </div>
          <?php endif; ?>
            <div  <?php if ( has_post_thumbnail() ) : ?>class="col-md-9" <?php endif; ?>>
              <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
              
              <p class="blog-post-meta"><?php echo get_the_date( 'Y-m-d' ); ?> <?php _e('by' , 'bootstrap-starter')?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></p>
              
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
        
        </article>  

        <?php endwhile; 
        get_template_part('parts/pagination');
        else : ?>

          <article>

            <p><?php _e('Sorry, no page was found!', 'bootstrap-starter') ?> </p>

          </article>

        <?php endif; ?>
        
      </div>

      <div class="col-md-2">

        <?php get_sidebar() ?>

      </div>

    </div>

  </div>

  <?php get_footer(); ?>
