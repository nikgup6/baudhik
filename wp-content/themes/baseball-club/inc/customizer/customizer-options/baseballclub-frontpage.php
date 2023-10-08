<?php
function baseballclub_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'baseballclub_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'baseball-club' ),
		)
	);
	


	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'baseball-club' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 1500*800','baseball-club'),
			'priority' => 1,
			'panel' => 'baseballclub_frontpage_sections',
		)
	);


	$wp_customize->add_setting('baseballclub_reset_slider_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new baseballclub_Reset_Custom_Control($wp_customize, 'baseballclub_reset_slider_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Slider Settings', 'baseball-club'),
	  'description' => 'baseball_club_slider_reset_settings',
	  'section' => 'slider_setting'
	)));
	

	$wp_customize->add_setting('baseballclub_slider_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new baseballclub_Tab_Control($wp_customize, 'baseballclub_slider_tabs', array(
	   'section' => 'slider_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'baseball-club'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'slider1',
            	'slider2',
            	'slider3',
            	'slider4',
            	'slider5',
            	'slider6'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'baseball-club'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'slider_titlecolor',
                'slider_descriptioncolor',
                'slider_bordercolor'

            ),
     	)
	    
    	),
	))); 


	

	// General Tab

	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','baseball-club'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		



	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','baseball-club'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','baseball-club'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 4
	$wp_customize->add_setting(
    	'slider4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider4',
		array(
		    'label'   		=> __('Slider 4','baseball-club'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Slider 5
	$wp_customize->add_setting(
    	'slider5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider5',
		array(
		    'label'   		=> __('Slider 5','baseball-club'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider 6
	$wp_customize->add_setting(
    	'slider6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider6',
		array(
		    'label'   		=> __('Slider 6','baseball-club'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// Style setting

	// slider title Color
	$slidertitlecolor = esc_html__('#fff', 'baseball-club' );
	$wp_customize->add_setting(
    	'slider_titlecolor',
    	array(
			'default' => $slidertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlecolor',
		array(
		    'label'   		=> __('Title Color','baseball-club'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider description Color
	$sliderdescriptioncolor = esc_html__('#fff', 'baseball-club' );
	$wp_customize->add_setting(
    	'slider_descriptioncolor',
    	array(
			'default' => $sliderdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','baseball-club'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider border Color
	$sliderbordercolor = esc_html__('#C0053C', 'baseball-club' );
	$wp_customize->add_setting(
    	'slider_bordercolor',
    	array(
			'default' => $sliderbordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_bordercolor',
		array(
		    'label'   		=> __('Border Color','baseball-club'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	/*=========================================
	Feature Section
	=========================================*/
	$wp_customize->add_section(
		'Feature_setting', array(
			'title' => esc_html__( 'Feature Section', 'baseball-club' ),
			'priority' => 2,
			'panel' => 'baseballclub_frontpage_sections',
		)
	);


	$wp_customize->add_setting('baseballclub_reset_Feature_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new baseballclub_Reset_Custom_Control($wp_customize, 'baseballclub_reset_Feature_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Feature Settings', 'baseball-club'),
	  'description' => 'baseball_club_Feature_reset_settings',
	  'section' => 'Feature_setting'
	)));
	

	$wp_customize->add_setting('baseballclub_Feature_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new baseballclub_Tab_Control($wp_customize, 'baseballclub_Feature_tabs', array(
	   'section' => 'Feature_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'baseball-club'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'feature_disable_section',
            	'feature_heading',
            	'Feature1',
				'feature_icon1',
            	'Feature2',
				'feature_icon2',
            	'Feature3',
				'feature_icon3',
            	'Feature4',
				'feature_icon4',
            	'Feature5',
				'feature_icon5',
            	'Feature6',
				'feature_icon6',

            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'baseball-club'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'feature_headingcolor',
            	'feature_boxtitlecolorcolor',
            	'feature_boxdescriptioncolorcolor'
            ),
     	),
  		array(
	        'name' => esc_html__('Layout', 'baseball-club'),
	        'icon' => 'dashicons dashicons-layout',
	        'fields' => array(
	            'baseball_club_feature_section_width',
	            'baseballclub_feature_padding',
	            'baseball_club_feature_top_padding',
	            'baseball_club_feature_bottom_padding'
	        ),
     	)
	    
    	),
	))); 



	// General

	// hide show feature section
	$wp_customize->add_setting(
        'feature_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new baseballclub_Toggle_Switch_Custom_Control(
            $wp_customize,
            'feature_disable_section',
            array(
                'settings'      => 'feature_disable_section',
                'section'       => 'Feature_setting',
                'label'         => __( 'Disable Section', 'baseball-club' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'baseball-club' ),
                    'off' => __( 'No', 'baseball-club' )
                ),
            )
        )
    );


    // feature title
	$wp_customize->add_setting(
    	'feature_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'feature_heading',
		array(
		    'label'   		=> __('Heading','baseball-club'),
		    'section'		=> 'Feature_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// Feature 1
	$wp_customize->add_setting( 
    	'Feature1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'Feature1',
		array(
		    'label'   		=> __('Feature 1','baseball-club'),
		    'section'		=> 'Feature_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	
	
	// feature icon 1
	$featureicon1 = esc_html__('fa fa-futbol-o', 'baseball-club' );
	$wp_customize->add_setting(
    	'feature_icon1',
    	array(
			'default' => $featureicon1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'feature_icon1',
		array(
		    'label'   		=> __('Feature Icon 1','baseball-club'),
		    'section'		=> 'Feature_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// Feature 2
	$wp_customize->add_setting(
    	'Feature2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'Feature2',
		array(
		    'label'   		=> __('Feature 2','baseball-club'),
		    'section'		=> 'Feature_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// feature icon 2
	$featureicon2 = esc_html__('fa fa-futbol-o', 'baseball-club' );
	$wp_customize->add_setting(
    	'feature_icon2',
    	array(
			'default' => $featureicon2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'feature_icon2',
		array(
		    'label'   		=> __('Feature Icon 2','baseball-club'),
		    'section'		=> 'Feature_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Feature 3
	$wp_customize->add_setting(
    	'Feature3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'Feature3',
		array(
		    'label'   		=> __('Feature 3','baseball-club'),
		    'section'		=> 'Feature_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// feature icon 3
	$featureicon3 = esc_html__('fa fa-futbol-o', 'baseball-club' );
	$wp_customize->add_setting(
    	'feature_icon3',
    	array(
			'default' => $featureicon3,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'feature_icon3',
		array(
		    'label'   		=> __('Feature Icon 3','baseball-club'),
		    'section'		=> 'Feature_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Feature 4
	$wp_customize->add_setting(
    	'Feature4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'Feature4',
		array(
		    'label'   		=> __('Feature 4','baseball-club'),
		    'section'		=> 'Feature_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// feature icon 4
	$featureicon4 = esc_html__('fa fa-futbol-o', 'baseball-club' );
	$wp_customize->add_setting(
    	'feature_icon4',
    	array(
			'default' => $featureicon4,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'feature_icon4',
		array(
		    'label'   		=> __('Feature Icon 4','baseball-club'),
		    'section'		=> 'Feature_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// Feature 5
	$wp_customize->add_setting(
    	'Feature5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Feature5',
		array(
		    'label'   		=> __('Feature 5','baseball-club'),
		    'section'		=> 'Feature_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// feature icon 5
	$featureicon5 = esc_html__('fa fa-futbol-o', 'baseball-club' );
	$wp_customize->add_setting(
    	'feature_icon5',
    	array(
			'default' => $featureicon5,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'feature_icon5',
		array(
		    'label'   		=> __('Feature Icon 5','baseball-club'),
		    'section'		=> 'Feature_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Feature 6
	$wp_customize->add_setting(
    	'Feature6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Feature6',
		array(
		    'label'   		=> __('Feature 6','baseball-club'),
		    'section'		=> 'Feature_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// feature icon 6
	$featureicon6 = esc_html__('fa fa-futbol-o', 'baseball-club' );
	$wp_customize->add_setting(
    	'feature_icon6',
    	array(
			'default' => $featureicon6,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'feature_icon6',
		array(
		    'label'   		=> __('Feature Icon 6','baseball-club'),
		    'section'		=> 'Feature_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// style

	

	// feature headingcolor color
	$featureheadingcolor = esc_html__('#000', 'baseball-club' );
	$wp_customize->add_setting(
    	'feature_headingcolor',
    	array(
			'default' => $featureheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'feature_headingcolor',
		array(
		    'label'   		=> __('Heading Color','baseball-club'),
		    'section'		=> 'Feature_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// feature boxtitlecolor color
	$featureboxtitlecolorcolor = esc_html__('#000', 'baseball-club' );
	$wp_customize->add_setting(
    	'feature_boxtitlecolorcolor',
    	array(
			'default' => $featureboxtitlecolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'feature_boxtitlecolorcolor',
		array(
		    'label'   		=> __('Title Color','baseball-club'),
		    'section'		=> 'Feature_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// feature boxdescriptioncolor color
	$featureboxdescriptioncolorcolor = esc_html__('#8c8c8f', 'baseball-club' );
	$wp_customize->add_setting(
    	'feature_boxdescriptioncolorcolor',
    	array(
			'default' => $featureboxdescriptioncolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'feature_boxdescriptioncolorcolor',
		array(
		    'label'   		=> __('Description Color','baseball-club'),
		    'section'		=> 'Feature_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	// layout setting
	$wp_customize->add_setting('baseball_club_feature_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'baseballclub_sanitize_choices',
    ));
    $wp_customize->add_control('baseball_club_feature_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','baseball-club'),
        'choices' => array (
            'Box Width' => __('Box Width','baseball-club'),
            'Full Width' => __('Full Width','baseball-club')
        ),
        'section' => 'Feature_setting',
    ));


    // feature section padding 
	$wp_customize->add_setting('baseballclub_feature_padding',array(
      'sanitize_callback'   => 'esc_html'
    ));
    $wp_customize->add_control('baseballclub_feature_padding',array(
      'label' => __('Section Padding','baseball-club'),
      'section' => 'Feature_setting'
    ));

    $wp_customize->add_setting('baseball_club_feature_top_padding',array(
        'default' => '5',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('baseball_club_feature_top_padding',array(
	    'type' => 'number',
	    'label' => __('Top','baseball-club'),
	    'section' => 'Feature_setting',
    ));

 	$wp_customize->add_setting('baseball_club_feature_bottom_padding',array(
        'default' => '2',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('baseball_club_feature_bottom_padding',array(
	    'type' => 'number',
	    'label' => __('Bottom','baseball-club'),
	    'section' => 'Feature_setting',
    ));



	$wp_customize->register_control_type('baseballclub_Tab_Control');

}

add_action( 'customize_register', 'baseballclub_blog_setting' );

// feature selective refresh
function baseballclub_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'baseballclub_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'baseballclub_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'baseballclub_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'baseballclub_blog_section_partials' );

// blog_title
function baseballclub_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function baseballclub_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// feature description
function baseballclub_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


