<?php
if (! defined('ABSPATH')){
    exit;
}

add_action( 'woocommerce_before_single_product', 'swimmers_wrapper_product_start', 5 );
function swimmers_wrapper_product_start() {
	?>

	
	<?php
}
add_action( 'woocommerce_after_single_product', 'swimmers_wrapper_product_end', 5 );
function swimmers_wrapper_product_end() {
	?>
	
        
	<?php
}
add_action( 'woocommerce_before_single_product_summary', 'swimmers_wrapper_product_image_start', 5 );
function swimmers_wrapper_product_image_start() {
	?>
    <div class="product__container">	

	<?php
}
add_action( 'woocommerce_before_single_product_summary', 'swimmers_wrapper_product_image_end', 25 );
function swimmers_wrapper_product_image_end() {
	?>
    </div>
	<?php
}
add_action( 'woocommerce_before_single_product_summary', 'swimmers_wrapper_product_entry_start', 30 );
function swimmers_wrapper_product_entry_start() {
	?>

	<?php
}
add_action( 'woocommerce_after_single_product_summary', 'swimmers_wrapper_product_entry_end', 5 );
function swimmers_wrapper_product_entry_end() {
	?>
	
	<?php
}