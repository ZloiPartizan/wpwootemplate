<?php 
/* Template name: Coaches */

$page_id = get_the_ID();
get_header();
?>
<?php
$coaches_title = carbon_get_post_meta($page_id, 'coaches_title');
$coaches_title_subname = carbon_get_post_meta($page_id, 'coaches_title_subname');
$coaches_desc = carbon_get_post_meta($page_id, 'coaches_desc');
$coaches_desc2 = carbon_get_post_meta($page_id, 'coaches_desc2');
$coaches_icon_id = carbon_get_post_meta($pool_id, 'coaches_icon_image');
$coaches_icon = wp_get_attachment_image_url($coaches_icon_id, 'full');
$coaches_cardtitle = carbon_get_post_meta($page_id, 'coaches_cardtitle');
$coaches_circle = carbon_get_post_meta($page_id, 'coaches_circle');
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
        <li>Тренеры</li>
    </ul>
  </div>
</section>

    <header class="coaches__header">
      <div class="container">
        <div class="heading">
          <div class="decorate__ellipse"></div>
          <div class="title">
            <h2><?php echo $coaches_title?></h2>
          </div>
          <div class="description">
            <p><?php echo $coaches_title_subname?></p>
          </div>
          <div class="coaches-header__rows">
            <div class="coaches-content__column">
              <div class="coaches-rows__description">
                <p>
                <?php echo $coaches_desc?>
                </p>
              </div>

              <div class="coaches-rows__description">
              <?php echo $coaches_desc2?>
              </div>
            
            </div>

            <div class="coaches-card__column">
              <div class="about-card__element">
                <img src="<?php echo get_template_directory_uri ()?>/assets/image/icons/ellipse.png" />
              </div>
              <div class="about-card__icon">
                <img src="<?php echo $coaches_icon?>" alt="" />
              </div>
              <h3><?php echo $coaches_cardtitle?></h3> 
              <div class="circle-coaches__element">
                <div class="circle">
                  <div class="circle__text">
                    <p><?php echo $coaches_circle?></p>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </header>

    <?php
            $catalog_coaches = carbon_get_post_meta( $page_id, 'catalog_coaches');
            $catalog_coaches_ids = wp_list_pluck($catalog_coaches, 'id');

            $catalog_coaches_args = [
              'post_type' => 'coach',
              'post__in' => $catalog_coaches_ids
            ];
            $catalog_coaches_query = new WP_Query( $catalog_coaches_args );
      
            $catalog_coaches_count = wp_count_posts('coach');
            $catalog_coaches_count_publish = $catalog_coaches_count->pulish;
             ?>
 
 <section class="coaches">
 <div class="container">
    <?php if ( $catalog_coaches_query->have_posts() ) : ?>
      
      <div class="coaches__rows">

      <?php while ( $catalog_coaches_query->have_posts() ) : $catalog_coaches_query->the_post(); ?>
        <?php echo get_template_part('coach-content');?>
      <?php endwhile; ?>

      <?php wp_reset_postdata( )?>
    </div>
    <?php endif; ?>
    </div>
  </section>


    

<?php

get_footer();



