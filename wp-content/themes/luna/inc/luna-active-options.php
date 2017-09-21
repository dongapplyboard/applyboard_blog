<?php	

/**
 * check to see if MT Services is active
 */
add_action( 'after_setup_theme', 'luna_network_services_support' );
    function luna_network_services_support() {
		
		// Check if plugin is active
		if ( class_exists( 'MT_Services_Widgets' ) ) {
    		add_theme_support('mt_services');
		} 
			
    } 
	

/**
 * check to see if MT Projects is active
 */
add_action( 'after_setup_theme', 'luna_projects_support' );
    function luna_projects_support() {
		
		// Check if plugin is active
		if ( class_exists( 'MT_Projects_Widgets' ) ) {
    		add_theme_support('mt_projects');  
		} 
		
	}
	
	
/**
 * check to see if MT Skills is active
 */
add_action( 'after_setup_theme', 'luna_skills_support' );
    function luna_skills_support() {
	
		// Check if plugin is active
		if ( class_exists( 'MT_Skills_Widgets' ) ) {
    		add_theme_support('mt_skills'); 
		} 
		 	
    }
	
	
/**
 * check to see if MT Testimonials is active
 */
add_action( 'after_setup_theme', 'luna_testimonials_support' );
    function luna_testimonials_support() {
		
		// Check if plugin is active
		if ( class_exists( 'MT_Testimonials_Widgets' ) ) {
    		add_theme_support('mt_testimonials'); 
		} 
			
    }
	
	
/**
 * check to see if MT Team Members is active
 */
add_action( 'after_setup_theme', 'luna_members_support' );
    function luna_members_support() {
		
		// Check if plugin is active
		if ( class_exists( 'MT_Members_Widgets' ) ) {
    		add_theme_support('mt_members');
		}    
			
    } 
	
	
/**
 * check to see if MT Details is active
 */
add_action( 'after_setup_theme', 'luna_details_support' );
    function luna_details_support() {
		
		// Check if plugin is active
		if ( class_exists( 'MT_Details_Widgets' ) ) {
    		add_theme_support('mt_details'); 
		} 
 	
    }
	
/**
 * check to see if MT Columns is active
 */
add_action( 'after_setup_theme', 'luna_columns_support' );
    function luna_columns_support() {
		
		// Check if plugin is active
		if ( class_exists( 'MT_Columns_Widgets' ) ) {
    		add_theme_support('mt_columns');    
		} 
 		
    }  


/**
 * check to see if Home News is active 
 */
function luna_news_support() {
	
    if( is_active_widget( '', '', 'luna_home_news') ) { 
		
        add_theme_support('mt_news');
  
	}
	
}
add_action('after_setup_theme', 'luna_news_support'); 

 