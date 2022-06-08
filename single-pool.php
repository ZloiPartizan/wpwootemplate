<?php

/**
  * Template Name: single-custom_2
  * Template Post Type: post
 */

get_header();
?>
<?php
$pool_id = get_the_ID(); 
$pool_img = get_the_post_thumbnail_url($pool_id, 'pool_img');
$pool_name = carbon_get_post_meta($pool_id, 'pool_name');
$pool_subname = carbon_get_post_meta($pool_id, 'pool_subname');
$pool_address_link = carbon_get_post_meta($pool_id, 'pool_metro_link');
$pool_addres = carbon_get_post_meta($pool_id, 'pool_addres');
$pool_driving_id = carbon_get_post_meta($pool_id, 'pool_driving');
$pool_driving_img = wp_get_attachment_image_url($pool_driving_id, 'full'); 
$pool__schedule_name = carbon_get_post_meta($pool_id, 'pool__schedule_name');
$pool__schedule_subname = carbon_get_post_meta($pool_id, 'pool__schedule_subname');
$pool_schedule = carbon_get_post_meta( $pool_id, 'pool_schedule');
$pool_schedule2 = carbon_get_post_meta( $pool_id, 'pool_schedule2');
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
          <li><a href="<?php echo get_permalink(105); ?>">Бассейны</a></li>
          <li>
            <div class="breadcrumb-arrow">
              <img src="<?php echo get_template_directory_uri ()?>/assets/image/icons/bredcrumb-arrow.svg" alt="">
            </div>
            </li>
          <li><?php the_title();?></li>
      </ul>
    </div>
</section>

<header class="pool__header">
        <div class="container">
          <div class="heading">
            <div class="decorate__ellipse"></div>
            <div class="title">
              <h2><?php echo $pool_name?></h2>
            </div>
            <div class="description">
              <p><?php echo $pool_subname?></p>
            </div>

            <div class="pool-header__row">
                <div class="pool">
                    <div class="pool-header__img">
                        <img src="<?php echo $pool_img?>" alt="">
                    </div>
                    <div class="pool__address">
                        <p> <?php echo $pool_addres?> </p>
                    </div>
                </div>
                <div class="pool__map">
                    <div class="pool-header__img">
                        <img src="<?php echo $pool_driving_img?>" alt="">
                    </div>
                    <div class="pool__desc">
                        <p><b>Схема проезда</b></p>
                    </div>
                </div>            
            </div>    
          </div>
        </div>
        </header>

        <section class="pool__schedule">
            <div class="container">
              <div class="heading">
                <div class="title">
                  <h2><?php echo $pool__schedule_name?></h2>
                </div>
                <div class="description">
                  <p><?php echo $pool__schedule_subname?></p>
                </div>
             </div>

             <div class="pool-rec__schedule">
                <div class="pool-rec__desc">
                    <p><?php echo $pool__schedule_desc?></p>
                </div>
                <div class="pool-rec__button">
                    <button class="open-popup" id="open-rec-popup">
                        Записаться 
                    </button>
                </div>
             </div>

             
            <?php if ( ! empty( $pool_schedule ) ): ?>
              <div class="pool-schedule">
                <div class="table-wrap">
	               <table class="pool-schedule__table">
		         
			              <tr>
				              <th>Возраст группы</th>
				              <th>Понедельник</th>
                      <th>Вторник</th>
                      <th>Среда</th>
                      <th>Четверг</th>
                      <th>Пятница</th>
                      <th>Суббота</th>
                      <th>Воскресенье</th>
			              </tr>
		            
		             
			            <?php foreach ( $pool_schedule as $tr ): ?>
			              <tr>
				              <td><?php echo $tr['age'] ?></td>
				              <td><?php echo $tr['pn'] ?></td>
                      <td><?php echo $tr['vt'] ?></td>
                      <td><?php echo $tr['sr'] ?></td>
                      <td><?php echo $tr['cht'] ?></td>
                      <td><?php echo $tr['pt'] ?></td>
                      <td><?php echo $tr['sb'] ?></td>
                      <td><?php echo $tr['vs'] ?></td>
			              </tr>
			            <?php endforeach; ?>
		             
                 </table>
                </div>
                
              </div>  
            <?php endif; ?>

            <?php if ( ! empty( $pool_schedule2 ) ): ?>
              <div class="pool-lesson__price">
                <div class="table-wrap">
	               <table class="pool-schedule__table">
		         
			              <tr>
				              <th>Абонемент</th>
				              <th>Стоимость, ₽</th>
  
			              </tr>
		            
		             
			            <?php foreach ( $pool_schedule2 as $tr2 ): ?>
			              <tr>
				              <td><?php echo $tr2['abonement_name'] ?></td>
				              <td><?php echo $tr2['price'] ?></td>
			              </tr>
			            <?php endforeach; ?>
		             
                 </table>
                </div>
                <div class="pool-lesson-price__text">
                      <div class="pool-lesson-price__desc">
                          <p>В расписании первое время
                            указывает, когда необходимо
                            прийти в бассейн, второе -
                            время окончание занятия в воде. 
                            Продолжительность занятия в воде 
                            45 минут. Занятия проводятся в учебном 
                            крытом бассейне с переменной 
                            глубиной от 1,2 до 1,7 метра и 
                            температурой воды 28-29°C. 
                            Во время занятий на бортике 
                            присутствует врач.</p>
                      </div>
                      <div class="pool-rec__button"  id="open-pay-popup">
                        <button>
                            Оплатить занятия
                        </button>
                    </div>
                  </div>
              </div>  
            <?php endif; ?>



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
      
            $catalog_pools_count = wp_count_posts('product');
            $catalog_pools_count_publish = $catalog_pools_count->pulish;
             ?>


