<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package luna
 */

get_header(); ?>

<section id="page-content-container" class="blog-post-archive">
        
	<header class="page-entry-header">
    	<div class="grid grid-pad">
        	<div class="col-1-1">
				<h1 class="entry-title">
					<?php echo esc_html( get_theme_mod( 'luna_blog_title', esc_html__( 'The Blog', 'luna' ) )) ?>
                </h1> 
            </div>
        </div>
        <div class="entry-overlay"></div> 
	</header><!-- .entry-header -->
    
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


</section>
<?php get_footer(); ?>
