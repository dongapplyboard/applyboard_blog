<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package luna
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"> 
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'luna' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			
             <?php if ( get_theme_mod( 'luna_logo' ) ) : ?>
              
    			<div class="site-logo site-title"> 
       				<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                    
                    <img src='<?php echo esc_url( get_theme_mod( 'luna_logo' ) ); ?>' <?php if ( get_theme_mod( 'logo_size' ) ) : ?>width="<?php echo esc_attr( get_theme_mod( 'logo_size', '150' )); ?>"<?php endif; ?> alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                    
                    </a> 
    			</div><!-- site-logo -->
                
			<?php else : ?>
            
    			<hgroup>
       				<h1 class='site-title'>
                    <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
						<?php bloginfo( 'name' ); ?>
                    </a>
                    </h1>
    			</hgroup>
                
			<?php endif; ?> 
            
		</div><!-- .site-branding -->

		<div class="navigation-container">
        	<button class="toggle-menu menu-right push-body">
            
            <?php $menu_toggle_option = get_theme_mod( 'luna_menu_toggle', 'icon' );

				$menu_display = '';

				if ( $menu_toggle_option == 'icon' ) {
				
					$menu_display = sprintf( '<i class="fa fa-bars"></i>' );
			
				} else if ( $menu_toggle_option == 'label' ) {
				
					$menu_display = esc_html__( 'Menu', 'luna' ); 
			
				} else if ( $menu_toggle_option == 'icon-label' ) {
				
					$menu_display = sprintf( '<i class="fa fa-bars"></i> Menu', 'luna' ); 
			
				}

			echo $menu_display; ?> 
            
          	</button>
        </div>
	</header><!-- #masthead -->
    
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    </nav>

	<div id="content" class="site-content">
