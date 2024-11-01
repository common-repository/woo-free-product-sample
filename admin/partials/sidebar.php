<?php
$plugins = get_option( 'active_plugins' );
if ( is_admin() ) {
    if ( ! function_exists( 'get_plugin_data' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    }
    // Checks if WooCommerce Marketplace Version is active
    if ( ! in_array( 'free-product-sample-for-woocommerce/woo-free-product-sample-pro.php', $plugins ) ) {
?>
    <!---- Start Right sidebar ---->
    <div class="wfps_setting_right">
        <div class="wfps_setting_right_rocket">
            <img src="<?php echo plugin_dir_url(dirname( __FILE__ ) ) . 'img/wfps-rocket.png'?>" alt="Woo free product sample">
            <br>
            <?php if( class_exists('Woo_Free_Product_Sample_Pro') ) { ?>
                <a class="wfpe_button" href="https://amplifyplugins.com/account/" target="_blank"><?php echo __('Manage License', 'woo-free-product-sample'); ?></a>
            <?php } else { ?>
                <a class="wfpe_button" href="https://amplifyplugins.com/downloads/free-product-sample-for-woocommerce/" target="_blank"><?php echo __('Upgrade to Pro', 'woo-free-product-sample'); ?></a>
            <?php } ?>
        </div>
    </div>
    <!---- End Right sidebar ---->
<?php
    }
}
?>