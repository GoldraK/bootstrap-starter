<article  id="post-<?php the_ID(); ?>" <?php post_class("gallery-block grid-gallery card-deck"); ?>>

  <div class="card">

    <div class="card-body">
      
      <h2 class="card-title">
      
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      
      </h2>
      
      <div class="row">
      
        <?php 
      
        if ( get_post_gallery() ) :
      
             $gallery        = get_post_gallery( get_the_ID(), false );
      
             $galleryIDS     = $gallery['ids'];
      
             $pieces         = explode(",", $galleryIDS);

          foreach ($pieces as $key => $value) : 
      
              $image_medium   = wp_get_attachment_image_src( $value, 'medium'); 
      
              $image_medium_large   = wp_get_attachment_image_src( $value, 'medium_large'); 
      
              $image_large   = wp_get_attachment_image_src( $value, 'large'); 
      
              $image_full     = wp_get_attachment_image_src( $value, 'full'); 
      
            ?>   
      
            <div class="col-sm-6 col-md-6 col-lg-3 item">
      
              <a class="lightbox" href="<?php echo  $image_full[0]; ?>"
                data-at-450="<?php echo $image_medium[0]; ?>"
                data-at-650="<?php echo $image_medium_large[0]; ?>"
                data-at-1300="<?php echo $image_large[0]; ?>"
              >
      
              <picture>
      
                 <source 
                  media="(min-width: 1300px)"
                  srcset="<?php echo $image_large[0]; ?>">
      
                <source 
                  media="(min-width: 650px)"
                  srcset="<?php echo $image_medium_large[0]; ?>">
                
                <source 
                  media="(min-width: 450px)"
                  srcset="<?php echo $image_medium[0]; ?>">
               
               <img class="img-fluid image scale-on-hover"
                  src="<?php echo $image_full[0]; ?>" 
                  > 
              
              </picture>

              </a>
            
            </div>
        
        <?php endforeach; 
        
        wp_enqueue_style('baguettebox');
        
        wp_enqueue_script('baguettebox');
        
        wp_enqueue_script('baguettebox-js-start');
      
      endif;  ?>
      
      </div>

      </div>
      
      <div class="card-footer">
       
       <?php bootstrap_starter_post_meta(); ?>
      
      </div>
    
    </div>

 </article>