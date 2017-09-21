<?php
/**
Template Name: Home Page
 *
 * @package luna
 */

get_header(); ?>


	<?php if ( get_theme_mod( 'luna_home_bg_image' ) ) : ?>
		<section id="home-hero" style="background-image: url('<?php echo esc_url( get_theme_mod( 'luna_home_bg_image' )); ?>');"> 
    <?php else: ?>
    	<section id="home-hero">
    <?php endif; ?>
	
    		<div class="grid grid-pad">
    			<div class="col-1-1">
        	
            		<?php if ( get_theme_mod( 'luna_home_title' ) ) : ?>
        				<h1><?php echo wp_kses_post( get_theme_mod( 'luna_home_title' )); ?></h1>
            		<?php endif; ?>
                    
            		<?php if ( get_theme_mod( 'luna_home_text' ) ) : ?>
        				<p><?php echo wp_kses_post( get_theme_mod( 'luna_home_text' )); ?></p> 
            		<?php endif; ?>
            		
                    <?php if ( get_theme_mod( 'luna_home_button_url' ) ) : ?>
             			<a href="<?php echo esc_url( get_page_link( get_theme_mod('luna_home_button_url'))) ?>" class="featured-link"> 
            		<?php endif; ?>
            
            		<?php if ( get_theme_mod( 'luna_home_button_text' ) ) : ?> 
                		<button>
                        	<?php echo esc_html( get_theme_mod( 'luna_home_button_text' )); ?> 
                    	</button>
                	<?php endif; ?>
                
            		<?php if ( get_theme_mod( 'luna_home_button_url' ) ) : ?>
            			</a> 
            		<?php endif; ?> 
                    
        	
            	</div>
    		</div>
    
	<?php if ( get_theme_mod( 'luna_home_bg_image' ) ) : ?>
		</section>
    <?php else: ?>
    	</section>
    <?php endif; ?>



	<section id="home-works">
		
        <div class="grid grid-pad">
    		<div class="col-1-1">
            	<?php if ( get_theme_mod( 'luna_home_projects_text' ) ) : ?>
        			<h3><?php echo wp_kses_post( get_theme_mod( 'luna_home_projects_text', esc_html__( 'Recently Added', 'luna' ) )); ?></h3>
            	<?php endif; ?>
        	</div>
    	</div>
        
	<div class="grid grid-pad">
    
     <?php $home_projects_number = esc_attr( get_theme_mod( 'luna_home_projects_number', '8' )) ?>
    
     <?php 
	 
		// the query
		$the_query = new WP_Query( 'post_type=project', 'posts_per_page='. $home_projects_number ); ?>
		
		<?php if ( $the_query->have_posts() ) : ?> 
		
				<!-- pagination here -->
		
				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
            		<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'luna-home-project' ); 
				  		  $image = $image[0]; ?>
					<?php endif; ?>
            
            		<div class="col-1-4 mt-column-clear">
                		<div class="single-work">
                    		<a href="<?php the_permalink(); ?>"><div class="work-preview" style="background-image: url('<?php echo esc_url( $image );  ?>');"></div></a>
                    		
                            <span>
                    		<h6><?php the_category(', ') ?></h6>
                    		<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    		<a href="<?php the_permalink(); ?>"><i class="fa fa-long-arrow-right"></i></a>
                    		</span>
                            
                		</div>
            		</div>
				
					<?php endwhile; ?>
					<!-- end of the loop -->
		
					<!-- pagination here --> 
		
					<?php wp_reset_postdata(); ?>
		
				<?php else : ?>
					<p><?php esc_html__( 'Sorry, no Projects have been added yet!', 'luna' ); ?></p>
				<?php endif; ?>
        
    		</div>
		</section>
            
            
        <?php if ( get_theme_mod( 'active_default_home_widget' ) == '' ) : ?> 
        	<?php if ( is_active_sidebar('default-home-widget-area') ) : ?>
        
        		<div class="home-widget home-widget-default shortcodes">
                	<div class="grid grid-pad">
                		<div class="col-1-1"> 
                
                    		<?php dynamic_sidebar('default-home-widget-area'); ?>
                            
                        </div><!-- .col -->
                    </div><!-- .grid -->
                </div><!-- .home-widget -->
                
            <?php endif; ?>
        <?php endif; ?>


<?php get_footer(); ?>
