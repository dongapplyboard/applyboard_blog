<?php
/**
 * luna Theme Customizer
 *
 * @package luna
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object. 
 */
function luna_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage'; 
	
	
	//premiums are better
    class luna_Info extends WP_Customize_Control { 
     
        public $label = '';
        public function render_content() { 
        ?>

        	<?php
        	}
    	}	
	
	
	
//-------------------------------------------------------------------------------------------------------------------//
// Upgrade
//-------------------------------------------------------------------------------------------------------------------//

    $wp_customize->add_section(
        'luna_theme_info',
        array(
            'title' => esc_html__('Luna Premium', 'luna'), 
            'priority' => 5, 
            'description' => esc_html__('Need some more Luna? If you want to see what additional features Luna Premium has, check them all out at http://modernthemes.net/premium-wordpress-themes/luna/', 'luna'),  
        )
    );
	 
    //show them what we have to offer
    $wp_customize->add_setting('luna_help', array( 
			'sanitize_callback' => 'luna_no_sanitize',
            'type' => 'info_control',
            'capability' => 'edit_theme_options',
        )
    );
    $wp_customize->add_control( new luna_Info( $wp_customize, 'luna_help', array(  
        'section' => 'luna_theme_info', 
        'settings' => 'luna_help',  
        'priority' => 10
        ) )
    );
	
//-------------------------------------------------------------------------------------------------------------------//
// Move and Replace
//-------------------------------------------------------------------------------------------------------------------// 
	
	//Home Page Panel
	$wp_customize->add_panel( 'luna_colors_panel', array( 
    'priority'       => 40,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'General Colors', 'luna' ),
    'description'    => esc_html__( 'Edit your general color settings.', 'luna' ),
	));
	
	//Home Page Panel
	$wp_customize->add_panel( 'luna_nav_panel', array(
    'priority'       => 11,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Navigation', 'luna' ),
    'description'    => esc_html__( 'Edit your theme navigation settings.', 'luna' ),
	));
	
	// nav 
	$wp_customize->add_section( 'nav', array( 
	'title' => esc_html__( 'Navigation Settings', 'luna' ),
	'priority' => '10', 
	'panel' => 'luna_nav_panel'
	) );
	
	// colors
	$wp_customize->add_section( 'colors', array(
	'title' => esc_html__( 'Theme Colors', 'luna' ), 
	'priority' => '10', 
	'panel' => 'luna_colors_panel'
	) );
	
	// Move sections up 
	$wp_customize->get_section('static_front_page')->priority = 10;
	

//-------------------------------------------------------------------------------------------------------------------//
// Navigation
//-------------------------------------------------------------------------------------------------------------------//

	
	// Nav menu toggle
	$wp_customize->add_setting( 'luna_menu_toggle', array(
		'default' => 'icon', 
    	'capability' => 'edit_theme_options',
    	'sanitize_callback' => 'luna_sanitize_menu_toggle_display', 
  	));

  	$wp_customize->add_control( 'luna_menu_toggle_radio', array(
    	'settings' => 'luna_menu_toggle',
    	'label'    => esc_html__( 'Menu Toggle Display', 'luna' ), 
    	'section'  => 'nav',
    	'type'     => 'radio',
    	'choices'  => array(
      		'icon' => esc_html__( 'Icon', 'luna' ),
      		'label' => esc_html__( 'Menu', 'luna' ),
      		'icon-label' => esc_html__( 'Icon and Menu', 'luna' ) 
    	),
	));
	
	// Nav Colors
    $wp_customize->add_section( 'luna_nav_colors_section' , array(
	    'title'       => esc_html__( 'Navigation Colors', 'luna' ),
	    'priority'    => 20, 
	    'description' => esc_html__( 'Set your theme navigation colors.', 'luna'),
		'panel' => 'luna_nav_panel',
	));
	
	$wp_customize->add_setting( 'luna_nav_bg_color', array(
        'default'     => '#222222',
        'sanitize_callback' => 'sanitize_hex_color',
    )); 
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_nav_bg_color', array(
        'label'	   => esc_html__( 'Navigation Background Color', 'luna' ),
        'section'  => 'luna_nav_colors_section',
        'settings' => 'luna_nav_bg_color',
		'priority' => 10
    )));
	
	$wp_customize->add_setting( 'luna_nav_link_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_nav_link_color', array(
        'label'	   => esc_html__( 'Navigation Link Color', 'luna' ),
        'section'  => 'luna_nav_colors_section',
        'settings' => 'luna_nav_link_color',
		'priority' => 20 
    )));
	
	$wp_customize->add_setting( 'luna_nav_link_hover_color', array(
        'default'     => '#999999', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_nav_link_hover_color', array(
        'label'	   => esc_html__( 'Navigation Link Hover Color', 'luna' ),
        'section'  => 'luna_nav_colors_section', 
        'settings' => 'luna_nav_link_hover_color', 
		'priority' => 30 
    )));
	
	$wp_customize->add_setting( 'luna_menu_icon', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_menu_icon', array(
        'label'	   => esc_html__( 'Navigation Icon', 'luna' ),
        'section'  => 'luna_nav_colors_section',
        'settings' => 'luna_menu_icon',
		'priority' => 35 
    )));
	
	$wp_customize->add_setting( 'luna_menu_button', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_menu_button', array(
        'label'	   => esc_html__( 'Navigation Button Border', 'luna' ),
        'section'  => 'luna_nav_colors_section',
        'settings' => 'luna_menu_button',
		'priority' => 40 
    )));
	
	
	$wp_customize->add_setting( 'luna_menu_button_hover', array(
        'default'     => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_menu_button_hover', array(
        'label'	   => esc_html__( 'Navigation Button Hover', 'luna' ),
        'section'  => 'luna_nav_colors_section',
        'settings' => 'luna_menu_button_hover',
		'priority' => 50 
    )));
	
	$wp_customize->add_setting( 'luna_menu_icon_hover', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_menu_icon_hover', array(
        'label'	   => esc_html__( 'Navigation Icon Hover', 'luna' ),
        'section'  => 'luna_nav_colors_section',
        'settings' => 'luna_menu_icon_hover',
		'priority' => 55
    )));
	
	
