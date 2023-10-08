<?php
function baseballclub_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'baseball-club'),
		) 
	);

	
	/*=========================================
	Baseball Club Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','baseball-club'),
			'panel'  		=> 'header_section',
		)
    );





    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#fff', 'baseball-club' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','baseball-club'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// top header Tagline Color
	$topheadertaglinecol = esc_html__('#fff', 'baseball-club' );
	$wp_customize->add_setting(
    	'topheader_taglinecol',
    	array(
			'default' => $topheadertaglinecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecol',
		array(
		    'label'   		=> __('Tagline Color','baseball-club'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
 
	/*=========================================
	Baseball Club header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 5,
            'title' 		=> __('Header','baseball-club'),
			'panel'  		=> 'header_section',
		)
    );	


    $wp_customize->add_setting('baseballclub_reset_header_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new baseballclub_Reset_Custom_Control($wp_customize, 'baseball_club_reset_header_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Header Settings', 'baseball-club'),
	  'description' => 'baseball_club_header_reset_settings',
	  'section' => 'top_header'
	)));



    $wp_customize->add_setting('baseballclub_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new baseballclub_Tab_Control($wp_customize, 'baseballclub_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'baseball-club'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
            	'topheader_btntext',
            	'topheader_btnlink',
				'topheader_fblink',
            	'topheader_twitterlink',
            	'topheader_instalink',
            	'topheader_linkdinlink'


            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'baseball-club'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'header_menuscolor',
            	'header_menushovercolor',
            	'header_submenusbgcolor',
            	'header_submenusbordercolor',
            	'header_submenutextcolor',
            	'header_submenusbghovercolor',
            	'header_submenustxthovercolor',
            	'header_btntextcolor',
            	'header_btnbgcolor1',
            	'header_btntxthovercolor'
            ),
         )
	    
    	),
	)));


	// general setting

	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'baseballclub_switch_sanitization'
   	) );
   	$wp_customize->add_control( new baseballclub_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','baseball-club' ),
        'section' => 'top_header'
   	)));



	// topheader text 1
	$topheaderbtntext = esc_html__('JOIN CLUB', 'baseball-club' );
	$wp_customize->add_setting(
    	'topheader_btntext',
    	array(
			'default' => $topheaderbtntext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btntext',
		array(
		    'label'   		=> __('Button Text','baseball-club'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// topheader btn link
	$topheaderbtnlink = esc_html__('#', 'baseball-club' );
	$wp_customize->add_setting(
    	'topheader_btnlink',
    	array(
			'default' => $topheaderbtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btnlink',
		array(
		    'label'   		=> __('Button Link','baseball-club'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// topheader fb link
	$topheaderfblink = esc_html__('#', 'baseball-club' );
	$wp_customize->add_setting(
    	'topheader_fblink',
    	array(
			'default' => $topheaderfblink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_fblink',
		array(
		    'label'   		=> __('Facebook Link','baseball-club'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader twitter link
	$topheadertwitterlink = esc_html__('#', 'baseball-club' );
	$wp_customize->add_setting(
    	'topheader_twitterlink',
    	array(
			'default' => $topheadertwitterlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_twitterlink',
		array(
		    'label'   		=> __('Twitter Link','baseball-club'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader insta link
	$topheaderinstalink = esc_html__('#', 'baseball-club' );
	$wp_customize->add_setting(
    	'topheader_instalink',
    	array(
			'default' => $topheaderinstalink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_instalink',
		array(
		    'label'   		=> __('Instagram Link','baseball-club'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader linkdin link
	$topheaderlinkdinlink = esc_html__('#', 'baseball-club' );
	$wp_customize->add_setting(
    	'topheader_linkdinlink',
    	array(
			'default' => $topheaderlinkdinlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_linkdinlink',
		array(
		    'label'   		=> __('Linkedin Link','baseball-club'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);



	// Style setting

	// header menus Color
	$headermenuscolor = esc_html__('#001740', 'baseball-club' );
	$wp_customize->add_setting(
    	'header_menuscolor',
    	array(
			'default' => $headermenuscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuscolor',
		array(
		    'label'   		=> __('Menus Color','baseball-club'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menushover Color
	$headermenushovercolor = esc_html__('#C0053C', 'baseball-club' );
	$wp_customize->add_setting(
    	'header_menushovercolor',
    	array(
			'default' => $headermenushovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menushovercolor',
		array(
		    'label'   		=> __('Menus Hover & Active Color','baseball-club'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	$headersubmenusbgcolor = esc_html__('#fff', 'baseball-club' );
	$wp_customize->add_setting(
    	'header_submenusbgcolor',
    	array(
			'default' => $headersubmenusbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbgcolor',
		array(
		    'label'   		=> __('SubMenus BG Color','baseball-club'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	$headersubmenusbordercolor = esc_html__('#C0053C', 'baseball-club' );
	$wp_customize->add_setting(
    	'header_submenusbordercolor',
    	array(
			'default' => $headersubmenusbordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbordercolor',
		array(
		    'label'   		=> __('SubMenus Border Color','baseball-club'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header submenutext Color
	$headersubmenutextcolor = esc_html__('#000', 'baseball-club' );
	$wp_customize->add_setting(
    	'header_submenutextcolor',
    	array(
			'default' => $headersubmenutextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenutextcolor',
		array(
		    'label'   		=> __('SubMenus Text Color','baseball-club'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenusbghover Color
	$headersubmenusbghovercolor = esc_html__('#C0053C', 'baseball-club' );
	$wp_customize->add_setting(
    	'header_submenusbghovercolor',
    	array(
			'default' => $headersubmenusbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbghovercolor',
		array(
		    'label'   		=> __('SubMenus BG Hover Color','baseball-club'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenustxthover Color
	$headersubmenustxthovercolor = esc_html__('#fff', 'baseball-club' );
	$wp_customize->add_setting(
    	'header_submenustxthovercolor',
    	array(
			'default' => $headersubmenustxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenustxthovercolor',
		array(
		    'label'   		=> __('SubMenus txt Hover Color','baseball-club'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header btntext Color
	$headerbtntextcolor = esc_html__('#fff', 'baseball-club' );
	$wp_customize->add_setting(
    	'header_btntextcolor',
    	array(
			'default' => $headerbtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btntextcolor',
		array(
		    'label'   		=> __('Button Text Color','baseball-club'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btnbg Color 1
	$headerbtnbgcolor1 = esc_html__('#C0053C', 'baseball-club' );
	$wp_customize->add_setting(
    	'header_btnbgcolor1',
    	array(
			'default' => $headerbtnbgcolor1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btnbgcolor1',
		array(
		    'label'   		=> __('Button BG Color','baseball-club'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header btntxthover Color 
	$headerbtntxthovercolor = esc_html__('#fff', 'baseball-club' );
	$wp_customize->add_setting(
    	'header_btntxthovercolor',
    	array(
			'default' => $headerbtntxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btntxthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','baseball-club'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	$wp_customize->register_control_type('baseballclub_Tab_Control');
	$wp_customize->register_panel_type( 'baseballclub_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'baseballclub_WP_Customize_Section' );

}
add_action( 'customize_register', 'baseballclub_header_settings' );



if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class baseballclub_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'baseballclub_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class baseballclub_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'baseballclub_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}






