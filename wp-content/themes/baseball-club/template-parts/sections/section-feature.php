<section id="feature-section" class="features-area home-features">

	<div class="<?php if(esc_attr(get_theme_mod('baseball_club_feature_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('baseball_club_feature_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">
	<!-- <div class="container">  -->
		<!-- <div class="row justify-content-center text-center">  -->
		<div class="row ">
			<div class="header-section">
				<!-- </?php if($feature_subheading){ ?> -->
				<!-- </?php }?> -->
				<h3 class="section-title"><?php echo esc_html(get_theme_mod('feature_heading')); ?></h3>
				<div class="clearfix"></div>
			</div>
		 </div> 
		<div class="row">

			<?php for($p=1; $p<7; $p++) { ?>
	        <?php if( get_theme_mod('Feature'.$p,false)) { ?>
	        <?php $querycolumns = new WP_query('page_id='.get_theme_mod('Feature'.$p,true)); ?>
	        <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
	          $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
	        <?php 
	          if(has_post_thumbnail()){
	            $img = esc_url($image[0]);
	          }
	          if(empty($image)){
	            $img = get_template_directory_uri().'/assets/images/default.png';
	          }
	        ?>

			<?php 
				$icon = get_theme_mod('feature_icon'.$p,'fa fa-futbol-o');
			?>

	       
			<!-- Start Single Feature -->
			<div class="col-md-6 col-lg-4 box-space">
				<div class="threebox box<?php echo esc_attr( $p ) ?> <?php if($p % 3 == 0) { echo "last_column"; } ?>">    
					<div class="single-feature">
						<div class="feature-bx">
							<div class="row ">
								<div class="col-md-3">
									<div class="icnbx">
										<div class="icn-brd"></div>
										<i class="<?php echo $icon; ?>" aria-hidden="true"></i>

				                	</div> 
				                </div>
				                <div class="col-md-9">
									<div class="part-2">
										<h3 class="title"><?php the_title_attribute(); ?></h3>
										<p class="description"><?php the_excerpt(); ?></p>
										<div class="clearfix"></div>
										
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>

              	</div>
			</div>
			<!-- / End Single Feature -->

			<?php endwhile;
           wp_reset_postdata(); ?>
        <?php } } ?>
        <div class="clear"></div> 
			
		</div>
	<!-- </div> -->
	</div>
</section>