//-------------------------------------------------------------------------------------------------------------------//
// Logos and Favicons
//-------------------------------------------------------------------------------------------------------------------//
	
	
	// Logo upload
    $wp_customize->add_section( 'luna_logo_section' , array(   
	    'title'       => esc_html__( 'Logo', 'luna' ),
	    'priority'    => 20, 
	    'description' => esc_html__( 'Upload a logo to replace the default site name and description in the header. Also, upload your site favicon and Apple Icons.', 'luna'),
	));

	$wp_customize->add_setting( 'luna_logo', array(
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'luna_logo', array(  
		'label'    => esc_html__( 'Logo', 'luna' ),
		'type'           => 'image',
		'section'  => 'luna_logo_section', 
		'settings' => 'luna_logo',
		'priority' => 10,
	))); 
	
	// Logo Width
	$wp_customize->add_setting( 'logo_size', array(
	    'sanitize_callback' => 'absint',
		'default' => '120'
	));

	$wp_customize->add_control( 'logo_size', array( 
		'label'    => esc_html__( 'Logo Size', 'luna' ), 
		'description' => esc_html__( 'Change the width of the Logo in PX. Only enter numeric value.', 'luna' ),
		'section'  => 'luna_logo_section', 
		'settings' => 'logo_size',
		'type'        => 'number',
		'priority'   => 30,
		'input_attrs' => array(
            'style' => 'margin-bottom: 15px;',  
        ), 
	));
	
	
//-------------------------------------------------------------------------------------------------------------------//
// Hero Section
//-------------------------------------------------------------------------------------------------------------------//

	$wp_customize->add_panel( 'luna_home_hero_panel', array(
    'priority'       => 22,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Home Hero Section', 'luna' ),
    'description'    => esc_html__( 'Edit your home page settings', 'luna' ),
	));
	
	// Banner Section 
	$wp_customize->add_section( 'luna_video_section', array(
		'title'          => esc_html__( 'Video Option', 'luna' ),
		'priority'       => 30, 
		'description' => esc_html__( 'Please select the Home Page - Video template file for your Home page. Then upload your video files with the WordPress Media uploader or to your root folder and type the URLs (ex: video_banner.mp4) of the video files in the following boxes. If you leave them blank then the featured image of the page you set to Home Page - Video will be used instead. It is advised that you convert your video to mp4, webm, and ogv for full browser support, you can find more info on that at http://www.syntaxxx.com/how-to-html5-background-video/. Video will only play on desktop screens, as mobile devices do not support them. On mobile the featured image is displayed (so you should always set one) and it should be at least 1920x1000 in size for best appearance.', 'luna' ), 
		'panel' => 'luna_home_hero_panel',
	));
	
	// MP4
	$wp_customize->add_setting( 'luna_banner_mp4',
	array(
		'sanitize_callback' => 'luna_sanitize_text', 	 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'luna_banner_mp4', array(
    'label' => esc_html__( 'Video Banner .mp4 File', 'luna' ), 
	'description' => esc_html__( 'ex: video_banner.mp4', 'luna' ),
    'section' => 'luna_video_section',
    'settings' => 'luna_banner_mp4', 
	'priority'   => 10
	))); 
	
	// WEBM
	$wp_customize->add_setting( 'luna_banner_webm', 
	array(
		'sanitize_callback' => 'luna_sanitize_text',  	 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'luna_banner_webm', array(
    'label' => esc_html__( 'Video Banner .webm File', 'luna' ),
	'description' => esc_html__( 'ex: video_banner.webm', 'luna' ), 
    'section' => 'luna_video_section',
    'settings' => 'luna_banner_webm', 
	'priority'   => 20
	)));
	
	// OGV
	$wp_customize->add_setting( 'luna_banner_ogv', 
	array(
		'sanitize_callback' => 'luna_sanitize_text', 	 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'luna_banner_ogv', array(
    'label' => esc_html__( 'Video Banner .ogv File', 'luna' ),
	'description' => esc_html__( 'ex: video_banner.ogv', 'luna' ),
    'section' => 'luna_video_section', 
    'settings' => 'luna_banner_ogv', 
	'priority'   => 30
	)));
	
	//Home Hero Section
    $wp_customize->add_section( 'luna_home_hero_section' , array(  
	    'title'       => esc_html__( 'Home Hero Options', 'luna' ),
	    'priority'    => 10, 
	    'description' => esc_html__( 'Edit the options for the home page Hero section.', 'luna'),
		'panel' => 'luna_home_hero_panel',
	));
	
	$wp_customize->add_setting( 'luna_home_bg_image', array(
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'luna_home_bg_image', array( 
		'label'    => esc_html__( 'Background Image', 'luna' ),
		'type'           => 'image', 
		'section'  => 'luna_home_hero_section', 
		'settings' => 'luna_home_bg_image', 
		'priority' => 10,
	)));
	
	$wp_customize->add_setting( 'luna_hero_bg_color', array(
        'default'     => '#ffffff', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_hero_bg_color', array(
        'label'	   => esc_html__( 'Background Color', 'luna' ),
        'section'  => 'luna_home_hero_section',
        'settings' => 'luna_hero_bg_color', 
		'priority' => 15
    ))); 
	
	//Title
	$wp_customize->add_setting( 'luna_home_title',
	    array(
	        'sanitize_callback' => 'luna_sanitize_text',  
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'luna_home_title', array(
		'label'    => esc_html__( 'Hero Title', 'luna' ), 
		'section'  => 'luna_home_hero_section',  
		'settings' => 'luna_home_title', 
		'priority'   => 20
	)));
	
	$wp_customize->add_setting( 'luna_home_text',
	    array(
	        'sanitize_callback' => 'luna_sanitize_text',  
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'luna_home_text', array(
		'label'    => esc_html__( 'Hero Text', 'luna' ), 
		'type' => 'textarea', 
		'section'  => 'luna_home_hero_section',  
		'settings' => 'luna_home_text', 
		'priority'   => 20
	)));
	
	
	$wp_customize->add_setting( 'luna_hero_heading_color', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_hero_heading_color', array(
        'label'	   => esc_html__( 'Title Color', 'luna' ), 
        'section'  => 'luna_home_hero_section',
        'settings' => 'luna_hero_heading_color',
		'priority' => 25
    )));
	
	$wp_customize->add_setting( 'luna_hero_p_color', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_hero_p_color', array(
        'label'	   => esc_html__( 'Text Color', 'luna' ), 
        'section'  => 'luna_home_hero_section',
        'settings' => 'luna_hero_p_color',
		'priority' => 28
    )));
	
	//Button Text
	$wp_customize->add_setting( 'luna_home_button_text',
	    array(
	        'sanitize_callback' => 'luna_sanitize_text',  
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'luna_home_button_text', array(
		'label'    => esc_html__( 'Button Text', 'luna' ), 
		'section'  => 'luna_home_hero_section',  
		'settings' => 'luna_home_button_text', 
		'priority'   => 30,
	)));
	
	
	// Page Drop Downs 
	$wp_customize->add_setting('luna_home_button_url', array( 
		'capability' => 'edit_theme_options', 
        'sanitize_callback' => 'luna_sanitize_int' 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'luna_home_button_url', array( 
    	'label' => esc_html__( 'Hero Button URL', 'luna' ), 
    	'section' => 'luna_home_hero_section', 
		'type' => 'dropdown-pages',
    	'settings' => 'luna_home_button_url', 
		'priority'   => 40  
	)));
	
	
	$wp_customize->add_setting( 'luna_button_text_color', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_button_text_color', array(
        'label'	   => esc_html__( 'Button Text Color', 'luna' ),
        'section'  => 'luna_home_hero_section',
        'settings' => 'luna_button_text_color',
		'priority' => 45
    )));
	
	$wp_customize->add_setting( 'luna_button_border_color', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_button_border_color', array(
        'label'	   => esc_html__( 'Button Border Color', 'luna' ),
        'section'  => 'luna_home_hero_section',
        'settings' => 'luna_button_border_color',
		'priority' => 50
    )));
	
	$wp_customize->add_setting( 'luna_button_hover_color', array(
        'default'     => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_button_hover_color', array(
        'label'	   => esc_html__( 'Button Hover Color', 'luna' ),
        'section'  => 'luna_home_hero_section',
        'settings' => 'luna_button_hover_color', 
		'priority' => 60
    )));
	
	$wp_customize->add_setting( 'luna_button_text_hover_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_button_text_hover_color', array(
        'label'	   => esc_html__( 'Button Text Hover Color', 'luna' ),
        'section'  => 'luna_home_hero_section',
        'settings' => 'luna_button_text_hover_color', 
		'priority' => 65
    )));
	
	
	
