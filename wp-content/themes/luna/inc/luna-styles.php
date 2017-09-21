<?php
/**
 * luna Theme Customizer
 *
 * @package luna
 */


/**
 * Add CSS in <head> for styles handled by the theme customizer 
 *
 * @since 1.5
 */
function luna_add_customizer_css() {
	
?>
	<!-- luna customizer CSS --> 
	<style> 
		
		<?php if ( get_theme_mod( 'luna_nav_bg_color' ) ) : ?>
		.cbp-spmenu { background: <?php echo esc_attr( get_theme_mod( 'luna_nav_bg_color', '#222222' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_nav_link_color' ) ) : ?>
		.cbp-spmenu a { color: <?php echo esc_attr( get_theme_mod( 'luna_nav_link_color', '#ffffff' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_menu_button' ) ) : ?>
		.navigation-container .toggle-menu { border-color: <?php echo esc_attr( get_theme_mod( 'luna_menu_button', '#404040' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_menu_button_hover' ) ) : ?>
		.navigation-container .toggle-menu:hover { background-color: <?php echo esc_attr( get_theme_mod( 'luna_menu_button_hover', '#000000' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_menu_button_hover' ) ) : ?>
		.navigation-container .toggle-menu:hover { border-color: <?php echo esc_attr( get_theme_mod( 'luna_menu_button_hover', '#000000' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_menu_icon' ) ) : ?>
		.navigation-container .toggle-menu .fa { color: <?php echo esc_attr( get_theme_mod( 'luna_menu_icon', '#404040' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_menu_icon_hover' ) ) : ?>
		.navigation-container button.toggle-menu:hover .fa { color: <?php echo esc_attr( get_theme_mod( 'luna_menu_icon_hover', '#ffffff' )) ?>; }
		<?php endif; ?>  
		
		<?php if ( get_theme_mod( 'luna_nav_link_hover_color' ) ) : ?>
		.cbp-spmenu a:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_nav_link_hover_color', '#999999' )) ?>; }  
		<?php endif; ?>
		
		
		<?php if ( get_theme_mod( 'luna_hero_bg_color' ) ) : ?>
		#home-hero { background-color: <?php echo esc_attr( get_theme_mod( 'luna_hero_bg_color', '#ffffff' )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hero_heading_color' ) ) : ?>
		#home-hero h1 { color: <?php echo esc_attr( get_theme_mod( 'luna_hero_heading_color', '#404040' )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hero_p_color' ) ) : ?>
		#home-hero p { color: <?php echo esc_attr( get_theme_mod( 'luna_hero_p_color', '#404040' )) ?>; }  
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_button_text_color' ) ) : ?>
		#home-hero button, #home-hero input[type="button"], #home-hero input[type="reset"], #home-hero input[type="submit"] { color: <?php echo esc_attr( get_theme_mod( 'luna_button_text_color', '#404040' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_button_border_color' ) ) : ?>
		#home-hero button, #home-hero input[type="button"], #home-hero input[type="reset"], #home-hero input[type="submit"] { border-color: <?php echo esc_attr( get_theme_mod( 'luna_button_border_color', '#404040' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_button_hover_color' ) ) : ?>
		#home-hero button:hover, #home-hero input[type="button"]:hover, #home-hero input[type="reset"]:hover, #home-hero input[type="submit"]:hover { background-color: <?php echo esc_attr( get_theme_mod( 'luna_button_hover_color', '#000000' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_button_hover_color' ) ) : ?>
		#home-hero button:hover, #home-hero input[type="button"]:hover, #home-hero input[type="reset"]:hover, #home-hero input[type="submit"]:hover { border-color: <?php echo esc_attr( get_theme_mod( 'luna_button_hover_color', '#000000' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_button_text_hover_color' ) ) : ?>
		#home-hero button:hover, #home-hero input[type="button"]:hover, #home-hero input[type="reset"]:hover, #home-hero input[type="submit"]:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_button_text_hover_color', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_home_default_widget_bg_1' ) ) : ?>
		#home-works { background: <?php echo esc_attr( get_theme_mod( 'luna_home_default_widget_bg_1', '#f1f1f1' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_home_default_single_work_bg' ) ) : ?>
		#home-works .single-work { background: <?php echo esc_attr( get_theme_mod( 'luna_home_default_single_work_bg', '#ffffff' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_home_default_single_work_text' ) ) : ?>
		#home-works .single-work a, .single-work span h5 a, .single-work span h6, .single-work span h5 { color: <?php echo esc_attr( get_theme_mod( 'luna_home_default_single_work_text', '#666666' )) ?>; } 
		<?php endif; ?>  
		
		<?php if ( get_theme_mod( 'luna_home_default_single_work_text_hover' ) ) : ?>
		#home-works .single-work a:hover, .single-work span h5 a:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_home_default_single_work_text_hover', '#666666' )) ?>; }
		<?php endif; ?>  
		
		
		<?php if ( get_theme_mod( 'luna_default_news_bg' ) ) : ?>
		.home-widget-default { background-color: <?php echo esc_attr( get_theme_mod( 'luna_default_news_bg', '#ffffff' )) ?>; }
		<?php endif; ?>
		
		
		
		<?php if ( get_theme_mod( 'luna_hw_area_1_bg_color' ) ) : ?>
		.home-widget-one { background: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_1_bg_color', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_1_heading_color' ) ) : ?>
		.home-widget-one h1, .home-widget-one h2, .home-widget-one h3, .home-widget-one h4, .home-widget-one h5, .home-widget-one h6 { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_1_heading_color', '#404040' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_1_text_color' ) ) : ?>
		.home-widget-one, .home-widget-one p { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_1_text_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_1_link_color' ) ) : ?>
		.home-widget-one a { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_1_link_color', '#666666' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_1_link_hover_color' ) ) : ?>
		.home-widget-one a:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_1_link_hover_color', '#000000' )) ?>; } 
		<?php endif; ?>
		
		
		<?php if ( get_theme_mod( 'luna_hw_area_1_button_text_color' ) ) : ?>
		.home-widget-one button, .home-widget-one input[type="button"], .home-widget-one input[type="reset"], .home-widget-one input[type="submit"] { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_1_button_text_color', '#404040' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_hw_area_1_button_border_color' ) ) : ?>
		.home-widget-one button, .home-widget-one input[type="button"], .home-widget-one input[type="reset"], .home-widget-one input[type="submit"] { border-color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_1_button_border_color', '#404040' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_hw_area_1_button_hover_color' ) ) : ?>
		.home-widget-one button:hover, .home-widget-one input[type="button"]:hover, .home-widget-one input[type="reset"]:hover, .home-widget-one input[type="submit"]:hover { background-color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_1_button_hover_color', '#000000' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_hw_area_1_button_hover_color' ) ) : ?>
		.home-widget-one button:hover, .home-widget-one input[type="button"]:hover, .home-widget-one input[type="reset"]:hover, .home-widget-one input[type="submit"]:hover { border-color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_1_button_hover_color', '#000000' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_1_button_text_hover_color' ) ) : ?>
		.home-widget-one button:hover, .home-widget-one input[type="button"]:hover, .home-widget-one input[type="reset"]:hover, .home-widget-one input[type="submit"]:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_1_button_text_hover_color', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		
		<?php if ( get_theme_mod( 'luna_hw_area_2_bg_color' ) ) : ?>
		.home-widget-two { background: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_2_bg_color', '#ffffff' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_2_heading_color' ) ) : ?>
		.home-widget-two h1, .home-widget-two h2, .home-widget-two h3, .home-widget-two h4, .home-widget-two h5, .home-widget-two h6 { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_2_heading_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_2_text_color' ) ) : ?>
		.home-widget-two, .home-widget-two p { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_2_text_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_2_link_color' ) ) : ?>
		.home-widget-two a { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_2_link_color', '#666666' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_hw_area_2_link_hover_color' ) ) : ?>
		.home-widget-two a:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_2_link_hover_color', '#000000' )) ?>; } 
		<?php endif; ?>
		
		
		<?php if ( get_theme_mod( 'luna_hw_area_2_button_text_color' ) ) : ?>
		.home-widget-two button, .home-widget-two input[type="button"], .home-widget-two input[type="reset"], .home-widget-two input[type="submit"] { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_2_button_text_color', '#404040' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_hw_area_2_button_border_color' ) ) : ?>
		.home-widget-two button, .home-widget-two input[type="button"], .home-widget-two input[type="reset"], .home-widget-two input[type="submit"] { border-color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_2_button_border_color', '#404040' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_hw_area_2_button_hover_color' ) ) : ?>
		.home-widget-two button:hover, .home-widget-two input[type="button"]:hover, .home-widget-two input[type="reset"]:hover, .home-widget-two input[type="submit"]:hover { background-color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_2_button_hover_color', '#000000' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_hw_area_2_button_hover_color' ) ) : ?>
		.home-widget-two button:hover, .home-widget-two input[type="button"]:hover, .home-widget-two input[type="reset"]:hover, .home-widget-two input[type="submit"]:hover { border-color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_2_button_hover_color', '#000000' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_2_button_text_hover_color' ) ) : ?>
		.home-widget-two button:hover, .home-widget-two input[type="button"]:hover, .home-widget-two input[type="reset"]:hover, .home-widget-two input[type="submit"]:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_2_button_text_hover_color', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		
		
		<?php if ( get_theme_mod( 'luna_hw_area_3_bg_color' ) ) : ?>
		.home-widget-three { background: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_3_bg_color', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_3_heading_color' ) ) : ?>
		.home-widget-three h1, .home-widget-three h2, .home-widget-three h3, .home-widget-three h4, .home-widget-three h5, .home-widget-three h6 { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_3_heading_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_3_text_color' ) ) : ?>
		.home-widget-three, .home-widget-three p { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_3_text_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_3_link_color' ) ) : ?>
		.home-widget-three a { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_3_link_color', '#666666' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_hw_area_3_link_hover_color' ) ) : ?>
		.home-widget-three a:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_3_link_hover_color', '#000000' )) ?>; } 
		<?php endif; ?>
		
		
		<?php if ( get_theme_mod( 'luna_hw_area_3_button_text_color' ) ) : ?>
		.home-widget-three button, .home-widget-three input[type="button"], .home-widget-three input[type="reset"], .home-widget-three input[type="submit"] { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_3_button_text_color', '#404040' )) ?>; }  
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_hw_area_3_button_border_color' ) ) : ?>
		.home-widget-three button, .home-widget-three input[type="button"], .home-widget-three input[type="reset"], .home-widget-three input[type="submit"] { border-color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_3_button_border_color', '#404040' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_hw_area_3_button_hover_color' ) ) : ?>
		.home-widget-three button:hover, .home-widget-three input[type="button"]:hover, .home-widget-three input[type="reset"]:hover, .home-widget-three input[type="submit"]:hover { background-color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_3_button_hover_color', '#000000' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_hw_area_3_button_hover_color' ) ) : ?>
		.home-widget-three button:hover, .home-widget-three input[type="button"]:hover, .home-widget-three input[type="reset"]:hover, .home-widget-three input[type="submit"]:hover { border-color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_3_button_hover_color', '#000000' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_3_button_text_hover_color' ) ) : ?>
		.home-widget-three button:hover, .home-widget-three input[type="button"]:hover, .home-widget-three input[type="reset"]:hover, .home-widget-three input[type="submit"]:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_3_button_text_hover_color', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		
		
		<?php if ( get_theme_mod( 'luna_hw_area_4_bg_color' ) ) : ?>
		.home-widget-four { background: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_4_bg_color', '#ffffff' )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_4_heading_color' ) ) : ?>
		.home-widget-four h1, .home-widget-four h2, .home-widget-four h3, .home-widget-four h4, .home-widget-four h5, .home-widget-four h6 { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_4_heading_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_4_text_color' ) ) : ?>
		.home-widget-four, .home-widget-four p { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_4_text_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_4_link_color' ) ) : ?>
		.home-widget-four a { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_4_link_color', '#666666' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_4_link_hover_color' ) ) : ?>
		.home-widget-four a:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_4_link_hover_color', '#000000' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_4_button_text_color' ) ) : ?>
		.home-widget-four button, .home-widget-four input[type="button"], .home-widget-four input[type="reset"], .home-widget-four input[type="submit"] { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_4_button_text_color', '#404040' )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_4_button_border_color' ) ) : ?>
		.home-widget-four button, .home-widget-four input[type="button"], .home-widget-four input[type="reset"], .home-widget-four input[type="submit"] { border-color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_4_button_border_color', '#404040' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_hw_area_4_button_hover_color' ) ) : ?>
		.home-widget-four button:hover, .home-widget-four input[type="button"]:hover, .home-widget-four input[type="reset"]:hover, .home-widget-four input[type="submit"]:hover { background-color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_4_button_hover_color', '#000000' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_hw_area_4_button_hover_color' ) ) : ?>
		.home-widget-four button:hover, .home-widget-four input[type="button"]:hover, .home-widget-four input[type="reset"]:hover, .home-widget-four input[type="submit"]:hover { border-color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_4_button_hover_color', '#000000' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hw_area_4_button_text_hover_color' ) ) : ?>
		.home-widget-four button:hover, .home-widget-four input[type="button"]:hover, .home-widget-four input[type="reset"]:hover, .home-widget-four input[type="submit"]:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_hw_area_4_button_text_hover_color', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		
		
		<?php if ( get_theme_mod( 'luna_footer_color' ) ) : ?>
		.site-footer { background: <?php echo esc_attr( get_theme_mod( 'luna_footer_color', '#f1f1f1' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_footer_text_color' ) ) : ?>
		.site-footer, .site-footer p { color: <?php echo esc_attr( get_theme_mod( 'luna_footer_text_color', '#404040' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_footer_heading_color' ) ) : ?>
		.site-footer h1, .site-footer h2, .site-footer h3, .site-footer h4, .site-footer h5, .site-footer h6 { color: <?php echo esc_attr( get_theme_mod( 'luna_footer_heading_color', '#404040' )) ?>; } 
		<?php endif; ?>
		  
		<?php if ( get_theme_mod( 'luna_footer_link_color' ) ) : ?>
		.site-footer a { color: <?php echo esc_attr( get_theme_mod( 'luna_footer_link_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_footer_link_hover_color' ) ) : ?>
		.site-footer a:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_footer_link_hover_color', '#000000' )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_footer_byline_bg' ) ) : ?>
		.site-info { background-color: <?php echo esc_attr( get_theme_mod( 'luna_footer_byline_bg', '#ffffff' )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_footer_byline_text' ) ) : ?>
		.site-info { color: <?php echo esc_attr( get_theme_mod( 'luna_footer_byline_text', '#404040' )) ?>; }  
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_footer_byline_link' ) ) : ?>
		.site-info a { color: <?php echo esc_attr( get_theme_mod( 'luna_footer_byline_link', '#404040' )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_footer_byline_link_hover' ) ) : ?>
		.site-info a:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_footer_byline_link_hover', '#000000' )) ?>; }  
		<?php endif; ?> 
		
		
		<?php if ( get_theme_mod( 'luna_social_color' ) ) : ?>
		.social-media-icons li .fa { color: <?php echo esc_attr( get_theme_mod( 'luna_social_color', '#404040' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_social_color_hover' ) ) : ?>
		.social-media-icons li .fa:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_social_color_hover', '#000000' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_social_text_size' ) ) : ?>
		.social-media-icons li .fa { font-size: <?php echo esc_attr( get_theme_mod( 'luna_social_text_size', '16' )) ?>px; }
		<?php endif; ?>
		
		
		<?php if ( get_theme_mod( 'luna_text_color' ) ) : ?> 
		body, textarea, p { color: <?php echo esc_attr( get_theme_mod( 'luna_text_color', '#404040' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_link_color' ) ) : ?>
		a { color: <?php echo esc_attr( get_theme_mod( 'luna_link_color', '#666666' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_hover_color' ) ) : ?>
		a:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_hover_color', '#000000' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_entry' ) ) : ?>
		.entry-title { color: <?php echo esc_attr( get_theme_mod( 'luna_entry', '#404040' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_page_header' ) ) : ?> 
		.page-entry-header { background-color: <?php echo esc_attr( get_theme_mod( 'luna_page_header', '#ffffff' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_body_size' ) ) : ?>
		body, p { font-size: <?php echo esc_attr( get_theme_mod( 'luna_body_size', '18' )) ?>px; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_site_title_color' ) ) : ?>
		h1.site-title a { color: <?php echo esc_attr( get_theme_mod( 'luna_site_title_color', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_blockquote_border_color' ) ) : ?>
		blockquote { border-left: <?php echo esc_attr( get_theme_mod( 'luna_blockquote_border_color', '#cccccc' )) ?>; } 
		<?php endif; ?>  
		
		
		
		<?php if ( get_theme_mod( 'luna_page_button_color' ) ) : ?> 
		button, input[type="button"], input[type="reset"], input[type="submit"] { border-color: <?php echo esc_attr( get_theme_mod( 'luna_page_button_color', '#404040' )) ?>; }   
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_page_button_text_color' ) ) : ?> 
		button, input[type="button"], input[type="reset"], input[type="submit"] { color: <?php echo esc_attr( get_theme_mod( 'luna_page_button_text_color', '#404040' )) ?>; }   
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_page_button_color_hover' ) ) : ?>
		button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { background: <?php echo esc_attr( get_theme_mod( 'luna_page_button_color_hover', '#000000' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_page_button_color_hover' ) ) : ?>
		button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { border-color: <?php echo esc_attr( get_theme_mod( 'luna_page_button_color_hover', '#000000' )) ?>; }  
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_page_button_text_hover_color' ) ) : ?>
		button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_page_button_text_hover_color', '#ffffff' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_archive_border' ) ) : ?>
		.blog-post-archive article { border-color: <?php echo esc_attr( get_theme_mod( 'luna_archive_border', '#ededed' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_archive_hover' ) ) : ?> 
		.blog-post-archive article:hover { background: <?php echo esc_attr( get_theme_mod( 'luna_archive_hover', '#f9f9f9' )) ?>; } 
		<?php endif; ?>  
		
		<?php if ( get_theme_mod( 'luna_blog_archive_bg' ) ) : ?> 
		.blog-post-archive .page-entry-header { background-color: <?php echo esc_attr( get_theme_mod( 'luna_blog_archive_bg', '#ffffff' )) ?>; } 
		<?php endif; ?> 
		
		
		
		<?php if ( get_theme_mod( 'luna_plugin_service_page_icon_color' ) ) : ?>  
		 #mt-services .service-content .fa, .shortcodes .service-content .fa  { color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_service_page_icon_color', '#404040' )) ?>; }   
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_plugin_service_page_icon_bg_color' ) ) : ?> 
		 #mt-services .service-content .fa, .shortcodes .service-content .fa  { background-color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_service_page_icon_bg_color' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_plugin_service_page_icon_border_color' ) ) : ?>  
		 #mt-services .service-content .fa, .shortcodes .service-content .fa  { border-color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_service_page_icon_border_color', '#404040' )) ?>; }  
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_plugin_project_hover_color' ) ) : ?> 
		 .project-box { background-color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_project_hover_color', '#151515' )) ?>; }  
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_plugin_project_hover_text_color' ) ) : ?>
		.home-widget .project-box .project-content h3, .project-box .project-content h3 { color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_project_hover_text_color', '#ffffff' )) ?> !important; }   
		<?php endif; ?>
		
		
		<?php if ( get_theme_mod( 'luna_plugin_team_icon_hover' ) ) : ?> 
		 .shortcodes .member .fa:hover  { color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_team_icon_hover', '#ffffff' )) ?>; }   
		<?php endif; ?>  
		
		<?php if ( get_theme_mod( 'luna_plugin_team_icon_bg_hover' ) ) : ?> 
		 .shortcodes .member .fa:hover  { background-color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_team_icon_bg_hover', '#1f2023' )) ?>; }   
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_plugin_team_icon_bg_hover' ) ) : ?> 
		 .shortcodes .member .fa:hover  { border-color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_team_icon_bg_hover', '#1f2023' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_plugin_team_icon_border' ) ) : ?> 
		 .shortcodes .member .fa  { border-color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_team_icon_border', '#1f2023' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_plugin_team_icon' ) ) : ?> 
		 .shortcodes .member .fa  { color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_team_icon', '#1f2023' )) ?>; }  
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_plugin_team_divider' ) ) : ?>
		.shortcodes .member h3::after { border-color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_team_divider', '#404040' )) ?>; }  
		<?php endif; ?> 
		
		
		
		<?php if ( get_theme_mod( 'luna_plugin_testimonial_bg' ) ) : ?> 
		 #secondary > #mt-testimonials .testimonial p, .shortcodes .testimonial p  { background: <?php echo esc_attr( get_theme_mod( 'luna_plugin_testimonial_bg', '#ffffff' )) ?>; }   
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_plugin_testimonial_text_color' ) ) : ?> 
		 #secondary > #mt-testimonials .testimonial p, .shortcodes .testimonial p  { color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_testimonial_text_color', '#404040' )) ?>; }
		<?php endif; ?>
		
		<?php if ( 'option1' == luna_sanitize_index_content( get_theme_mod( 'luna_plugin_testimonial_font_style' ) ) ) : ?>
		#secondary > #mt-testimonials .testimonial p, .shortcodes .testimonial p  { font-style: italic; } 
		<?php else : ?>
		#secondary > #mt-testimonials .testimonial p, .shortcodes .testimonial p  { font-style: normal; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_plugin_skill_color' ) ) : ?> 
		.progressBar div { background-color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_skill_color', '#000000' )) ?>; }   
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_plugin_skill_bg_color' ) ) : ?> 
		.progressBar { background-color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_skill_bg_color', '#dddddd' )) ?>; }   
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_plugin_detail_icon_color' ) ) : ?> 
		#mt-details .fa { color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_detail_icon_color', '#404040' )) ?>; }   
		<?php endif; ?> 
		 
		
		<?php if ( get_theme_mod( 'luna_plugin_detail_text_color' ) ) : ?> 
		.odometer.odometer-auto-theme, .odometer.odometer-theme-default { color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_detail_text_color', '#404040' )) ?>; }   
		<?php endif; ?> 
		
		
		<?php if ( get_theme_mod( 'luna_plugin_columns_icon_color' ) ) : ?> 
		#mt-columns .fa { color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_columns_icon_color', '#404040' )) ?>; }   
		<?php endif; ?> 
		
		
		<?php if ( get_theme_mod( 'luna_plugin_news_title' ) ) : ?>
		.home-news-post a { color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_news_title', '#666666' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_plugin_news_title_hover' ) ) : ?>
		.home-news-post a:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_news_title_hover', '#666666' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_plugin_news_text' ) ) : ?> 
		.home-news-post, .home-news-post p { color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_news_text', '#404040' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_plugin_news_button_text_color' ) ) : ?>
		.home-news-post button, .home-news-post input[type="button"], .home-news-post input[type="reset"], .home-news-post input[type="submit"] { color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_news_button_text_color', '#404040' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_plugin_news_button_border_color' ) ) : ?>
		.home-news-post button, .home-news-post input[type="button"], .home-news-post input[type="reset"], .home-news-post input[type="submit"] { border-color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_news_button_border_color', '#404040' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_plugin_news_button_hover_color' ) ) : ?>
		.home-news-post button:hover, .home-news-post input[type="button"]:hover, .home-news-post input[type="reset"]:hover, .home-news-post input[type="submit"]:hover { background-color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_news_button_hover_color', '#000000' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'luna_plugin_news_button_hover_color' ) ) : ?>
		.home-news-post button:hover, .home-news-post input[type="button"]:hover, .home-news-post input[type="reset"]:hover, .home-news-post input[type="submit"]:hover { border-color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_news_button_hover_color', '#000000' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'luna_plugin_news_button_text_hover_color' ) ) : ?> 
		.home-news-post button:hover,.home-news-post input[type="button"]:hover, .home-news-post input[type="reset"]:hover, .home-news-post input[type="submit"]:hover { color: <?php echo esc_attr( get_theme_mod( 'luna_plugin_news_button_text_hover_color', '#ffffff' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( 'option1' == luna_sanitize_index_content( get_theme_mod( 'luna_plugin_news_text_style' ) ) ) : ?>
		.home-news-post { text-align: left; } 
		<?php else : ?> 
		.home-news-post { text-align: center; } 
		<?php endif; ?> 
		
		
	</style>
<?php }


add_action( 'wp_head', 'luna_add_customizer_css' );  

