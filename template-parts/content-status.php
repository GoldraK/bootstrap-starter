 <article id="post-<?php the_ID(); ?>" <?php post_class( 'card-deck'); ?>>

  <div class="card">

    <div class="card-body">

      <div class="row">

        <div class="col-md-2">
        
          <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
        
        </div>
        
        <div class="col-md-10">
        
          <div class="card-text">
        
            <span class="author"><?php echo get_the_author(); ?>:</span>
        
            <?php the_content(); ?>

          </div>
        
        </div>
      
      </div>

    </div>

    <div class="card-footer">

     <?php bootstrap_starter_post_meta(); ?>

   </div>

 </div>

</article>