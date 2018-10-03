<?php get_header(); ?>

<div class="container">
  
  <div class="row">
    
    <div class="col-md-10">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <article class="blog-post">

          <?php
          if ( has_post_thumbnail() ) : 
            the_post_thumbnail( 'full', [ 'class' => 'img-fluid', 'alt' => esc_html ( bootstrap_starter_title_thumbnail() ) ] ); 
          endif;
          ?>

          <h2 class="blog-post-title"><?php the_title(); ?></h2>
          
          <p class="blog-post-meta"><?php echo get_the_date( 'Y-m-d' ); ?> <?php _e('by' , 'bootstrap-starter')?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></p>
          
          <?php bootstrap_starter_category(); 
                bootstrap_starter_tags(); ?>
          
          <p><?php  echo get_the_content(); ?></p>
        
        </article>
      
      <?php endwhile; else : ?>
      
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
