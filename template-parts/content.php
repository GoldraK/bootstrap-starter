 <article id="post-<?php the_ID(); ?>" <?php post_class( 'card-deck'); ?>>
  
  <div class="card">
  
    <?php if ( has_post_thumbnail() ) : 
  
     the_post_thumbnail('medium_large',['class' => 'card-img-top', 'alt' => esc_html ( bootstrap_starter_title_thumbnail() ) ]); 
  
      endif; ?>
  
    <div class="card-body">
  
       <h2 class="card-title"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  
      <p class="card-text"><?php the_excerpt(); ?></p>
  
    </div>
  
    <div class="card-footer">
  
       <?php bootstrap_starter_post_meta(); ?>
    
    </div>
  
  </div>

</article>