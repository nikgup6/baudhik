<?php
/**
 * side bar template
 *
 * @package Baseball Club
 */
?>
<?php if ( ! is_active_sidebar( 'baseball-club-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('baseball-club-woocommerce-sidebar'); ?>
	</div>
</div>