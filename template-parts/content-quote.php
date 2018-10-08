 <article id="post-<?php the_ID(); ?>" <?php post_class( 'card-deck'); ?>>

  <div class="card">

    <div class="card-body">
   
      <p class="card-text">

        <div class="row">

          <div class="col-md-12">
   
            <p class="mb-0"><?php the_content(); ?></p>
   
          </div>

        </div>

      </p>
   
    </div>
   
    <div class="card-footer">
   
     <?php bootstrap_starter_post_meta(); ?>
   
   </div>
 
 </div>

</article>