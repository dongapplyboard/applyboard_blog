<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package luna
 */

get_header(); ?>

<section id="page-content-container">
        
	<header class="page-entry-header">
    	<div class="grid grid-pad">
        	<div class="col-1-1">
				<h1 class="entry-title"><?php esc_html_e( '404 error.', 'luna' ); ?></h1>
            </div>
        </div>
        <div class="entry-overlay"></div>
	</header><!-- .entry-header -->
 
<div class="entry-content-wrapper"> 
	<div class="grid grid-pad page-full-contain">
    	<div class="col-1-1">   
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
        
                    <div class="error-404 not-found">
                        <header class="page-header">
                            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'luna' ); ?></h1>
                        </header><!-- .page-header -->
        
                        <div class="page-content">
                            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'luna' ); ?></p>
        
                            <?php get_search_form(); ?>
        
                        </div><!-- .page-content -->
                    </div><!-- .error-404 -->
        
                </main><!-- #main -->
            </div><!-- #primary -->
		</div>
	</div>
</div>
</section>
<?php get_footer(); ?>
