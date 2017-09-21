<?php
/**
 * The template for displaying search results pages.
 *
 * @package luna
 */

get_header(); ?>

<section id="page-content-container" class="blog-post-archive">
        
	<header class="page-entry-header">
    	<div class="grid grid-pad">
        	<div class="col-1-1">
				<h1 class="entry-title">
					<?php printf( esc_html__( 'Search Results for: %s', 'luna' ), '<span>' . get_search_query() . '</span>' ); ?>
                </h1>
            </div>
        </div>
        <div class="entry-overlay"></div>
	</header><!-- .entry-header -->

<div class="entry-content-wrapper search-wrapper">       
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
</section>
<?php get_footer(); ?>
