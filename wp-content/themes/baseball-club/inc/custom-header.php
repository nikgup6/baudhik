<?php
function baseballclub_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'baseballclub_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '646464',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'baseballclub_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'baseballclub_custom_header_setup' );

if ( ! function_exists( 'baseballclub_header_style' ) ) :

function baseballclub_header_style() {
	$header_text_color = get_header_textcolor();

  	$feature_disable_section = esc_attr(get_theme_mod('feature_disable_section','YES'));


	?>
	<style type="text/css">


		<?php 
		
		?>


		header.site-header .site-title {
			color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?>;

		}

		header.site-header .site-logo a {
			text-decoration-color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?> !important;
		}

		p.site-description {
			color: <?php echo esc_attr(get_theme_mod('topheader_taglinecol')); ?>;
		}
		


		
	
	
		.main-header .navbar .navbar-menu ul li a, .main-header .navbar .navbar-menu ul li.dropdown>a::after {
			color: <?php echo esc_attr(get_theme_mod('header_menuscolor')); ?>;
		}

		.main-header .navbar .navbar-nav > li:hover a, .main-header .navbar .navbar-nav > li.focus a, .main-header .navbar .navbar-nav > li.active a, .main-header .navbar .navbar-nav > li a.active,.main-header .navbar .navbar-menu ul li:hover.dropdown>a::after {
			color: <?php echo esc_attr(get_theme_mod('header_menushovercolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:not(.remove) {
			color: <?php echo esc_attr(get_theme_mod('header_submenutextcolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a {
			background: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:not(.remove) {
			border-left-color: <?php echo esc_attr(get_theme_mod('header_submenusbordercolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu li:hover a {
			background: <?php echo esc_attr(get_theme_mod('header_submenusbghovercolor')); ?> !important;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu li:hover a {
			color: <?php echo esc_attr(get_theme_mod('header_submenustxthovercolor')); ?> !important;
		}

		header .contact a {
			color: <?php echo esc_attr(get_theme_mod('header_btntextcolor')); ?> !important;
		}

		header .contact a {
			background-image: linear-gradient(0deg,<?php echo esc_attr(get_theme_mod('header_btnbgcolor1')); ?> 15%,<?php echo esc_attr(get_theme_mod('header_btnbgcolor1')); ?> 70%);
		}

		header .contact a:hover {
			color: <?php echo esc_attr(get_theme_mod('header_btntxthovercolor')); ?> !important;
		}
	




		.hero-style .slide-title h2 {
			color: <?php echo esc_attr(get_theme_mod('slider_titlecolor')); ?> !important;
		}


		.hero-style .slide-text p {
			color: <?php echo esc_attr(get_theme_mod('slider_descriptioncolor')); ?>;
		}

		.slider-area .s-oly {
			border-left-color: <?php echo esc_attr(get_theme_mod('slider_bordercolor')); ?> !important;
		}






		#feature-section h3.section-title {
			color: <?php echo esc_attr(get_theme_mod('feature_headingcolor')); ?>;
		}


		#feature-section .single-feature h3 {
			color: <?php echo esc_attr(get_theme_mod('feature_boxtitlecolorcolor')); ?>;
		}

		#feature-section .single-feature p, #feature-section .single-feature .description {
			color: <?php echo esc_attr(get_theme_mod('feature_boxdescriptioncolorcolor')); ?>;
		}


	


		#feature-section {
			padding-top: <?php echo esc_attr(get_theme_mod('baseball_club_feature_top_padding')); ?>em !important;
		}

		#feature-section {
			padding-bottom: <?php echo esc_attr(get_theme_mod('baseball_club_feature_bottom_padding')); ?>em !important;
		}



		



		.copy-right p,.copy-right p a {
			color: <?php echo esc_attr(get_theme_mod('footer_copyrightcolor')); ?>;
		}

		.copy-right {
			background: <?php echo esc_attr(get_theme_mod('footer_copyrightbgcolor')); ?>;
		}

		.footer-area {
			background: <?php echo esc_attr(get_theme_mod('footer_bgcolor')); ?>;
		}

		.footer-area .widget_text, .footer-area .widget_text p, .wp-block-latest-comments__comment-excerpt p, .wp-block-latest-comments__comment-date, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta,.footer-area .widget_block h1, .footer-area .widget_block h2, .footer-area .widget_block h3, .footer-area .widget_block h4, .footer-area .widget_block h5, .footer-area .widget_block h6,.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a {
			color: <?php echo esc_attr(get_theme_mod('footer_textcolor')); ?>;
		}

		.footer-area li:before, .page-template-home-template .footer-area li:before, .page .footer-area li:before, .single .footer-area li:before {
			color: <?php echo esc_attr(get_theme_mod('footer_iconcolor')); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a:hover {
			color: <?php echo esc_attr(get_theme_mod('footer_listhovercolor')); ?>;
		}

		
	<?php  ?>


	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		h4.site-title{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>



	<?php
        if ($feature_disable_section == 1):
	?>
		#feature-section {
			display: none;
		}
	<?php
		else :
	?>
		#feature-section {
			display: block;
		}
	<?php endif; ?>



	</style>
	<?php
}
endif;
