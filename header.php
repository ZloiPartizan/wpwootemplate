<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package swimmers
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Avrora</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'swimmers' ); ?></a>

	<header id="masthead" class="site-header">

        <nav class="nav">
            <div class="container">
                <div class="nav__row">
                    <div class="logo">
                            <?php $logo_id = carbon_get_theme_option('est_header_logo');
                            $logo = $logo_id ? wp_get_attachment_image_src($logo_id , 'full') : '';
                            ?>
                        <a href="<?php echo home_url('/')?>">
                            <img src="<?php echo $logo[0]?>" alt="">
                        </a>
                    </div>
                      <div class = "nav-row__box">
                          <div class="menu__toggle">
                          </div>

                    <a class = "nav-row-box-signin__button" href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id'));?>">
                                                <div class="nav-row-box-signin-button__container">
                                                     <img src="<?php echo get_template_directory_uri ()?>/assets/image/icons/signin.svg" alt="" />
                                                </div>
                                                </a>

                    </div>
                    <div class="navigation-content">

                        <div class="navigation-list">
                            <div class="navigation-list__links">
                                <?php
                                swimmers_primary_menu();
                                ?>
                            </div>
                            <div class="navigation-list__search hidden">

                                    <form method="POST" class="navigation-list__search-items" action="<?php esc_url( home_url( '/' ) );?>">
                                    <div class="menu__toggle" id="menu2"> </div>

                                    <label class="">
                                        <input type="text" name="s" value="<?php get_search_query();?>" placeholder="Я ищу...">
                                    </label>
                                    <button class="menu-search__button">
                                        Найти
                                    </button>
                                        <div class="search-result"></div>
                                    </form>


                            </div>
                        </div>

                        <div class="navigation-list__search-active hidden">
                            <?php
                            swimmers_primary_menu()
                            ?>
                        </div>

                        <div class="navigation-buttons">
                            <div class="search__button-container">
                        <button class="search__button">
                        </button>
                            </div>
                            <div class="record__button-container">
                        <button class="record__button open-popup" id="open-rec-popup">Запись онлайн</button>
                            </div>

                            <a class = "signin-button" href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id'));?>">
                            <div class="signin-button__container">
                                 <img src="<?php echo get_template_directory_uri ()?>/assets/image/icons/signin.svg" alt="" />
                                 <p> Войти </p>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="popup__bg">
            <div class="container">
                <form class="popup">
                    <div class="popup-background__img">
                        <img src="<?php echo get_template_directory_uri ()?>/assets/image/popups/background-rec/fon.png" alt="">
                    </div>
                    <div class="close-popup">
                        <img src="<?php echo get_template_directory_uri ()?>/assets/image/popups/Vector.png" alt="">
                    </div>
                    <div class="popup__text">
                        <div class="popup__title">
                            <span>Онлайн запись</span>
                        </div>
                        <div class="popup-post__title">
                            <p>Мы свяжемся с вами в ближайшее время</p>
                        </div>
                    </div>

                    <?php echo do_shortcode( '  [contact-form-7 id="219" title="Онлайн запись"]' ); ?>
                </form>
            </div>
        </div>


	</header><!-- #masthead -->