<section class="pool__swiper">
  <div class="container">

    <div class="heading">
      <div class="title">
        <h2>Вам также могут быть интересны</h2>
      </div>
      <div class="description">
        <p>бассейны, где проходят занятия</p>
      </div>
    </div>

          
  <div class="services__container">
    <div class="services__rows">
      <div class="poolswiper poolSwiper">
        <div class="swiper-wrapper content">
          <?php if ( $catalog_pools_query->have_posts() ) : ?>
          <?php while ( $catalog_pools_query->have_posts() ) : $catalog_pools_query->the_post(); ?>
            <div class="swiper-slide pools-content__card">
  
                <?php echo get_template_part('pool-swiper-content');?>
                         
            </div>
          <?php endwhile; ?>
            <?php wp_reset_postdata( )?>
          <?php endif; ?>  
        </div>
      </div>
    </div>
  </div> 
          
          <div class="swiper-pagination__pools">
          <div class="swiper-pagination ">
            <div class="swiper-pagination__border"></div>
          </div>
        </div>
     
        </section>

<div class="popup__bg2">
            <div class="container">
                <form class="popup2">
                    <div class="popup-background__img">
                          <img src="<?php echo get_template_directory_uri ()?>/assets/image/popups/background-pay/fon.jpg" alt="">
                    </div>
                    <div class="close-popup2">
                        <img src="<?php echo get_template_directory_uri ()?>/assets/image/popups/Vector.png" alt="">
                    </div>
                    <div class="popup__text">
                        <div class="popup__title">
                            <span>Оплатa занятий</span>
                        </div>
                        <div class="popup-post__title">
                            <p>Мы свяжемся с вами в ближайшее время</p>
                        </div>
                    </div>

                    <div class="">				
             			<label><?php echo do_shortcode( '[add_to_cart id="243" attribute="ab_pools"]' ); ?>Абонемент на 12 занятий в месяц</label>
              			<label><?php echo do_shortcode( '[add_to_cart id="229"]' ); ?>Абонемент на 8 занятий в месяц</label>
           			</div>
					
					<div class="popup__button">
            			<a href="<?php echo get_permalink(7); ?>" style="margin-bottom: 15px;">
            			 Оплатить
            			</a>    
           				<a href="" style="margin-bottom: 15px;">
            			 Оформить подписку
            			</a>  
           				<div class="popup_note">
              			<p>Нажимая кнопку, вы даете свое согласие
						   на обработку своих персональных данных,
						   в соответствии с Федеральным законом от 27.07.2006
						   года №152-ФЗ «О персональных данных»</p>
           				</div>
          			</div>
                </form>
            </div>
        </div>




<?php

get_footer();