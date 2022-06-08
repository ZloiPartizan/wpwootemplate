<?php 
/* Template name: Pools */
$page_id = get_the_ID();
get_header();
?>

<section class="breadcrumb">
      <div class="container">
      <div class="breadcrumb">
      <ul>
        <li><a href="./index.html">Главная</a></li>
        <li>
        <div class="breadcrumb-arrow">
          <img src="<?php echo get_template_directory_uri ()?>/assets/image/icons/bredcrumb-arrow.svg" alt="">
        </div>
        </li>
        <li>Бассейны</li>
    </ul>
  </div>
    </section>

    <header class="pools__header">
        <div class="container">
          <div class="heading">
            <div class="decorate__ellipse"></div>
            <div class="title">
              <h2>Территория наших бассейнов</h2>
            </div>
            <div class="description">
              <p>Можете выбирать, где заниматься</p>
            </div>

            <div class="pools-header__row">
                <div class="pools-header__filter">
                    <div class="filter__title">
                        <p>Фильтр</p>
                    </div>
                    <div class="filter__description">
                        <p>По станции метро</p>
                    </div>
                    
                   
                    <div class="filter__checkbox">
                        <input class="custom-checkbox" type="checkbox" id="metro-1" name="metro-1">
                       
                        <label for="metro-1">Метро Курская</label>
                        
                    </div>
                    
                      <div class="filter__checkbox">
                        <input class="custom-checkbox" type="checkbox" id="metro-2" name="metro-2">
                        <label for="metro-2">Метро Пушкинская</label>
                      </div>
                    
                      <div class="filter__checkbox">
                        <input class="custom-checkbox" type="checkbox" id="metro-3" name="metro-3">
                        <label for="metro-3">Метро Чкаловская</label>
                      </div>
                    
                      <div class="filter__checkbox">
                        <input class="custom-checkbox" type="checkbox" id="metro-4" name="metro-4">
                        <label for="metro-4">Метро Энтузиастов</label>
                      </div>
                    
                      <div class="filter__checkbox">
                        <input class="custom-checkbox" type="checkbox" id="metro-5" name="metro-5">
                        <label for="metro-5">Метро Сокол</label>
                      </div>

                      <div class="filter__checkbox">
                        <input class="custom-checkbox" type="checkbox" id="metro-6" name="metro-5">
                        <label for="metro-6">Метро Красные ворота</label>
                      </div>
                     
                    <div class="filter__button">
                        <button>Показать</button>
                    </div>
                    <div class="filter__reset">
                        <button>Сбросить</button>
                    </div>
                </div>
                <div class="pools-header__map" id="map">
                 
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
 
 <section class="pools">
 <div class="container">
 <div class="pools-content">
    <?php if ( $catalog_pools_query->have_posts() ) : ?>
      
   

      <?php while ( $catalog_pools_query->have_posts() ) : $catalog_pools_query->the_post(); ?>
        <?php echo get_template_part('pool-content');?>
      <?php endwhile; ?>

      <?php wp_reset_postdata( )?>
    
    <?php endif; ?>
    </div>
    </div>
  </section>


    <!--
          <div class="pools-content">

            <div class="pools-content__card">

              <div class="pools-content__image">
                <img src="<?php echo get_template_directory_uri ()?>/assets/image/page-pools/pools/1.jpg" alt="">
                <div class="pools-content__detail"><a href="./pool.html">Подробнее</a></div>
              </div>

              <div class="pools-content__name">
                <p>Бассейн Олимпийского центра синх. плавания А. Давыдовой
                <br><span>м. Автозаводская</span></p>
              </div>

              <div class="pools-content__button">
                <a href="#">Показать на карте</a>
              </div>

            </div> 

          </div>
   -->

<?php
get_sidebar();
get_footer();
