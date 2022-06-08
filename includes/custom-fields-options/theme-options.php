<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;



Container::make( 'theme_options', 'Настройки Подвала и Шапки' )

    ->set_icon( 'dashicons-businessman' )


    ->add_tab( 'Шапка', array(
        Field::make( 'image', 'est_header_logo', 'Логотип' ),
    ) )


    ->add_tab( 'Подвал', array(
        Field::make( 'image', 'est_footer_logo', 'Логотип' ),

        Field::make( 'text', 'est_footer_name', 'Название' )
        ->set_default_value('Клуб синхронного плавания'),

        Field::make( 'text', 'est_footer_tel', 'Телефон' )
        ->set_default_value('+7 000 000 00 00'),

        Field::make( 'text', 'est_footer_hours', 'Время работы' )
        ->set_default_value('Звоните нам с 9.00 до 21.00'),

        Field::make( 'text', 'swimmers_whats_url', 'Whatsup' ),
        Field::make( 'text', 'swimmers_tg_url', 'Telegram' ),
    ) );






