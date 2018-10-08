<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-deck'); ?>>

  <div class="card">

    <div class="card-body">

      <div class="card-text">

        <div class="alert alert-secondary">

          <p><?php the_content(); ?></p>

        </div>

      </div>

    </div>

    <div class="card-footer">

       <?php bootstrap_starter_post_meta(); ?>

    </div>

  </div>

</article>