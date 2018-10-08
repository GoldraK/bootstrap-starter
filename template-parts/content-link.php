 <article id="post-<?php the_ID(); ?>" <?php post_class( 'card-deck'); ?>>
  
  <div class="card">
  
    <div class="card-body">
  
    <?php
  
      if ( is_single() ) :
  
        the_title( sprintf( '<h1 class="card-title"><a href="%s">', esc_url(  bootstrap_starter_get_link_url() ) ), ' <i class="fas fa-external-link-alt fa-xs"></i></a></h1>' );
  
      else :
  
        the_title( sprintf( '<h2 class="card-title"><a href="%s">', esc_url(  bootstrap_starter_get_link_url() ) ), ' <i class="fas fa-external-link-alt fa-xs"></i></a></h2>' );
  
      endif;
  
    ?>
  
      <p class="card-text"><?php the_content(); ?></p>

    </div>
    
    <div class="card-footer">
    
       <?php bootstrap_starter_post_meta(); ?>
    
    </div>
  
  </div>

</article>