<?php
/* Template name: Account */
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */
get_header();

defined( 'ABSPATH' ) || exit;
?>
	<div class="container">
		<div class="myaccount__container">
			<div id="primary" 
				<main id="main" class="site-main">

					<?php

					while ( have_posts() ) : the_post();?>

						<div class="">
						<?php if ( is_order_received_page() ) :?>
							<div class="">
								<?php endif; ?>
						<?php if ( is_wc_endpoint_url('lost-password') ) :?>
							<div class="">
								<?php endif; ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<header class="title">
										<?php the_title( '<h2>', '</h2>' ); ?>
									</header><!-- .entry-header -->

									<div class="">
										<?php
										the_content();
										?>
									</div><!-- .entry-content -->

								</article><!-- #post-<?php the_ID(); ?> -->
								<?php

						if ( is_order_received_page() ) :
							?>
							</div>
						</div>
						<?php endif;
					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</div>
<?php

get_footer();
