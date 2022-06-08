<?php 
/* Template name: Payment */
get_header();
$page_id = get_the_ID(); 
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
          <li>Оплата</li>
      </ul>
    </div>
</section>
    
    <header class="payment__header">
        <div class="container">
            <div class="heading">
              <div class="decorate__ellipse"></div>
              <div class="title">
                <h2><?= CFS()->get('payment_title')?></h2>
              </div>
              <div class="description">
                <p><?= CFS()->get('payment_subtitle')?></p>
              </div>
    
              <div class="payment-header__row">
                <div class="payment__description">
                    <p><?= CFS()->get('payment_desc1')?></p>
                </div>
                <?php
                $questions = CFS() -> get('payment_questions');
                 foreach ($questions as $row5){
                ?>
                <div class="payment-list">
                    <div class="payment-list__title">
                        <p><?= $row5['payment-question_title']?></p>
                    </div>
                    <div class="payment-list__content">
                    <?= $row5['payment-question_desc']?>
                    </div>
                </div>
                 <?php
                }
                ?>
              </div>
            </div>
        </div>
    </header>


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

    <section class="payment__variants">
      <div class="container">
            <div class="heading">
              <div class="title">
                <h2><?= CFS()->get('payment-pools_title')?></h2>	
              </div>
              <div class="description">
                <p><?= CFS()->get('payment-pools_subtitle')?></p>
              </div>
            </div>
        
        <div class="aboutus-place-pools__list">
                
          <?php if ( $catalog_pools_query->have_posts() ) : ?>
          <?php while ( $catalog_pools_query->have_posts() ) : $catalog_pools_query->the_post(); ?>
          <?php echo get_template_part('pool-payment-content');?>
          <?php endwhile; ?>
          <?php wp_reset_postdata( )?>
          <?php endif; ?>     

          <div class="aboutus-place-pools__list-content">      
              <a href="#">
                <div class="pay__button" id="open-pay-popup">
                 Оплатить занятия
                </div>
              </a>
            </div>
    
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
