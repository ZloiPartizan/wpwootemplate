
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swimmers
 */
$page_id = get_the_ID();
get_header();
?>

    <header class="header">
      <div class="container">
      
        <div class="header__row">   
          <div class="header__text">   
          <img class = "header-img__decor" src="<?php echo get_template_directory_uri ()?>/assets/image/firstblock/element.png" alt="" />        
            <span class="header__pre__title"> <?= CFS()->get('header_pre_title')?></span>
            <div class="header__title">
              <h1><?= CFS()->get('header_title')?></h1>
            </div>
            <p><b><?= CFS()->get('header_desc')?></b></p>
            <button class="open-popup" id="open-rec-popup">Запись онлайн</button>
          </div>
          <div class="header__img">
            <div class="swimming-circle">
              <img class="" src="<?php echo get_template_directory_uri ()?>/assets/image/firstblock/element2.png" alt="" />
            </div>
            <div class="swimming-girl">
              <img src="<?php echo get_template_directory_uri ()?>/assets/image/firstblock/swim-girl.png" alt="" />
            </div>
            <div class="circle__element">
              <div class="circle">
                <div class="circle__text">
                  <p><?= CFS()->get('header_circle')?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="services">
      <div class="container">
        <div class="heading">
          <div class="title">
            <h2><?= CFS()->get('services_pre_title')?></h2>
          </div>
          <div class="description">
            <p><?= CFS()->get('services_title')?></p>
          </div>
        </div>
      </div>
      <div class="services__container">
      <div class="services__rows">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper content">
              <?php
              $loop = CFS() -> get('slider');
              foreach ($loop as $row){
                ?>
                <div class="swiper-slide card">
                  <div class="card-content">
                    <div class="card__img">
                      <img src="<?= $row['card-slider_img']?>" alt="" />
                    </div>
                      <div class="card__text">
                        <div class="card-name__text">
                          <h3><?= $row['card-slider_name']?></h3>
                        </div>
                        <div class="card-description__text">
                          <p><?= $row['card-slider_desc']?></p>
                        </div>
                      </div>
                    </div>
                </div>
                <?php
              }
              ?>


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

    <section class="preview">
      <div class="container">
        <div class="preview__box">
          <!-- <button class="play_button">
            <div class="play__icon">
              <img src="<?php echo get_template_directory_uri ()?>/assets/image/prewiev/play.png" alt="" />
            </div>
          </button> -->
          <video controls="controls" class="preview__clip" src="<?= CFS()->get('preview-video_content')?>"  
          poster="<?= CFS()->get('preview-img_content')?>">
          </video>
          
        </div>
      </div>
    </section>
   
    <section class="about">
      <div class="container">
        <div class="heading">
          <div class="title">
            <h2><?= CFS()->get('about_pre_title')?></h2>
          </div>
          <div class="description">
            <p><?= CFS()->get('about_title')?></p>
          </div>
          <div class="about__rows">
            <div class="about-content__column">
              <div class="about-rows__description">
                <p>
                <?= CFS()->get('about_desc1')?>
                </p>
              </div>
              <div class="about-rows__description">
                <p>
                <?= CFS()->get('about_desc2')?>
                </p>
              </div>
              <a href="<?php echo get_permalink(102)?>">
              <div class="about__button">
                О нашем клубе
              </div>
            </a>
            </div>
            <div class="about-card__column">
              <div class="about-card__element">
                <img src="<?php echo get_template_directory_uri ()?>/assets/image/icons/ellipse.png" />
              </div>
              <div class="about-card__icon">
                <img src="<?= CFS()->get('about-img_card')?>" alt="" />
              </div>
              <h3><?= CFS()->get('about-title_card')?></h3>
              <p>
              <?= CFS()->get('about-desc_card')?>
              </p>
              <a href="<?php echo get_permalink(102)?>">Подробнее
                <img src="<?php echo get_template_directory_uri ()?>/assets/image/icons/arrow.svg" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="place">
      <img src="<?php echo get_template_directory_uri ()?>/assets/image/map/Group 1070.png" alt="" class="place-left__element" />
      <div class="container">
        <div class="place__rows">
          <div class="place-content__column">
            <div class="place__title">
              <h2><?= CFS()->get('place_title')?></h2>
            </div>
            <div class="place__description">
              <p><?= CFS()->get('place_subtitle')?></p>
            </div>
            
            <div class="map">

              <img src="<?= CFS()->get('place-img_map')?>" alt="" />

          <div>

              <div class="puls__position">
              <div class="pulse">
              </div>
              <div class="pulse__name">
                <p>Москва</p>
              </div>
              </div>

            <div class="puls__position1">
              <div class="pulse__mini">

               </div>
              <div class="pulse-mini__name">
                <p>Пушкино</p>
              </div>
            </div>

            <div class="puls__position2">
              <div class="pulse__mini">

               </div>
              <div class="pulse-mini__name">
                <p>Пушкино</p>
              </div>
            </div>

            <div class="puls__position3">
              <div class="pulse__mini">

               </div>
              <div class="pulse-mini__name">
                <p>Балашиха</p>
              </div>
            </div>

            <div class="puls__position4">
              <div class="pulse__mini">

               </div>
              <div class="pulse-mini__name">
                <p>Домодедово</p>
              </div>
            </div>

            <div class="puls__position5">
              <div class="pulse__mini">

               </div>
              <div class="pulse-mini__name">
                <p>Видное</p>
              </div>
            </div>

            <div class="puls__position6">
              <div class="pulse__mini">

               </div>
              <div class="pulse-mini__name">
                <p>Домодедово</p>
              </div>
            </div>

            <div class="puls__position7">
              <div class="pulse__mini">

               </div>
              <div class="pulse-mini__name">
                <p>Домодедово</p>
              </div>
            </div>

            <div class="puls__position8">
              <div class="pulse__mini">

               </div>
              <div class="pulse-mini__name">
                <p>Мытищи</p>
              </div>
            </div>

            <div class="puls__position9">
              <div class="pulse__mini">

               </div>
              <div class="pulse-mini__name">
                <p>Истра</p>
              </div>
            </div>

            <div class="puls__position10">
              <div class="pulse__mini">

               </div>
              <div class="pulse-mini__name">
                <p>Солнечногорск</p>
              </div>
          </div>
          </div>
            </div>
          </div>

          <div class="place-benefits__column">
          <?php
              $benefits_loop = CFS() -> get('benefits');
              foreach ($benefits_loop as $row1){
                ?>
            <div class="place-benefits__block">
              <div class="place__elipse">
                <span><?= $row1['benefits-block_title']?></span>
              </div>
              <div class="place-benefits__title">
                <p><?= $row1['benefits-block_subtitle']?></p>
              </div>
              <div class="place-benefits__circle">
               <img src="<?= $row1['benefits-block_image']?>">
              </div>
            </div>
            <?php
              }
              ?>
            <a href="http://swimmers.local/pools/">
            <div class="place-benefits__button">
             Все бассейны
            </div>
          </a>
          </div>
        </div>

        <div class="place-benefits__container">

            <div class="warmSwiper benefitsSwiper">
              <div class="swiper-wrapper content">
               <?php
                 $warm_loop = CFS() -> get('warm-swiper');
                  foreach ($warm_loop as $row2){
                ?>
                <div class="swiper-slide card">
                  <div class="card-content">
                    <div class="warm-card__img">
                     <a href=" <?= $row2['warm-swiper_image']?>" data-fancybox="gallery"> <img src=" <?= $row2['warm-swiper_image']?>" alt="" /></a>
                    </div>
                  </div>
                </div>
                <?php
              }
              ?>
                <!-- <div class="swiper-slide card">
                  <div class="card-content">
                    <div class="warm-card__img">
                      <img src="<?php echo get_template_directory_uri ()?>/assets/image/warm-swiper/2.jpg" alt="" />
                    </div>
                  </div>
                </div>

                <div class="swiper-slide card">
                  <div class="warm-card-content">
                    <div class="warm-card__img">
                      <img src="<?php echo get_template_directory_uri ()?>/assets/image/warm-swiper/3.jpg" alt="" />
                    </div>
                  </div>
                </div>

                <div class="swiper-slide card">
                  <div class="card-content">
                    <div class="warm-card__img">
                      <img src="<?php echo get_template_directory_uri ()?>/assets/image/warm-swiper/4.jpg" alt="" />
                    </div>
                  </div>
                </div>

                <div class="swiper-slide card">
                  <div class="card-content">
                    <div class="warm-card__img">
                      <img src="<?php echo get_template_directory_uri ()?>/assets/image/warm-swiper/1.jpg" alt="" />
                    </div>
                  </div>
                </div>

                <div class="swiper-slide card">
                  <div class="card-content">
                    <div class="warm-card__img">
                      <img src="<?php echo get_template_directory_uri ()?>/assets/image/warm-swiper/2.jpg" alt="" />
                    </div>
                  </div>
                </div> -->

                </div>
              </div>

        </div>
      </div>
      <div class="place-right__element">

      <img src="<?php echo get_template_directory_uri ()?>/assets/image/map/Group 1041.png" alt=""/>

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
