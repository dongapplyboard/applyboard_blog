<?php


function luna_admin_page_styles() {
    wp_enqueue_style( 'luna-font-awesome-admin', get_template_directory_uri() . '/fonts/font-awesome.css' ); 
	wp_enqueue_style( 'luna-style-admin', get_template_directory_uri() . '/panel/css/theme-admin-style.css' ); 
}
add_action( 'admin_enqueue_scripts', 'luna_admin_page_styles' );

     
    add_action('admin_menu', 'luna_setup_menu');
     
    function luna_setup_menu(){ 
    	add_theme_page( esc_html__('Luna Theme Details', 'luna' ), esc_html__('Luna Theme Details', 'luna' ), 'edit_theme_options', 'luna-setup', 'luna_init' ); 
    }  
     
 	function luna_init(){ 
	 	echo '<div class="grid grid-pad"><div class="col-1-1"><h1 style="text-align: center;">';  
		printf(esc_html__('Thank you for using Luna!', 'luna' )); 
        echo "</h1></div></div>";
			
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 40px; margin-bottom: 30px;" ><div class="col-1-3"><h2>'; 
		printf(esc_html__('Premium Plugins', 'luna' )); 
        echo '</h2>';
		
		echo '<p>';
		printf(esc_html__('Want to add more functionality to your theme? Use ModernThemes Premium Plugins to add content to your widget areas and pages.', 'luna' )); 
		echo '</p>';
		
		echo '<a href="https://modernthemes.net/plugins/" target="_blank"><button>'; 
		printf(esc_html__('Get Plugins', 'luna' ));  
		echo "</button></a></div>";
		
		echo '<div class="col-1-3"><h2>'; 
		printf(esc_html__('Documentation', 'luna' ));
        echo '</h2>';  
		
		echo '<p>';
		printf(esc_html__('Check out our Luna Documentation to learn how to use luna and for tutorials on theme functions. ', 'luna' ));  
		echo '</p>'; 
		
		echo '<a href="https://modernthemes.net/luna-documentation/" target="_blank"><button>'; 
		printf(esc_html__('Read Docs', 'luna' )); 
		echo "</button></a></div>";
		
		echo '<div class="col-1-3"><h2>'; 
		printf(esc_html__('ModernThemes', 'luna' )); 
        echo '</h2>';  
		
		echo '<p>';
		printf(esc_html__('Need some more themes? We have a large selection of both free and premium themes to add to your collection.', 'luna' ));
		echo '</p>';
		
		echo '<a href="https://modernthemes.net/" target="_blank"><button>'; 
		printf(esc_html__('Visit Us', 'luna' ));
		echo '</button></a></div></div>'; 
		
		echo '<div class="grid grid-pad senswp"><div class="col-1-1"><h1 style="padding-bottom: 30px; text-align: center;">';
		printf( esc_html__('Get the Premium Experience.', 'luna' )); 
		echo '</h1></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-cogs"></i><h4>'; 
		printf( esc_html__('Plugin Compatibility', 'luna' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Use our new free plugins with this theme to add functionality for things like projects, clients, team members and more. Compatible with all premium themes!', 'luna' ));
		echo '</p></div>';
		
		echo '<div class="col-1-4"><i class="fa fa-home"></i><h4>';
        printf( esc_html__('More Home Sections', 'luna' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Add more plugin content to your home page with Luna Premium as we offer 4 additional home widget areas to work with. More sections for more portfolio content.', 'luna' ));
		echo '</p></div>'; 
		
         echo '<div class="col-1-4"><i class="fa fa-shopping-cart"></i><h4>';
		printf( esc_html__( 'WooCommerce', 'luna' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Turn your website into a powerful eCommerce machine. Luna Premium is fully compatible with WooCommerce.', 'luna' ));
		echo '</p></div>';
		
		echo '<div class="col-1-4"><i class="fa fa-th"></i><h4>'; 
        printf( esc_html__('Footer Widget Areas', 'luna' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Want more content for your footer? Luna Premium has footer widget areas to populate with any content you want.', 'luna' ));
		echo '</p></div>';
		
            
        echo '<div class="grid grid-pad senswp"><div class="col-1-4"><i class="fa fa-th-list"></i><h4>';
		printf( esc_html__( 'More Sidebars', 'luna' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Sometimes you need different sidebars for different pages. We got you covered, offering up to 5 different sidebars.', 'luna' ));
		echo '</p></div>';
		
       	echo '<div class="col-1-4"><i class="fa fa-font"></i><h4>More Google Fonts</h4><p>';
		printf( esc_html__( 'Access an additional 65 Google fonts with Luna Premium right in the WordPress customizer.', 'luna' ));
		echo '</p></div>'; 
		
       echo '<div class="col-1-4"><i class="fa fa-file-image-o"></i><h4>'; 
		printf( esc_html__( 'PSD Files', 'luna' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Premium versions include PSD files. Preview your own content or showcase a customized version for your clients.', 'luna' ));
		echo '</p></div>';
            
        echo '<div class="col-1-4"><i class="fa fa-support"></i><h4>';
		printf( esc_html__( 'Free Support', 'luna' )); 
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Call on us to help you out. Premium themes come with free support that goes directly to our support staff.', 'luna' ));
		echo '</p></div></div>';
		
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px;"><div class="col-1-1"><a href="https://modernthemes.net/wordpress-themes/luna/luna-premium/" target="_blank"><button class="pro">'; 
		printf( esc_html__( 'View Premium Version', 'luna' )); 
		echo '</button></a></div></div>';
		
		
		echo '<div class="grid grid-pad senswp"><div class="col-1-1"><h1 style="padding-bottom: 30px; text-align: center;">';
		printf( esc_html__('Premium Membership. Premium Experience.', 'luna' )); 
		echo '</h1></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-cogs"></i><h4>'; 
		printf( esc_html__('Plugin Compatibility', 'luna' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Use our new free plugins with this theme to add functionality for things like projects, clients, team members and more. Compatible with all premium themes!', 'luna' ));
		echo '</p></div>';
		
		echo '<div class="col-1-4"><i class="fa fa-desktop"></i><h4>'; 
        printf( esc_html__('Agency Designed Themes', 'luna' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Look as good as can be with our new premium themes. Each one is agency designed with modern styles and professional layouts.', 'luna' ));
		echo '</p></div>'; 
		
        echo '<div class="col-1-4"><i class="fa fa-users"></i><h4>';
        printf( esc_html__('Membership Options', 'luna' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('We have options to fit every budget. Choose between a single theme, or access to all current and future themes for a year, or forever!', 'luna' ));
		echo '</p></div>'; 
		
		echo '<div class="col-1-4"><i class="fa fa-calendar"></i><h4>'; 
		printf( esc_html__( 'Access to New Themes', 'luna' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'New themes added monthly! When you purchase a premium membership you get access to all premium themes, with new themes added monthly.', 'luna' ));   
		echo '</p></div>';
		
		
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px;"><div class="col-1-1"><a href="https://modernthemes.net/premium-wordpress-themes/" target="_blank"><button class="pro">'; 
		printf( esc_html__( 'Get Premium Membership', 'luna' ));
		echo '</button></a></div></div>';
		
		
		echo '<div class="grid grid-pad"><div class="col-1-1"><h2 style="text-align: center;">';
		printf( esc_html__( 'Changelog' , 'luna' ) );
        echo "</h2>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.10 - minor updates to links and a readme.txt file added.', 'luna' )); 
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.9 - minor html bug fixes', 'luna' ));  
		echo '</p>';  
		
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.0 - New Theme!', 'luna' )); 
		echo '</p></div></div>'; 
		
    }
?>