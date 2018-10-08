<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-deck'); ?>>
  
  <div class="card">
  
    <div class="card-body">
      
      <h2 class="card-title"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        
      <div class="card-text"><?php the_content(); ?></div>
        
    </div>

    <div class="card-footer">
        
      <?php bootstrap_starter_post_meta(); ?>

    </div>

  </div>

</article>