//-------------------------------------------------------------------------------------------------------------------//
// Home Page
//-------------------------------------------------------------------------------------------------------------------//

 
	//Home Page Panel
	$wp_customize->add_panel( 'luna_home_page_panel', array(
    'priority'       => 25,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Home Page Options', 'luna' ),
    'description'    => esc_html__( 'Edit your home page settings', 'luna' ),
	));
	
	//Home Page Works
    $wp_customize->add_section( 'luna_home_default_works' , array(   
	    'title'       => esc_html__( 'Home Page - Works', 'luna' ),
	    'priority'    => 5, 
	    'description' => esc_html__( 'Edit the Works options for the Home Page layout. You must also download our Projects plugin from http://modernthemes.net/plugins/', 'luna'),
		'panel' 	  => 'luna_home_page_panel',  
	));

	//Works Background
	$wp_customize->add_setting( 'luna_home_default_widget_bg_1', array( 
        'default'     => '#f1f1f1',  
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_home_default_widget_bg_1', array(
        'label'	   => esc_html__( 'Work Section Background', 'luna' ), 
        'section'  => 'luna_home_default_works',
        'settings' => 'luna_home_default_widget_bg_1', 
		'priority' => 10  
    ))); 
	
	//Single Work Background
	$wp_customize->add_setting( 'luna_home_default_single_work_bg', array( 
        'default'     => '#ffffff',  
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_home_default_single_work_bg', array(
        'label'	   => esc_html__( 'Single Work Background', 'luna' ), 
        'section'  => 'luna_home_default_works',
        'settings' => 'luna_home_default_single_work_bg', 
		'priority' => 20  
    )));
	
	//Single Work Text
	$wp_customize->add_setting( 'luna_home_default_single_work_text', array( 
        'default'     => '#666666',   
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_home_default_single_work_text', array(
        'label'	   => esc_html__( 'Single Work Text', 'luna' ), 
        'section'  => 'luna_home_default_works',
        'settings' => 'luna_home_default_single_work_text', 
		'priority' => 30  
    )));  
	
	//Single Work Text
	$wp_customize->add_setting( 'luna_home_default_single_work_text_hover', array( 
        'default'     => '#666666',   
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_home_default_single_work_text_hover', array(
        'label'	   => esc_html__( 'Single Work Text Hover', 'luna' ), 
        'section'  => 'luna_home_default_works',
        'settings' => 'luna_home_default_single_work_text_hover',  
		'priority' => 40  
    )));  
	
	
	//Home Page Default
    $wp_customize->add_section( 'luna_home_default_news' , array(   
	    'title'       => esc_html__( 'Home Page - News', 'luna' ),
	    'priority'    => 8, 
	    'description' => esc_html__( 'This section is for customizing MT - Home Posts options for the home page layout. Add the MT - Home Posts widget to the Default Home Page - News widget area.', 'luna'),  
		'panel' 	  => 'luna_home_page_panel', 
	));
	
	//News Background
	$wp_customize->add_setting( 'luna_default_news_bg', array(  
        'default'     => '#ffffff',  
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_default_news_bg', array(
        'label'	   => esc_html__( 'News Section Background', 'luna' ), 
        'section'  => 'luna_home_default_news',
        'settings' => 'luna_default_news_bg', 
		'priority' => 50  
    )));
	
	
	
