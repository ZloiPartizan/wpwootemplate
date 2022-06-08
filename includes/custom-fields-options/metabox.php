<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Дополнительные поля' )
  ->show_on_post_type('coach')

  ->add_tab( 'Информация тренера', [
    
    Field::make( 'text', 'coach_name', 'Имя' ),
    Field::make( 'text', 'coach_subname', 'Фамилия' ),
    Field::make( 'complex', 'product_attributes', 'Фото' )
      ->set_max(3)
      ->add_fields([
        Field::make( 'image', 'coach_img', 'Фотография' ),
        
       ])
  ]);


  Container::make( 'post_meta', 'Дополнительные поля' )
       ->show_on_page(105)
       ->add_tab( 'Каталог', [
        Field::make( 'association', 'catalog_pools', 'Бассейны' )
        ->set_types( [
            [
                'type'      => 'post',
                'post_type' => 'pool',
            ]
         ] )
            ]);

  Container::make( 'post_meta', 'Информация бассейна' )
  ->show_on_post_type('pool')

  ->add_tab( 'Краткая информация', [
    Field::make( 'text', 'pool_name', 'Заголовок' ),
    Field::make( 'text', 'pool_subname', 'Название' ),
    Field::make( 'text', 'pool_metro_link', 'Метро' ),
  ])
    ->add_tab( 'Информация бассейна', [  
      Field::make( 'text', 'pool_addres', 'Адрес' ),
      Field::make( 'image', 'pool_driving', 'Схема проезда' ),
  ])
  ->add_tab( 'Рассписание', [  
    Field::make( 'text', 'pool__schedule_name', 'Заголовок' ),
    Field::make( 'text', 'pool__schedule_subname', 'Подзаголовок' ),
    Field::make( 'text', 'pool__schedule_desc', 'Описание' ),
    Field::make( 'complex', 'pool_schedule', 'Таблица 1' )
        ->add_fields([
            Field::make( 'textarea', 'age', 'Возраст группы' )->set_width( 11 ),
			Field::make( 'textarea', 'pn', 'Пн' )->set_width( 11 ),
            Field::make( 'textarea', 'vt', 'Вт' )->set_width( 11 ),
            Field::make( 'textarea', 'sr', 'Ср' )->set_width( 11 ),
            Field::make( 'textarea', 'cht', 'Чт' )->set_width( 11 ),
            Field::make( 'textarea', 'pt', 'Пт' )->set_width( 11 ),
            Field::make( 'textarea', 'sb', 'Сб' )->set_width( 11 ),
            Field::make( 'textarea', 'vs', 'Вс' )->set_width( 11 ),
        ]),
        Field::make( 'complex', 'pool_schedule2', 'Таблица 2' )
        ->add_fields([
            Field::make( 'textarea', 'abonement_name', 'Абонемент' )->set_width( 33 ),
			Field::make( 'textarea', 'price', 'Цена руб.' )->set_width( 33 ),
        ])
       ]);

Container::make( 'post_meta', 'Содержание Архива' )
       ->show_on_page(161)
       ->add_tab( 'Архив', [
        Field::make( 'text', 'coaches_title', 'Заголовок' ),
        Field::make( 'text', 'coaches_title_subname', 'Подзаголовок' ),
        Field::make( 'image', 'coaches_icon_image', 'Иконка карточки' ),
        Field::make( 'textarea', 'coaches_desc', 'Описание' ),
        Field::make( 'textarea', 'coaches_desc2', 'Описание 2' ),
        Field::make( 'text', 'coaches_cardtitle', 'Заголовок Карточки' ),
        Field::make( 'text', 'coaches_circle', 'Клуб' ),
        Field::make( 'association', 'catalog_coaches', 'Тренеры' )
        ->set_types( [
            [
                'type'      => 'post',
                'post_type' => 'coach',
            ]
         ] )
        ]
);

Container::make( 'post_meta', 'Дополнительные поля' )
       ->show_on_page(102)
       ->add_tab( 'Архив тренеров', [
       Field::make( 'association', 'catalog_coaches', 'Тренеры' )
       ->set_types( [
           [
               'type'      => 'post',
               'post_type' => 'coach',
           ]
        ] )
       ]
           )
           ->add_tab( 'Архив бассейнов', [
            Field::make( 'association', 'catalog_pools', 'Тренеры' )
            ->set_types( [
                [
                    'type'      => 'post',
                    'post_type' => 'pool',
                ]
             ] )
            ]
                );

Container::make( 'post_meta', 'Список бассейнов' )
       ->show_on_page(107)
       ->add_tab( 'Архив бассейнов', [
       Field::make( 'association', 'catalog_pools', 'Тренеры' )
       ->set_types( [
           [
               'type'      => 'post',
               'post_type' => 'pool',
           ]
        ] )
       ]
);
  