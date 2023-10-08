<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<!-- Header Area -->

	<?php 

		// header 
		$topheader_btntext = esc_attr(get_theme_mod('topheader_btntext','JOIN CLUB'));
		$topheader_btnlink = esc_attr(get_theme_mod('topheader_btnlink','#'));
		$topheader_fblink = esc_attr(get_theme_mod('topheader_fblink','#'));
		$topheader_twitterlink = esc_attr(get_theme_mod('topheader_twitterlink','#'));
		$topheader_instalink = esc_attr(get_theme_mod('topheader_instalink','#'));
		$topheader_linkdinlink = esc_attr(get_theme_mod('topheader_linkdinlink','#'));

		$stickyheader = esc_attr(baseballclub_sticky_menu());
	?>

<div class="main">
    <header class="main-header site-header <?php echo esc_attr(baseballclub_sticky_menu()); ?>">
		<div class="container">
			<div class="header-section">
				<div class="headfer-content row">
					<div class="col-lg-3 col-md-3 col-sm-12 pd-0">
						<div class="site-logo">
							<?php
							if(has_custom_logo())
								{	
									the_custom_logo();
								}
								else { 
							?>
							<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">	
								<?php 
									echo esc_html(bloginfo('name'));
								?>
							</a>	
							<?php 						
								}
							?>
						</div>
						<div class="box-info">
							<?php
								$baseballclub_site_desc = get_bloginfo( 'description');
								if ($baseballclub_site_desc) : ?>
									<p class="site-description"><?php echo esc_html($baseballclub_site_desc); ?></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-12 pd-0">
						<div class="row headtop">
							<div class="col-lg-6 col-md-6 col-sm-12 ">
								<p><?php echo esc_attr_e('Sweat makes the green grass grow.','baseball-club'); ?></p>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 social-icons pd-0">								
								<a title="<?php esc_attr('facebook', 'baseball-club'); ?>" target="_blank" href="<?php echo apply_filters('baseballclub_header', $topheader_fblink); ?>"><i class="fa fa-facebook"></i></a> 
								<a title="<?php esc_attr('twitter', 'baseball-club'); ?>" target="_blank" href="<?php echo apply_filters('baseballclub_header', $topheader_twitterlink); ?>"><i class="fa fa-twitter"></i></a>
								<a title="<?php esc_attr('instagram', 'baseball-club'); ?>" target="_blank" href="<?php echo apply_filters('baseballclub_header', $topheader_instalink); ?>"><i class="fa fa-instagram"></i></a>
								<a title="<?php esc_attr('linkedin', 'baseball-club'); ?>" target="_blank" href="<?php echo apply_filters('baseballclub_header', $topheader_linkdinlink); ?>"><i class="fa fa-linkedin-square"></i></a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 pd-0">
								<div class="hbtn">
									<div class="contact">
										<a class="btn" href="<?php echo apply_filters('baseballclub_header', $topheader_btnlink); ?>"><?php echo apply_filters('baseballclub_header', $topheader_btntext); ?></a>
									</div>
								</div>
							</div>

						</div>

						<div class="headbottom">
							<div class="menus">
								<nav class="navbar navbar-expand-lg navbaroffcanvase">
								<div class="navbar-menubar">
									<!-- Small Divice Menu-->
									<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','baseball-club'); ?>"> 
										<i class="fa fa-bars"></i>
									</button>
									<div class="collapse navbar-collapse navbar-menu">
										<button class="navbar-toggler navbar-toggler-close" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','baseball-club'); ?>"> 
											<i class="fa fa-times"></i>
										</button> 
										<?php 
											wp_nav_menu( 
												array(  
													'theme_location' => 'primary_menu',
													'container'  => '',
													'container_id'    => '',
													'menu_class' => 'navbar-nav main-nav',
													'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
													'walker' => new WP_Bootstrap_Navwalker()
													) 
												);
										?>
										
									</div>
								</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

    </header>
	<div class="clearfix"></div>
</div>

