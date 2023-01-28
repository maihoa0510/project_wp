
<?php
add_action( 'wp_enqueue_scripts', 'my_enqueue_assets' ); 
function my_enqueue_assets(){ 
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' ); 
}

//
add_action( 'woocommerce_single_product_summary', 'hocwordpress_product_sold_count', 11 );

function hocwordpress_product_sold_count() {
global $product;
$units_sold = $product->get_total_sales();
if ( $units_sold ){?>
<div class="product-sales epic_box">
<i class="fa fa-shopping-cart"></i>
<?php
echo '' . sprintf( __( 'Đã bán: %s', 'woocommerce' ), $units_sold ) . '';
?>
</div><?php
}
}

// tro lai wigit cu
function example_theme_support() {
	remove_theme_support( ‘widgets-block-editor’ );
	}
	add_action( ‘after_setup_theme’, ‘example_theme_support’ );
?>




