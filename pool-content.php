<?php
   $pool_id = get_the_ID(); 
   $pool_img = get_the_post_thumbnail_url($pool_id, 'pool_img');
   $pool_metro_link = carbon_get_post_meta($pool_id, 'pool_metro_link');  
  ?>           

<div class="pools-content__card">
<a class="pools-content_noborder" href="<?php the_permalink(); ?>">
  <div class="pools-content__image">
    <img src="<?php echo $pool_img?>" alt="">
    <div class="pools-content__detail"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
  </div>
  </a>

  <div   class="pools-content__name">
    <p><?php the_title();?>
    <br><span><?php echo $pool_metro_link?></span></p>
  </div>

  <a href="#">
  <div class="pools-content__button">
  <a href="#"> Показать на карте</a>
  </div>
  </a>
</div> 