//-------------------------------------------------------------------------------------------------------------------//
// Footer
//-------------------------------------------------------------------------------------------------------------------//

	
	// Footer Panel
	$wp_customize->add_panel( 'luna_footer_panel', array(
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Footer Options', 'luna' ),
    'description'    		 => esc_html__( 'Edit your footer options', 'luna' ),
	));
	 
	// Add Footer Section
	$wp_customize->add_section( 'footer-custom' , array(
    	'title' => esc_html__( 'Footer', 'luna' ),
    	'priority' => 20,
    	'description' => esc_html__( 'Customize your footer area', 'luna' ),
		'panel' => 'luna_footer_panel'
	));
	
	//Title
	$wp_customize->add_setting( 'luna_footer_title',
	    array(
	        'sanitize_callback' => 'luna_sanitize_text',  
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'luna_footer_title', array(
		'label'    => esc_html__( 'Footer Contact Title', 'luna' ), 
		'section'  => 'footer-custom',  
		'settings' => 'luna_footer_title', 
		'priority'   => 8
	)));
	
	$wp_customize->add_setting( 'luna_footer_text',
	    array(
	        'sanitize_callback' => 'luna_sanitize_text',  
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'luna_footer_text', array(
		'label'    => esc_html__( 'Footer Contact Area', 'luna' ), 
		'type' => 'textarea', 
		'section'  => 'footer-custom',  
		'settings' => 'luna_footer_text', 
		'priority'   => 10
	)));
	
	// Footer Byline Text 
	$wp_customize->add_setting( 'luna_footerid',
	    array(
	        'sanitize_callback' => 'luna_sanitize_text',
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'luna_footerid', array(
    'label' => esc_html__( 'Footer Byline Text', 'luna' ),
    'section' => 'footer-custom', 
    'settings' => 'luna_footerid',
	'priority'   => 30
	)));
	
	//Hide Section 
	$wp_customize->add_setting('active_byline',
	    array(
	        'sanitize_callback' => 'luna_sanitize_checkbox',
	)); 
	
	$wp_customize->add_control( 'active_byline', array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Footer Byline', 'luna' ),
        'section' => 'footer-custom',  
		'priority'   => 35
    ));
	
	$wp_customize->add_setting( 'luna_footer_color', array( 
        'default'     => '#f1f1f1',  
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_footer_color', array(
        'label'	   => esc_html__( 'Footer Background Color', 'luna'),
        'section'  => 'footer-custom',
        'settings' => 'luna_footer_color',
		'priority' => 40
    )));
	
	$wp_customize->add_setting( 'luna_footer_text_color', array( 
        'default'     => '#404040', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_footer_text_color', array(
        'label'	   => esc_html__( 'Footer Text Color', 'luna'),
        'section'  => 'footer-custom',
        'settings' => 'luna_footer_text_color', 
		'priority' => 50
    )));
	
	$wp_customize->add_setting( 'luna_footer_heading_color', array( 
        'default'     => '#404040', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_footer_heading_color', array(
        'label'	   => esc_html__( 'Footer Heading Color', 'luna'),
        'section'  => 'footer-custom',
        'settings' => 'luna_footer_heading_color',
		'priority' => 50
    )));
	
	$wp_customize->add_setting( 'luna_footer_link_color', array(  
        'default'     => '#404040', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_footer_link_color', array(
        'label'	   => esc_html__( 'Footer Link Color', 'luna'),  
        'section'  => 'footer-custom',
        'settings' => 'luna_footer_link_color', 
		'priority' => 60 
    )));
	
	$wp_customize->add_setting( 'luna_footer_link_hover_color', array(  
        'default'     => '#000000', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_footer_link_hover_color', array(
        'label'	   => esc_html__( 'Footer Link Hover Color', 'luna'),  
        'section'  => 'footer-custom', 
        'settings' => 'luna_footer_link_hover_color', 
		'priority' => 70
    )));
	
	$wp_customize->add_setting( 'luna_footer_byline_bg', array(  
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_footer_byline_bg', array(
        'label'	   => esc_html__( 'Footer Bottom Background', 'luna'),  
        'section'  => 'footer-custom', 
        'settings' => 'luna_footer_byline_bg', 
		'priority' => 80
    )));
	
	$wp_customize->add_setting( 'luna_footer_byline_text', array(  
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_footer_byline_text', array(
        'label'	   => esc_html__( 'Footer Byline Text', 'luna'),  
        'section'  => 'footer-custom', 
        'settings' => 'luna_footer_byline_text',
		'priority' => 90
    )));
	
	$wp_customize->add_setting( 'luna_footer_byline_link', array(  
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_footer_byline_link', array(
        'label'	   => esc_html__( 'Footer Byline Link', 'luna'),  
        'section'  => 'footer-custom', 
        'settings' => 'luna_footer_byline_link',
		'priority' => 100
    )));
	
	$wp_customize->add_setting( 'luna_footer_byline_link_hover', array(  
        'default'     => '#000000',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_footer_byline_link_hover', array(
        'label'	   => esc_html__( 'Footer Byline Link Hover', 'luna'),  
        'section'  => 'footer-custom', 
        'settings' => 'luna_footer_byline_link_hover',
		'priority' => 110
    )));

	
	
//-------------------------------------------------------------------------------------------------------------------//
// Social Panel
//-------------------------------------------------------------------------------------------------------------------//
 
	//Social Panel
	$wp_customize->add_panel( 'social_panel', array(
    'priority'       => 38,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Social Media Icons', 'luna' ),
    'description'    => esc_html__( 'Edit your social media icons', 'luna' ),
	)); 
	
	//Social Section
	$wp_customize->add_section( 'luna_settings', array(
            'title'          => esc_html__( 'Social Media Settings', 'luna' ), 
            'priority'       => 10,
			'panel' => 'social_panel',
    ) );
	
	//Hide Social Section 
	$wp_customize->add_setting('active_social',
	    array(
	        'sanitize_callback' => 'luna_sanitize_checkbox',
	)); 
	
	$wp_customize->add_control( 
    'active_social', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Social Media Icons', 'luna' ),
        'section' => 'luna_settings',  
		'priority'   => 10
    ));
	
	//social font size
    $wp_customize->add_setting( 
        'luna_social_text_size',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '16',
        )
    );
	
    $wp_customize->add_control( 'luna_social_text_size', array(
        'type'        => 'number', 
        'priority'    => 15,
        'section'     => 'luna_settings', 
        'label'       => esc_html__('Social Icon Size', 'luna'), 
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 32, 
            'step'  => 1,
            'style' => 'margin-bottom: 10px; padding: 10px;',
        ),
  	));
		
	//Social Icon Colors
	$wp_customize->add_setting( 'luna_social_color', array(
        'default'     => '#404040', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_social_color', array(
        'label'	   => esc_html__( 'Social Icon Color', 'luna' ),
        'section'  => 'luna_settings',
        'settings' => 'luna_social_color', 
		'priority' => 20
    )));
	
	$wp_customize->add_setting( 'luna_social_color_hover', array( 
        'default'     => '#000000', 
		'sanitize_callback' => 'sanitize_hex_color',  
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_social_color_hover', array(
        'label'	   => esc_html__( 'Social Icon Hover Color', 'luna' ), 
        'section'  => 'luna_settings',
        'settings' => 'luna_social_color_hover', 
		'priority' => 30
    )));
	
	

