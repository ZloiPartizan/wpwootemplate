<?php
   $pool_id = get_the_ID(); 
   $pool_img = get_the_post_thumbnail_url($pool_id, 'pool_img');
   $pool_metro_link = carbon_get_post_meta($pool_id, 'pool_metro_link');  
  ?> 
<div class="aboutus-place-pools__list-content">
              <a href="<?php the_permalink(); ?>">
              <div class="aboutus-pool__img">
                <img src="<?php echo $pool_img?>" alt="">
              </div>

              <div class="aboutus-pool__title">
                <h4><?php the_title();?>
                  </h4>
                  
                  <a href="<?php the_permalink(); ?>"><?php echo $pool_metro_link?>  </a>
              </div>
            </a>
            </div>
  

