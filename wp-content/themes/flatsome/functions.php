<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';
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
//rut ngan title 
add_filter( 'the_title', 'short_title_product', 10, 2 );
function short_title_product( $title, $id ) {
if (get_post_type( $id ) === 'product' & !is_single() ) {
return wp_trim_words( $title, 4 ); // thay đổi số từ bạn muốn thêm
} else {
return $title;
}
}
//doi sale thanh %

add_filter( 'woocommerce_sale_flash', 'add_percentage_to_sale_badge', 20, 3 );
function add_percentage_to_sale_badge( $html, $post, $product ) {
    if( $product->is_type('variable')){
        $percentages = array();

        // Get all variation prices
        $prices = $product->get_variation_prices();

        // Loop through variation prices
        foreach( $prices['price'] as $key => $price ){
            // Only on sale variations
            if( $prices['regular_price'][$key] !== $price ){
                // Calculate and set in the array the percentage for each variation on sale
                $percentages[] = round(100 - ($prices['sale_price'][$key] / $prices['regular_price'][$key] * 100));
            }
        }
        // We keep the highest value
        $percentage = max($percentages) . '%';
    } else {
        $regular_price = (float) $product->get_regular_price();
        $sale_price    = (float) $product->get_sale_price();

        $percentage    = round(100 - ($sale_price / $regular_price * 100)) . '%';
    }
    return '' . esc_html__( '', 'woocommerce' ) . ' ' . "-". $percentage . '';
}


/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