//-------------------------------------------------------------------------------------------------------------------//
// General Colors
//-------------------------------------------------------------------------------------------------------------------//
	
	
	// Colors
	$wp_customize->add_setting( 'luna_text_color', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'luna' ),
        'section'  => 'colors',
        'settings' => 'luna_text_color',
		'priority' => 10 
    ))); 
	
    $wp_customize->add_setting( 'luna_link_color', array( 
        'default'     => '#666666',  
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_link_color', array(
        'label'	   => esc_html__( 'Link Color', 'luna'),
        'section'  => 'colors',
        'settings' => 'luna_link_color', 
		'priority' => 30
    )));
	
	$wp_customize->add_setting( 'luna_hover_color', array(
        'default'     => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_hover_color', array(
        'label'	   => esc_html__( 'Hover Color', 'luna' ), 
        'section'  => 'colors',
        'settings' => 'luna_hover_color',
		'priority' => 35 
    )));
	
	$wp_customize->add_setting( 'luna_site_title_color', array(
        'default'     => '#404040', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_site_title_color', array(
        'label'	   => esc_html__( 'Site Title Color', 'luna' ),  
        'section'  => 'colors',
        'settings' => 'luna_site_title_color',
		'priority' => 40
    )));
	
	//Page Colors
    $wp_customize->add_section( 'luna_page_colors_section' , array(
	    'title'       => esc_html__( 'Page Colors', 'luna' ),
	    'priority'    => 20, 
	    'description' => esc_html__( 'Set your page colors.', 'luna'),
		'panel' => 'luna_colors_panel',
	));
	
	$wp_customize->add_setting( 'luna_page_header', array(
        'default'     => '#ffffff', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_page_header', array(
        'label'	   => esc_html__( 'Page Header Background Color', 'luna' ),
        'section'  => 'luna_page_colors_section',
        'settings' => 'luna_page_header',
		'priority' => 35
    ))); 
	
	$wp_customize->add_setting( 'luna_entry', array(
        'default'     => '#404040', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_entry', array(
        'label'	   => esc_html__( 'Entry Title Color', 'luna' ), 
        'section'  => 'luna_page_colors_section',
        'settings' => 'luna_entry',  
		'priority' => 55
    )));
	
	$wp_customize->add_setting( 'luna_page_button_color', array( 
        'default'     => '#404040', 
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_page_button_color', array(
        'label'	   => esc_html__( 'Button Color', 'luna' ), 
        'section'  => 'luna_page_colors_section',
        'settings' => 'luna_page_button_color', 
		'priority' => 60
    )));
	
	$wp_customize->add_setting( 'luna_page_button_text_color', array( 
        'default'     => '#404040', 
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_page_button_text_color', array(
        'label'	   => esc_html__( 'Button Text Color', 'luna' ), 
        'section'  => 'luna_page_colors_section',
        'settings' => 'luna_page_button_text_color', 
		'priority' => 65
    )));
	
	$wp_customize->add_setting( 'luna_page_button_color_hover', array( 
        'default'     => '#000000', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_page_button_color_hover', array(
        'label'	   => esc_html__( 'Button Hover Color', 'luna' ), 
        'section'  => 'luna_page_colors_section', 
        'settings' => 'luna_page_button_color_hover',
		'priority' => 70
    )));
	
	$wp_customize->add_setting( 'luna_page_button_text_hover_color', array( 
        'default'     => '#ffffff', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_page_button_text_hover_color', array(
        'label'	   => esc_html__( 'Button Text Hover Color', 'luna' ), 
        'section'  => 'luna_page_colors_section', 
        'settings' => 'luna_page_button_text_hover_color', 
		'priority' => 75
    )));
	
	
//-------------------------------------------------------------------------------------------------------------------//
// Blog Layout
//-------------------------------------------------------------------------------------------------------------------//

	
	// Choose excerpt or full content on blog
    $wp_customize->add_section( 'luna_layout_section' , array( 
	    'title'       => esc_html__( 'Blog', 'luna' ),
	    'priority'    => 38,  
	    'description' => 'Change how luna displays posts', 
	));
	
	$wp_customize->add_setting( 'luna_post_content', array( 
		'default'	        => 'option1',
		'sanitize_callback' => 'luna_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'luna_post_content', array(
		'label'    => esc_html__( 'Post content', 'luna' ),
		'section'  => 'luna_layout_section',
		'settings' => 'luna_post_content',
		'type'     => 'radio',
		'choices'  => array(
			'option1' => 'Excerpts',
			'option2' => 'Full content',
			), 
	)));
	
	// Blog Title
	$wp_customize->add_setting( 'luna_blog_title',
	    array(
	        'sanitize_callback' => 'luna_sanitize_text',
			'default' => 'The Blog'
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'luna_blog_title', array(
		'label'    => esc_html__( 'Blog Page Title', 'luna' ),
		'section'  => 'luna_layout_section',
		'settings' => 'luna_blog_title',
		'priority'   => 10
	)));
	
	$wp_customize->add_setting( 'luna_blog_view_more',
	    array(
	        'sanitize_callback' => 'luna_sanitize_text',
			'default' => 'View More'
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'luna_blog_view_more', array(
		'label'    => esc_html__( 'Blog View More Text', 'luna' ), 
		'section'  => 'luna_layout_section',
		'settings' => 'luna_blog_view_more',
		'priority'   => 15 
	)));
	
	//Excerpt
    $wp_customize->add_setting(
        'exc_length',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '40',
    ));
	
    $wp_customize->add_control( 'exc_length', array( 
        'type'        => 'number',
        'priority'    => 2, 
        'section'     => 'luna_layout_section',
        'label'       => esc_html__('Excerpt length', 'luna'),
        'description' => esc_html__('Choose your excerpt length here. Default: 40 words', 'luna'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 200,
            'step'  => 5,
            'style' => 'padding: 15px;',
        ), 
	));
	
	//Blog Colors
	$wp_customize->add_setting( 'luna_blog_archive_bg', array( 
        'default'     => '#ffffff',  
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_blog_archive_bg', array(
        'label'	   => esc_html__( 'Blog Archive Background', 'luna' ),
        'section'  => 'luna_layout_section',
        'settings' => 'luna_blog_archive_bg', 
		'priority' => 25
    )));
	
	$wp_customize->add_setting( 'luna_archive_hover', array( 
        'default'     => '#f9f9f9',  
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_archive_hover', array(
        'label'	   => esc_html__( 'Blog Archive Entry Hover Background', 'luna' ),
        'section'  => 'luna_layout_section',
        'settings' => 'luna_archive_hover', 
		'priority' => 30
    )));
	
	$wp_customize->add_setting( 'luna_archive_border', array( 
        'default'     => '#ededed', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_archive_border', array(
        'label'	   => esc_html__( 'Blog Archive Entry Border Color', 'luna' ),
        'section'  => 'luna_layout_section',
        'settings' => 'luna_archive_border', 
		'priority' => 35 
    )));
	
	$wp_customize->add_setting( 'luna_blockquote_border_color', array( 
        'default'     => '#cccccc', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_blockquote_border_color', array(
        'label'	   => esc_html__( 'Blockquote Border', 'luna' ),
        'section'  => 'luna_layout_section',
        'settings' => 'luna_blockquote_border_color', 
		'priority' => 40
    )));
	
	
	
