<?php

/**
  * Template Name: single-custom_1
  * Template Post Type: post, page
 */

get_header();
?>
<?php
$coach_id = get_the_ID();
  $coach_name = carbon_get_post_meta($coach_id, 'coach_name');
  $coach_subname = carbon_get_post_meta($coach_id, 'coach_subname');
  $coach_img = get_the_post_thumbnail_url($coach_id, 'coach_img');
?>


<section class="breadcrumb">
        <div class="container">
        <div class="breadcrumb">
        <ul>
          <li><a href="<?php echo home_url('/')?>">Главная</a></li>
          <li>
          <div class="breadcrumb-arrow">
            <img src="<?php echo get_template_directory_uri ()?>/assets/image/icons/bredcrumb-arrow.svg" alt="">
          </div>
          </li>
          <li><a href="<?php echo get_permalink(109); ?>">Тренеры</a></li>
          <li>
            <div class="breadcrumb-arrow">
              <img src="<?php echo get_template_directory_uri ()?>/assets/image/icons/bredcrumb-arrow.svg" alt="">
            </div>
            </li>
          <li><?php the_title();?></li>
      </ul>
    </div>
</section>



    <header class="coaches__header">
      <div class="container">

		  <?php if ( have_posts() ) : ?>
          <div class="heading">
            <div class="decorate__ellipse"></div>
            <div class="title">
              <h2><?php echo $coach_name?></h2>
            </div>
            <div class="description">
              <p><?php echo $coach_subname?></p>
            </div>
            
            <div class="coach-header__rows">
              <div class="coach__rows">
                <div class="swiper-button-coach__container">
                  <div class="swiper-button-next-coach">
                    <div class="left-arrow"></div>
                  </div>
                  <div class="swiper-button-prev-coach">
                    <div class="right-arrow"></div>
                   </div>
                </div> 
				
                <div class="swiper swiperSolo">
                    <div class="swiper-wrapper content">
                    <div class="swiper-slide">
                      <div class="card-content">
                        <div class="card-coach__img">
                          <img src="<?php echo $coach_img?>" alt="" />
                        </div>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          
                      

              <div class=" ">
                <div class="coach-content__description">
				<?php
				if ( have_posts() ) { 
  				  while ( have_posts() ) : the_post();
     				   the_content();
   					 endwhile;
					}
				?>
                </div>
            </div>
          </div>
		  <?php endif; ?>
      </div>
    </header>



<?php

get_footer();
