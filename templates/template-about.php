<?php 
/* Template name: About */
get_header();
?>

<section class="breadcrumb">
      <div class="container">

      <!-- <?php
		/**
     * woocommerce_before_main_content hook.
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?> -->

<?php
$page_id = get_the_ID();
?>

      <div class="breadcrumb">
       <ul>
        <li><a href="<?php echo home_url('/')?>">Главная</a></li>
        <li>
        <div class="breadcrumb-arrow">
          <img src="<?php echo get_template_directory_uri ()?>/assets/image/icons/bredcrumb-arrow.svg" alt="">
        </div>
        </li>
        <li>О компании</li>
       </ul>
      </div>
    </section>

    <header class="aboutus__header">
      <div class="container">
        <div class="heading">
          <div class="decorate__ellipse"></div>
          <div class="title">
            <h2><?= CFS()->get('aboutus-header_title')?></h2>
          </div>
          <div class="description">
            <p><?= CFS()->get('aboutus-header_subtitle')?></p>
          </div>
          <div class="aboutus-header__rows">
            <div class="aboutus-content__column">
              <div class="aboutus-rows__description">
                <p>
                <?= CFS()->get('aboutus-header_desc1')?>
                </p>
              </div>

              <div class="aboutus-rows__description">
                <p>
                <?= CFS()->get('aboutus-header_desc2')?>
                </p>
              </div>

              <div class="aboutus-rows__description">
                <p>
                <?= CFS()->get('aboutus-header_desc3')?>
                </p>
              </div>
            </div>

            <div class="aboutus-card__column">              
              <div class="circle-aboutus__element">
                <div class="circle2">
                  <div class="circle__text2">
                    <p><?= CFS()->get('aboutus-header_card')?></p>
                    <div class="circle-decoration__text"></div>
                    
                  </div>
                </div>
              </div>  
              <div class="synchronized-swimming__img">
                <img src="<?= CFS()->get('aboutus-header_img')?>" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="aboutus__rows">
        <?php
              $features = CFS() -> get('features');
              foreach ($features as $row2){
                ?>
              <div class="aboutus__card">
                <div class="aboutus-content__card">
                  <div class="aboutus-card__icon">
                    <img src="<?= $row2['features_img']?>" alt="" />
                  </div>
                  <div class="aboutus-description__card">
                    <p><?= $row2['features_desc']?></p>
                  </div>
                </div>
             </div>
             <?php
              }
              ?>
      </div>
    </div>
    </header>

    <section class="aboutus__gymnastics">
      <div class="aboutus-img__gymnastics">
        <!-- <img src="<?= CFS()->get('aboutus__gymnastics_img')?>"> -->
      </div>
    </section>


    <?php
            $catalog_pools = carbon_get_post_meta( $page_id, 'catalog_pools');
            $catalog_pools_ids = wp_list_pluck($catalog_pools, 'id');

            $catalog_pools_args = [
              'post_type' => 'pool',
              'post__in' => $catalog_pools_ids
            ];
            $catalog_pools_query = new WP_Query( $catalog_pools_args );
      
            $catalog_pools_count = wp_count_posts('pool');
            $catalog_pools_count_publish = $catalog_pools_count->pulish;
             ?>
    <section class="aboutus__place">
      <img src="<?php echo get_template_directory_uri ()?>/assets/image/map/Group 1070.png" alt="" class="aboutus-place-left__element" />
      <div class="container">
        <div class="aboutus-place__column">
          <div class="aboutus-place-benefits__row">
          <?php
              $aboutus_benefits = CFS() -> get('aboutus_benefits');
              foreach ($aboutus_benefits as $row3){
                ?>
            <div class="aboutus-place-content__row">
              <div class="aboutus-place__elipse">
                <span><?= $row3['aboutus_pools_title']?></span>
                <div class="aboutus-place-plus">
                <img src="<?= $row3['aboutus_pools_plus']?>" alt="">
              </div>
              </div>
              <div class="aboutus-place-benefits__title">
                <p><?= $row3['aboutus_pools_subtitle']?></p>
              </div>
              <div class="aboutus-place-benefits__circle">
               <img src="<?= $row3['aboutus_pools_image']?>">
              </div>
            </div>
            <?php
              }
              ?>
          </div>

          <div class="aboutus-place__title">
            <h2><?= CFS()->get('aboutus-pools_title')?></h2>
          </div>
          <div class="aboutus-place__description">
            <p><?= CFS()->get('aboutus-pools_subtitle')?></p>
          </div>

          
          <div class="aboutus-place-pools__list">

            <?php if ( $catalog_pools_query->have_posts() ) : ?>
            <?php while ( $catalog_pools_query->have_posts() ) : $catalog_pools_query->the_post(); ?>
            <?php echo get_template_part('pool-about-content');?>
            <?php endwhile; ?>
            <?php wp_reset_postdata( )?>
            <?php endif; ?>     
            

            <div class="aboutus-place-pools__list-content">
              
              <a href="#">
                <div class="aboutus-place-pools__button">
                 Посмотреть расписание
                </div>
              </a>
            </div>

          </div>
          
          
        </div>
      </div>
      <div class="aboutus-place-right__element">
      <img src="<?php echo get_template_directory_uri ()?>/assets/image/map/Group 1041.png" alt=""/>
      
    </div>
    
    </section>


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

             

    <section class="aboutus__coaches">
      <div class="container">
        <div class="heading">
          <div class="title">
            <h2><?= CFS()->get('aboutus-title_coaches')?></h2>
          </div>
          <div class="description">
            <p><?= CFS()->get('aboutus-subtitle_coaches')?></p>
          </div>
        </div>
      </div>
      <div class="services__container">
       <div class="services__rows">
        <div class="coacheSwiper mySwiper3">
          <div class="swiper-wrapper content">
              <?php if ( $catalog_coaches_query->have_posts() ) : ?>
                <?php while ( $catalog_coaches_query->have_posts() ) : $catalog_coaches_query->the_post(); ?>
                  
                  <div class="swiper-slide card">
                     <?php echo get_template_part('coach-swiper-content');?>
                         
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata( )?>
              <?php endif; ?>  
             </div>
            </div>
          </div>
  
        <div class="swiper-button__container">
        
        <div class="swiper-button-next-next">
          <div class="left-arrow"></div>
        </div>
        <div class="swiper-button-prev-prev">
          <div class="right-arrow"></div>
        </div>
      </div>
      </div>
      <div class="swiper-pagination">
        <div class="swiper-pagination__border"></div>
      </div>
    </div>
    </section>

    <section class="contact__form">
      <div class="container">
        <div class="form__row">
          <div class="form-element_background">
          <img
            class=""
            src="<?php echo get_template_directory_uri ()?>/assets/image/lastblock/Group 1041.png"
            alt=""
          />
        </div>
          <div class="form__text ">
            <div class="form__title">
              <h2>у вас остались вопросы?</h2>
            </div>
            <div class="form__description">
              <p>мы готовы на них ответить</p>
            </div>
            
              <div class="form-sub__description">
              <p> Оставьте свои данные и наш специалист свяжется с вами в ближайшее
              время</p>
            </div>

             <?php echo do_shortcode( '[contact-form-7 id="99" title="Contact Form"]' ); ?>

            <div class="form__note">
            <p>
              Нажимая на кнопку, вы даете согласие на обработку своих
              персональных данных, гарантия конфиденциальности
            </p>
          </div>
          </div>
          <div class="form__img">
            <div class="form-swimming-girl">
            
              <img src="<?php echo get_template_directory_uri ()?>/assets/image/lastblock/girl.png" alt="" />
          
            </div>
          </div>
        </div>
      </div>
    </section>

<?php

get_footer();