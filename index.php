<?php get_header(); ?>

<div class="container">

  <div class="row">

    <div class="col-md-10">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
          
          get_template_part( 'template-parts/content', get_post_format() );
        
        endwhile; 
        
        get_template_part('template-parts/pagination');
        
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