//-------------------------------------------------------------------------------------------------------------------//
// Fonts
//-------------------------------------------------------------------------------------------------------------------//	
	
	
	// Fonts  
    $wp_customize->add_section(
        'luna_typography',
        array(
            'title' => esc_html__('Fonts', 'luna' ),   
            'priority' => 45, 
    ));
	
    $font_choices = 
        array(
			' ',
			'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Playfair Display:400,700,400italic' => 'Playfair Display', 
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
			'Oswald:400,700' => 'Oswald',
			'Montserrat:400,700' => 'Montserrat',
			'Raleway:400,700' => 'Raleway',
            'Droid Sans:400,700' => 'Droid Sans',
            'Lato:400,700,400italic,700italic' => 'Lato',
            'Arvo:400,700,400italic,700italic' => 'Arvo',
            'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif', 
            'PT Sans:400,700,400italic,700italic' => 'PT Sans',
            'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',  
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
            'Arimo:400,700,400italic,700italic' => 'Arimo',
            'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
            'Bitter:400,700,400italic' => 'Bitter',
            'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
			'Lobster:400' => 'Lobster',
            'Roboto:400,400italic,700,700italic' => 'Roboto',
            'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
            'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
            'Roboto Slab:400,700' => 'Roboto Slab',
            'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
            'Mandali:400' => 'Mandali',
			'Vesper Libre:400,700' => 'Vesper Libre',
			'NTR:400' => 'NTR',
			'Dhurjati:400' => 'Dhurjati',
			'Faster One:400' => 'Faster One',
			'Mallanna:400' => 'Mallanna',
			'Averia Libre:400,300,700,400italic,700italic' => 'Averia Libre',
			'Galindo:400' => 'Galindo',
			'Titan One:400' => 'Titan One',
			'Abel:400' => 'Abel',
			'Nunito:400,300,700' => 'Nunito',
			'Poiret One:400' => 'Poiret One',
			'Signika:400,300,600,700' => 'Signika',
			'Muli:400,400italic,300italic,300' => 'Muli',
			'Play:400,700' => 'Play',
			'Bree Serif:400' => 'Bree Serif',
			'Archivo Narrow:400,400italic,700,700italic' => 'Archivo Narrow',
			'Cuprum:400,400italic,700,700italic' => 'Cuprum',
			'Noto Serif:400,400italic,700,700italic' => 'Noto Serif',
			'Pacifico:400' => 'Pacifico',
			'Alegreya:400,400italic,700italic,700,900,900italic' => 'Alegreya',
			'Asap:400,400italic,700,700italic' => 'Asap',
			'Maven Pro:400,500,700' => 'Maven Pro',
			'Dancing Script:400,700' => 'Dancing Script',
			'Karla:400,700,400italic,700italic' => 'Karla',
			'Merriweather Sans:400,300,700,400italic,700italic' => 'Merriweather Sans',
			'Exo:400,300,400italic,700,700italic' => 'Exo',
			'Varela Round:400' => 'Varela Round',
			'Cabin Condensed:400,600,700' => 'Cabin Condensed',
			'PT Sans Caption:400,700' => 'PT Sans Caption',
			'Cinzel:400,700' => 'Cinzel',
			'News Cycle:400,700' => 'News Cycle',
			'Inconsolata:400,700' => 'Inconsolata',
			'Architects Daughter:400' => 'Architects Daughter',
			'Quicksand:400,700,300' => 'Quicksand',
			'Titillium Web:400,300,400italic,700,700italic' => 'Titillium Web',
			'Quicksand:400,700,300' => 'Quicksand',
			'Monda:400,700' => 'Monda',
			'Didact Gothic:400' => 'Didact Gothic',
			'Coming Soon:400' => 'Coming Soon',
			'Ropa Sans:400,400italic' => 'Ropa Sans',
			'Tinos:400,400italic,700,700italic' => 'Tinos',
			'Glegoo:400,700' => 'Glegoo',
			'Pontano Sans:400' => 'Pontano Sans',
			'Fredoka One:400' => 'Fredoka One',
			'Lobster Two:400,400italic,700,700italic' => 'Lobster Two',
			'Quattrocento Sans:400,700,400italic,700italic' => 'Quattrocento Sans',
			'Covered By Your Grace:400' => 'Covered By Your Grace',
			'Changa One:400,400italic' => 'Changa One',
			'Marvel:400,400italic,700,700italic' => 'Marvel',
			'BenchNine:400,700,300' => 'BenchNine',
			'Orbitron:400,700,500' => 'Orbitron',
			'Crimson Text:400,400italic,600,700,700italic' => 'Crimson Text',
			'Bangers:400' => 'Bangers',
			'Courgette:400' => 'Courgette',
    );
	
	//body font size
    $wp_customize->add_setting(
        'luna_body_size',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '18', 
        )
    );
	
    $wp_customize->add_control( 'luna_body_size', array(
        'type'        => 'number', 
        'priority'    => 10,
        'section'     => 'luna_typography',
        'label'       => esc_html__('Body Font Size', 'luna'), 
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 28,
            'step'  => 1,
            'style' => 'margin-bottom: 10px; padding: 10px;',
        ),
  	));
    
    $wp_customize->add_setting(
        'headings_fonts',
        array(
            'sanitize_callback' => 'luna_sanitize_fonts',
    ));
    
    $wp_customize->add_control(
        'headings_fonts',
        array(
            'type' => 'select',
			'default'           => '20', 
            'description' => esc_html__('Select your desired font for the headings. Helvetica Neue is the default Heading font.', 'luna'),
            'section' => 'luna_typography',
            'choices' => $font_choices
    ));
    
    $wp_customize->add_setting(
        'body_fonts',
        array(
            'sanitize_callback' => 'luna_sanitize_fonts',
    ));
    
    $wp_customize->add_control(
        'body_fonts',
        array(
            'type' => 'select',
			'default'           => '30', 
            'description' => esc_html__( 'Select your desired font for the body. Helvetica Neue is the default Body font.', 'luna' ), 
            'section' => 'luna_typography',  
            'choices' => $font_choices 
    )); 
	
	
	
