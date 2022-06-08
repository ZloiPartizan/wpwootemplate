<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package swimmers
 */

?>

<?php
$name_footer = carbon_get_theme_option('est_footer_name');
$hours_footer = carbon_get_theme_option('est_footer_hours');
?>

	<footer id="colophon" class="site-footer footer">
        <div class="container">
            <div class="footer__row">
                <div class="footer__logo">
                     <?php $logo_id = carbon_get_theme_option('est_footer_logo');
                     $logo = $logo_id ? wp_get_attachment_image_src($logo_id , 'full') : '';?>
                     <a href="<?php echo home_url('/')?>">
                     <img src="<?php echo $logo[0]?>" alt="">
                     </a>
                </div>
                <div class="footer-logo__name">
          <span
          ><?php echo $name_footer;?></span
          >
                </div>
                <div class="footer-navigation-list">
                    <?php swimmers_primary_menu();?>
                </div>
                <div class="footer-navigation-contact__list">
                    <button class="open-popup" id="open-rec-popup">Записаться онлайн</button>

                    <span>
              <a href="#">
                  <img src="<?php echo get_template_directory_uri ()?>/assets/image/icons/phone.svg" alt="" />
                  <b><?php echo $GLOBALS['swimmers_vars']['footer_tel'];?></b>
                    </span>
                    </a>
                    <p><?php echo $hours_footer;?></p>
                    <div>
                        <a href="<?php echo $GLOBALS['swimmers_vars']['whats_url'];?>"><img src="<?php echo get_template_directory_uri ()?>/assets/image/social/Group 13.svg" alt="" /></a>
                        <a href="<?php echo $GLOBALS['swimmers_vars']['tg_url'];?>"><img src="<?php echo get_template_directory_uri ()?>/assets/image/social/whatsup.svg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
