<?php get_header(); ?>

<div class="container">
  
  <div class="row">
    
    <div class="col-md-12">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <article class="blog-post">
          
          <h2 class="blog-post-title"><?php the_title(); ?></h2>
          
          <p class="blog-post-meta"><?php echo get_the_date( 'Y-m-d' ); ?> <?php _e('by' , 'bootstrap-starter')?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></p>
          
          <p><?php the_content(); ?></p>
        
        </article>
      
      <?php endwhile; else : ?>
      
      <article>
        
        <p><?php _e('Sorry, no page was found!', 'bootstrap-starter') ?> </p>
      
      </article>
    
    <?php endif; ?>
    
    </div>
  
  </div>

</div>

<?php get_footer(); ?>
