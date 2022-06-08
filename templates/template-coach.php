<?php 

get_header();
?>
<?php
   $coach_id = get_the_ID(); 
   $coach_img = get_the_post_thumbnail_url($coach_id, 'coach_img');

?>

<div class="card">
              <a href="<?php the_permalink(); ?>">
              <div class="card-content">
                <div class="card__img">
                  <img src="<?php echo $coach_img?>">
                </div>
                <div class="card__text">
                  <div class="card-name__text">
                  <h3><?php the_title();?></h3>
                </div>
                <div class="card-description__text">
                  <p><?php the_excerpt();?></p>
                  <div class="card-description__arrow">
                  <a href="<?php the_permalink(); ?>">Подробнее
                    <img src="<?php echo get_template_directory_uri ()?>/assets/image/icons/arrow.svg" alt="" />
                  </a>
                </div>
                </div>
                </div>
              </div>
              </a>
            </div>
<?php

get_footer();
