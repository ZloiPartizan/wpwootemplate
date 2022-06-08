<?php 
/* Template name: Pools */
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
                <div class="pools-header__map">
                    <div class="filter-map__img">
                        <img src="<?php echo get_template_directory_uri ()?>/assets/image/page-pools/map/map.jpg" alt="">
                    </div>
                </div>
            </div>

        </div>
    </header>

    <section class="pools">
       <div class="container">
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

            <div class="pools-content__card">

              <div class="pools-content__image">
                <img src="<?php echo get_template_directory_uri ()?>/assets/image/page-pools/pools/2.jpg" alt="">
                <div class="pools-content__detail"><a href="#">Подробнее</a></div>
              </div>

              <div class="pools-content__name">
                <p>Бассейн "Заречье" в Одинцово
                <br><span>м. Автозаводская</span></p>
              </div>

              <div class="pools-content__button">
                <a href="#">Показать на карте</a>
              </div>

            </div>

            <div class="pools-content__card">

              <div class="pools-content__image">
                <img src="<?php echo get_template_directory_uri ()?>/assets/image/page-pools/pools/3.jpg" alt="">
                <div class="pools-content__detail"><a href="#">Подробнее</a></div>
              </div>

              <div class="pools-content__name">
                <p>Бассейн "Газопровод" пос. Коммунарка
                <br><span>м. Автозаводская</span></p>
              </div>

              <div class="pools-content__button">
                <a href="#">Показать на карте</a>
              </div>

            </div>

            <div class="pools-content__card">

              <div class="pools-content__image">
                <img src="<?php echo get_template_directory_uri ()?>/assets/image/page-pools/pools/4.jpg" alt="">
                <div class="pools-content__detail"><a href="#">Подробнее</a></div>
              </div>

              <div class="pools-content__name">
                <p>Бассейн "Оhana" в Московском
                <br><span>м. Автозаводская</span></p>
              </div>

              <div class="pools-content__button">
                <a href="#">Показать на карте</a>
              </div>

            </div>

            <div class="pools-content__card">

              <div class="pools-content__image">
                <img src="<?php echo get_template_directory_uri ()?>/assets/image/page-pools/pools/1.jpg" alt="">
                <div class="pools-content__detail"><a href="#">Подробнее</a></div>
              </div>

              <div class="pools-content__name">
                <p>Бассейн Олимпийского центра синх. плавания А. Давыдовой
                <br><span>м. Автозаводская</span></p>
              </div>

              <div class="pools-content__button">
                <a href="#">Показать на карте</a>
              </div>

            </div>

            <div class="pools-content__card">

              <div class="pools-content__image">
                <img src="<?php echo get_template_directory_uri ()?>/assets/image/page-pools/pools/2.jpg" alt="">
                <div class="pools-content__detail"><a href="#">Подробнее</a></div>
              </div>

              <div class="pools-content__name">
                <p>Бассейн "Заречье" в Одинцово
                <br><span>м. Автозаводская</span></p>
              </div>

              <div class="pools-content__button">
                <a href="#">Показать на карте</a>
              </div>

            </div>

            <div class="pools-content__card">

              <div class="pools-content__image">
                <img src="<?php echo get_template_directory_uri ()?>/assets/image/page-pools/pools/3.jpg" alt="">
                <div class="pools-content__detail"><a href="#">Подробнее</a></div>
              </div>

              <div class="pools-content__name">
                <p>Бассейн "Газопровод" пос. Коммунарка
                <br><span>м. Автозаводская</span></p>
              </div>

              <div class="pools-content__button">
                <a href="#">Показать на карте</a>
              </div>

            </div>

            <div class="pools-content__card">

              <div class="pools-content__image">
                <img src="<?php echo get_template_directory_uri ()?>/assets/image/page-pools/pools/4.jpg" alt="">
                <div class="pools-content__detail"><a href="#">Подробнее</a></div>
              </div>

              <div class="pools-content__name">
                <p>Бассейн "Оhana" в Московском
                <br><span>м. Автозаводская</span></p>
              </div>

              <div class="pools-content__button">
                <a href="#">Показать на карте</a>
              </div>

            </div>

            <div class="pools-content__card">

              <div class="pools-content__image">
                <img src="<?php echo get_template_directory_uri ()?>/assets/image/page-pools/pools/1.jpg" alt="">
                <div class="pools-content__detail"><a href="#">Подробнее</a></div>
              </div>

              <div class="pools-content__name">
                <p>Бассейн Олимпийского центра синх. плавания А. Давыдовой
                <br><span>м. Автозаводская</span></p>
              </div>

              <div class="pools-content__button">
                <a href="#">Показать на карте</a>
              </div>

            </div>

            <div class="pools-content__card">

              <div class="pools-content__image">
                <img src="<?php echo get_template_directory_uri ()?>/assets/image/page-pools/pools/2.jpg" alt="">
                <div class="pools-content__detail"><a href="#">Подробнее</a></div>
              </div>

              <div class="pools-content__name">
                <p>Бассейн "Заречье" в Одинцово
                <br><span>м. Автозаводская</span></p>
              </div>

              <div class="pools-content__button">
                <a href="#">Показать на карте</a>
              </div>

            </div>

            <div class="pools-content__card">

              <div class="pools-content__image">
                <img src="<?php echo get_template_directory_uri ()?>/assets/image/page-pools/pools/3.jpg" alt="">
                <div class="pools-content__detail"><a href="#">Подробнее</a></div>
              </div>

              <div class="pools-content__name">
                <p>Бассейн "Газопровод" пос. Коммунарка
                <br><span>м. Автозаводская</span></p>
              </div>

              <div class="pools-content__button">
                <a href="#">Показать на карте</a>
              </div>

            </div>   

          </div>
       </div>
    </section>

<?php

get_footer();
