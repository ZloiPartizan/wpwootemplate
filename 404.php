<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package swimmers
 */

get_header();
?>

	<main id="primary" class="site-main">

  <section class="error__form">
  <div class="container">
     <div class="form-grey-filter__row">
    
        <div class="form__row">
          <div class="form-element_background">
          <img
            class=""
            src="<?php echo get_template_directory_uri ()?>/assets/image/lastblock/Group 1041.png"
            alt=""
          />
        </div>
          <div class="form__text form-error__text">
            <div class="form__title">
              <h2>к сожалению</h2>
            </div>
            <div class="form__description">
              <p>Но страница не найдена</p>
            </div>
            
              <div class="form-sub__description">
              <p> Попробуйте перейти на гавную страницу или воспользоваться меню сайта</p>
            </div>
            <div class="color__button">
                  <a href="<?php echo home_url('/')?>">
              перейти на главную
            </a>
              </div>
             

            
          </div>
          <div class="form__img">
            <div class="form-swimming-girl">
            
              <img src="<?php echo get_template_directory_uri ()?>/assets/image/lastblock/girl.png" alt="" />
          
            </div>
          </div>
        </div>
    </div>
</div>
</section>

	</main><!-- #main -->

<?php
get_footer();