//-------------------------------------------------------------------------------------------------------------------//
// Plugin Options
//-------------------------------------------------------------------------------------------------------------------//
	
	
	//Plugin Panel
	$wp_customize->add_panel( 'luna_plugin_panel', array(
    'priority'       => 42, 
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'ModernThemes Plugin Options', 'luna' ),
    'description'    => esc_html__( 'If you have installed any of our ModernThemes content plugins, use this section to edit theme-specific options. Our plugins are styled different from theme to theme, so you can use this area to customize the content to match your theme.', 'luna' ),
	)); 
	
	
	//Services Plugins 
	$wp_customize->add_section( 'luna_plugin_services_colors' , array(  
	    'title'       => esc_html__( 'Services', 'luna' ), 
	    'priority'    => 10, 
	    'description' => esc_html__( 'If you have installed the Services plugin from our ModernThemes content plugins, use this section to edit theme-specific colors. Our plugins are styled different from theme to theme, so you can use this area to customize the content to match your theme.', 'luna'), 
		'panel' => 'luna_plugin_panel',
	));

	
	$wp_customize->add_setting( 'luna_plugin_service_page_icon_color', array( 
		'default' => '#404040',
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_service_page_icon_color', array(
        'label'	   => esc_html__( 'Service Icon', 'luna' ), 
        'section'  => 'luna_plugin_services_colors',
        'settings' => 'luna_plugin_service_page_icon_color', 
		'priority' => 110
    ))); 
	
	
	$wp_customize->add_setting( 'luna_plugin_service_page_icon_bg_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_service_page_icon_bg_color', array(
        'label'	   => esc_html__( 'Service Icon Background', 'luna' ), 
        'section'  => 'luna_plugin_services_colors',
        'settings' => 'luna_plugin_service_page_icon_bg_color', 
		'priority' => 115
    ))); 
	
	$wp_customize->add_setting( 'luna_plugin_service_page_icon_border_color', array(	
		'default' => '#404040',
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_service_page_icon_border_color', array(
        'label'	   => esc_html__( 'Service Icon Border', 'luna' ), 
        'section'  => 'luna_plugin_services_colors',
        'settings' => 'luna_plugin_service_page_icon_border_color', 
		'priority' => 118
    )));
	
	//Projects Plugins 
	$wp_customize->add_section( 'luna_plugin_projects_colors' , array(  
	    'title'       => esc_html__( 'Projects', 'luna' ), 
	    'priority'    => 20, 
	    'description' => esc_html__( 'If you have installed the Projects plugin from our ModernThemes content plugins, use this section to edit theme-specific colors. Our plugins are styled different from theme to theme, so you can use this area to customize the content to match your theme.', 'luna'), 
		'panel' => 'luna_plugin_panel',
	));
	
	$wp_customize->add_setting( 'luna_plugin_project_hover_color', array( 
        'default'     => '#151515',  
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_project_hover_color', array(
        'label'	   => esc_html__( 'Hover Background', 'luna' ), 
        'section'  => 'luna_plugin_projects_colors',
        'settings' => 'luna_plugin_project_hover_color', 
		'priority' => 10 
    ))); 
	
	$wp_customize->add_setting( 'luna_plugin_project_hover_text_color', array( 
        'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_project_hover_text_color', array(
        'label'	   => esc_html__( 'Hover Text', 'luna' ), 
        'section'  => 'luna_plugin_projects_colors',
        'settings' => 'luna_plugin_project_hover_text_color', 
		'priority' => 20 
    ))); 
	
	//Team Members Plugins 
	$wp_customize->add_section( 'luna_plugin_team_colors' , array(  
	    'title'       => esc_html__( 'Team Members', 'luna' ), 
	    'priority'    => 30, 
	    'description' => esc_html__( 'If you have installed the Team Members plugin from our ModernThemes content plugins, use this section to edit theme-specific colors. Our plugins are styled different from theme to theme, so you can use this area to customize the content to match your theme.', 'luna'), 
		'panel' => 'luna_plugin_panel',
	));
	
	$wp_customize->add_setting( 'luna_plugin_team_icon', array( 
        'default'     => '#1f2023',  
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_team_icon', array(
        'label'	   => esc_html__( 'Team Member Icon Color', 'luna' ), 
        'section'  => 'luna_plugin_team_colors',
        'settings' => 'luna_plugin_team_icon', 
		'priority' => 10 
    ))); 
	
	$wp_customize->add_setting( 'luna_plugin_team_icon_border', array( 
        'default'     => '#1f2023',
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_team_icon_border', array(
        'label'	   => esc_html__( 'Team Member Icon Border', 'luna' ),
        'section'  => 'luna_plugin_team_colors',
        'settings' => 'luna_plugin_team_icon_border',
		'priority' => 30
    )));
	
	$wp_customize->add_setting( 'luna_plugin_team_icon_hover', array(
        'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_team_icon_hover', array(
        'label'	   => esc_html__( 'Team Member Icon Hover', 'luna' ), 
        'section'  => 'luna_plugin_team_colors',
        'settings' => 'luna_plugin_team_icon_hover', 
		'priority' => 40 
    ))); 
	
	$wp_customize->add_setting( 'luna_plugin_team_icon_bg_hover', array(
        'default'     => '#1f2023',
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_team_icon_bg_hover', array(
        'label'	   => esc_html__( 'Team Member Icon Background Hover', 'luna' ), 
        'section'  => 'luna_plugin_team_colors',
        'settings' => 'luna_plugin_team_icon_bg_hover', 
		'priority' => 40 
    ))); 
	
	$wp_customize->add_setting( 'luna_plugin_team_divider', array(
        'default'     => '#404040',
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_team_divider', array(
        'label'	   => esc_html__( 'Team Member Divider', 'luna' ), 
        'section'  => 'luna_plugin_team_colors',
        'settings' => 'luna_plugin_team_divider',  
		'priority' => 50 
    ))); 
	
	
	//Testimonials Plugins 
	$wp_customize->add_section( 'luna_plugin_testimonial_colors' , array(  
	    'title'       => esc_html__( 'Testimonials', 'luna' ), 
	    'priority'    => 40, 
	    'description' => esc_html__( 'If you have installed the Testimonials plugin from our ModernThemes content plugins, use this section to edit theme-specific colors. Our plugins are styled different from theme to theme, so you can use this area to customize the content to match your theme.', 'luna'), 
		'panel' => 'luna_plugin_panel', 
	));
	
	$wp_customize->add_setting( 'luna_plugin_testimonial_bg', array( 
        'default'     => '#ffffff',  
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_testimonial_bg', array(
        'label'	   => esc_html__( 'Content Background', 'luna' ), 
        'section'  => 'luna_plugin_testimonial_colors',
        'settings' => 'luna_plugin_testimonial_bg', 
		'priority' => 10 
    ))); 
	
	$wp_customize->add_setting( 'luna_plugin_testimonial_text_color', array( 
        'default'     => '#404040',
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_testimonial_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'luna' ), 
        'section'  => 'luna_plugin_testimonial_colors',
        'settings' => 'luna_plugin_testimonial_text_color', 
		'priority' => 20 
    )));
	
	//Font Style
	$wp_customize->add_setting( 'luna_plugin_testimonial_font_style', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'luna_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'luna_plugin_testimonial_font_style', array(
		'label'    => esc_html__( 'Font Style', 'luna' ),
		'section'  => 'luna_plugin_testimonial_colors',
		'settings' => 'luna_plugin_testimonial_font_style',
		'type'     => 'radio',
		'priority'   => 30, 
		'choices'  => array(
			'option1' => 'Italic',
			'option2' => 'Normal',
			),
	)));
	
	//Skills Plugins 
	$wp_customize->add_section( 'luna_plugin_skills_colors' , array(  
	    'title'       => esc_html__( 'Skill Bars', 'luna' ), 
	    'priority'    => 50, 
	    'description' => esc_html__( 'If you have installed the Skill Bars plugin from our ModernThemes content plugins, use this section to edit theme-specific colors. Our plugins are styled different from theme to theme, so you can use this area to customize the content to match your theme.', 'luna'), 
		'panel' => 'luna_plugin_panel', 
	));
	
	$wp_customize->add_setting( 'luna_plugin_skill_color', array( 
        'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_skill_color', array(
        'label'	   => esc_html__( 'Skill Bar Color', 'luna' ), 
        'section'  => 'luna_plugin_skills_colors', 
        'settings' => 'luna_plugin_skill_color', 
		'priority' => 20
    )));
	
	$wp_customize->add_setting( 'luna_plugin_skill_bg_color', array( 
        'default'     => '#dddddd', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_skill_bg_color', array(
        'label'	   => esc_html__( 'Skill Bar Background', 'luna' ), 
        'section'  => 'luna_plugin_skills_colors', 
        'settings' => 'luna_plugin_skill_bg_color', 
		'priority' => 20 
    ))); 
	
	//Details Plugins 
	$wp_customize->add_section( 'luna_plugin_detail_colors' , array(  
	    'title'       => esc_html__( 'Details', 'luna' ), 
	    'priority'    => 60, 
	    'description' => esc_html__( 'If you have installed the Details Odometer plugin from our ModernThemes content plugins, use this section to edit theme-specific colors. Our plugins are styled different from theme to theme, so you can use this area to customize the content to match your theme.', 'luna'), 
		'panel' => 'luna_plugin_panel', 
	));
	
	$wp_customize->add_setting( 'luna_plugin_detail_icon_color', array( 
        'default'     => '#404040',
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_detail_icon_color', array(
        'label'	   => esc_html__( 'Icon Color', 'luna' ), 
        'section'  => 'luna_plugin_detail_colors', 
        'settings' => 'luna_plugin_detail_icon_color', 
		'priority' => 10 
    )));
	
	
	$wp_customize->add_setting( 'luna_plugin_detail_text_color', array( 
        'default'     => '#404040', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_detail_text_color', array(
        'label'	   => esc_html__( 'Number Color', 'luna' ),
        'section'  => 'luna_plugin_detail_colors', 
        'settings' => 'luna_plugin_detail_text_color', 
		'priority' => 30 
    ))); 
	
	
	//Columns Plugins
	$wp_customize->add_section( 'luna_plugin_columns_colors' , array(  
	    'title'       => esc_html__( 'Home Page Columns', 'luna' ), 
	    'priority'    => 70, 
	    'description' => esc_html__( 'If you have installed the Home Page Columns plugin from our ModernThemes content plugins, use this section to edit theme-specific colors. Our plugins are styled different from theme to theme, so you can use this area to customize the content to match your theme.', 'luna'), 
		'panel' => 'luna_plugin_panel', 
	));
	
	$wp_customize->add_setting( 'luna_plugin_columns_icon_color', array( 
        'default'     => '#404040',
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_columns_icon_color', array(
        'label'	   => esc_html__( 'Icon Color', 'luna' ), 
        'section'  => 'luna_plugin_columns_colors', 
        'settings' => 'luna_plugin_columns_icon_color', 
		'priority' => 10 
    )));
	
	
	//News Plugins 
	$wp_customize->add_section( 'luna_plugin_news_colors' , array(  
	    'title'       => esc_html__( 'Home Posts', 'luna' ), 
	    'priority'    => 80, 
	    'description' => esc_html__( 'Edit your MT - Home Posts options', 'luna'), 
		'panel' => 'luna_plugin_panel', 
	));
	
	//News title
	$wp_customize->add_setting( 'luna_plugin_news_title', array( 
        'default'     => '#666666',  
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_news_title', array(
        'label'	   => esc_html__( 'News Link', 'luna' ), 
        'section'  => 'luna_plugin_news_colors',
        'settings' => 'luna_plugin_news_title',
		'priority' => 60  
    )));
	
	//News Title Hover
	$wp_customize->add_setting( 'luna_plugin_news_title_hover', array( 
        'default'     => '#666666',  
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_news_title_hover', array(
        'label'	   => esc_html__( 'News Link Hover', 'luna' ), 
        'section'  => 'luna_plugin_news_colors',
        'settings' => 'luna_plugin_news_title_hover', 
		'priority' => 65
    )));
	
	//News Text
	$wp_customize->add_setting( 'luna_plugin_news_text', array( 
        'default'     => '#404040',  
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_news_text', array(
        'label'	   => esc_html__( 'News Text', 'luna' ),
        'section'  => 'luna_plugin_news_colors',
        'settings' => 'luna_plugin_news_text',
		'priority' => 70
    )));
	
	//Button Text
	$wp_customize->add_setting( 'luna_plugin_news_button_text_color', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_news_button_text_color', array(
        'label'	   => esc_html__( 'Button Text Color', 'luna' ),
        'section'  => 'luna_plugin_news_colors',
        'settings' => 'luna_plugin_news_button_text_color',
		'priority' => 80
    )));
	
	//Button Border
	$wp_customize->add_setting( 'luna_plugin_news_button_border_color', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_news_button_border_color', array(
        'label'	   => esc_html__( 'Button Border Color', 'luna' ),
        'section'  => 'luna_plugin_news_colors',
        'settings' => 'luna_plugin_news_button_border_color',
		'priority' => 90
    )));
	
	//Button Hover
	$wp_customize->add_setting( 'luna_plugin_news_button_hover_color', array(
        'default'     => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_news_button_hover_color', array(
        'label'	   => esc_html__( 'Button Hover Color', 'luna' ),
        'section'  => 'luna_plugin_news_colors',
        'settings' => 'luna_plugin_news_button_hover_color', 
		'priority' => 100
    )));
	
	//Button Text Hover
	$wp_customize->add_setting( 'luna_plugin_news_button_text_hover_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luna_plugin_news_button_text_hover_color', array(
        'label'	   => esc_html__( 'Button Text Hover Color', 'luna' ),
        'section'  => 'luna_plugin_news_colors',
        'settings' => 'luna_plugin_news_button_text_hover_color',
		'priority' => 110 
    )));
	
	//Font Style
	$wp_customize->add_setting( 'luna_plugin_news_text_style', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'luna_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'luna_plugin_news_text_style', array(
		'label'    => esc_html__( 'Text Align', 'luna' ),
		'section'  => 'luna_plugin_news_colors',
		'settings' => 'luna_plugin_news_text_style',
		'type'     => 'radio', 
		'priority'   => 120, 
		'choices'  => array(
			'option1' => 'Left',
			'option2' => 'Center',
			),
	))); 
	
	
	
}
add_action( 'customize_register', 'luna_customize_register' ); 

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function luna_customize_preview_js() {
	wp_enqueue_script( 'luna_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'luna_customize_preview_js' );
