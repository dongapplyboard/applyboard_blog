<?php
/**
 * @package luna
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="grid grid-pad">
    	<div class="col-1-2">
            <header class="entry-header">
                <div class="archive-news-post">
                    <span>
                    
                    <h6><?php the_category(', ') ?></h6>
                    
                    <h4>
                    	<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
                        </a>
                    </h4>
                    
					<?php if ( 'option2' == luna_sanitize_index_content( get_theme_mod( 'luna_post_content' ) ) ) :
						the_content(); 
					else :
						the_excerpt();
					endif; ?> 
                    
                    <a href="<?php the_permalink(); ?>">
                    	<button>
							<?php echo esc_html( get_theme_mod( 'luna_blog_view_more', esc_html__( 'View More', 'luna' ) )) ?>
                        </button>
                    </a>
                    
                    </span>
                </div>
            </header><!-- .entry-header --> 
    	</div>
        
        <?php if (has_post_thumbnail( $post->ID ) ): ?> 
        
    	<div class="col-1-2"> 
        	<div class="archive-news-bg" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) , 'max-control' ); ?>');"></div> 
      	</div>
        
        <?php endif; ?>
        
 	</div>
</article><!-- #post-## -->