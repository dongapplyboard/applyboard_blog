<?php



class luna_home_news extends WP_Widget { 



// constructor

    function luna_home_news() {

		$widget_ops = array('classname' => 'luna_home_news_widget', 'description' => esc_html__( 'Show your blog posts on your home page.', 'luna') );

        parent::__construct(false, $name = esc_html__('MT - Home Posts', 'luna'), $widget_ops);

		$this->alt_option_name = 'luna_home_news_widget'; 

		

		add_action( 'save_post', array($this, 'flush_widget_cache') ); 

		add_action( 'deleted_post', array($this, 'flush_widget_cache') );

		add_action( 'switch_theme', array($this, 'flush_widget_cache') );		

    }

	

	// widget form creation

	function form($instance) {



	// Check values

		$title     		= isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		
		$read_more_text  = isset( $instance['read_more_text'] ) ? esc_html( $instance['read_more_text'] ) : esc_html__( 'View More', 'luna' );

		$category  		= isset( $instance['category'] ) ? esc_attr( $instance['category'] ) : ''; 

		$see_all_text  	= isset( $instance['see_all_text'] ) ? esc_html( $instance['see_all_text'] ) : ''; 											
	

	?>



	<p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'luna'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('title')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />

	</p>
    
    
    <p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('read_more_text')); ?>"><?php esc_html_e('View More Text', 'luna'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('read_more_text')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('read_more_text')); ?>" type="text" value="<?php echo esc_html( $read_more_text ); ?>" /> 

	</p>



	<p><label for="<?php echo sanitize_text_field( $this->get_field_id( 'category' )); ?>"><?php esc_html_e( 'Enter the slug for your category or leave empty to show posts from all categories.', 'luna' ); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id( 'category' )); ?>" name="<?php echo sanitize_text_field( $this->get_field_name( 'category' )); ?>" type="text" value="<?php echo esc_attr( $category ); ?>" size="3" /></p> 
   

    

	

	<?php

	}



	// update widget

	function update($new_instance, $old_instance) {

		$instance = $old_instance;

		$instance['title'] 			= esc_attr($new_instance['title']);
		
		$instance['read_more_text'] = esc_html($new_instance['read_more_text']);

		$instance['category'] 		= esc_attr($new_instance['category']);

										

		$this->flush_widget_cache();



		$alloptions = wp_cache_get( 'alloptions', 'options' );

		if ( isset($alloptions['luna_home_news']) )

			delete_option('luna_home_news');		  

		  

		return $instance;

	}

	

	function flush_widget_cache() {

		wp_cache_delete('luna_home_news', 'widget');

	}

	

	// display widget

	function widget($args, $instance) {

		$cache = array();

		if ( ! $this->is_preview() ) {

			$cache = wp_cache_get( 'luna_home_news', 'widget' );

		}



		if ( ! is_array( $cache ) ) {

			$cache = array();

		}



		if ( ! isset( $args['widget_id'] ) ) {

			$args['widget_id'] = $this->id;

		}



		if ( isset( $cache[ $args['widget_id'] ] ) ) {

			echo $cache[ $args['widget_id'] ];

			return;

		}



		ob_start();

		extract($args);



		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : ''; 



		/** This filter is documented in wp-includes/default-widgets.php */

		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		$read_more_text  = isset( $instance['read_more_text'] ) ? esc_html( $instance['read_more_text'] ) : esc_html__( 'View More', 'luna' );

		$category = isset( $instance['category'] ) ? esc_attr($instance['category']) : '';

		



		/**

		 * Filter the arguments for the Recent Posts widget.

		 *

		 * @since 3.4.0

		 *

		 * @see WP_Query::get_posts()

		 *

		 * @param array $args An array of arguments used to retrieve the recent posts.

		 */

		$mt = new WP_Query( apply_filters( 'widget_posts_args', array(

			'no_found_rows'       => true,

			'post_status'         => 'publish',

			'posts_per_page'	  => 1,

			'category_name'		  => $category

		) ) );



		if ($mt->have_posts()) :

?>

		<section id="home-blog">
        
        
        	<?php if ( $title ) : ?>
        
        	<div class="grid grid-pad">
            	<div class="col-1-1">
                    <?php if ( $title ) echo $before_title . esc_attr( $title ) . $after_title; ?> 
                </div><!-- col-1-1 -->  
            </div><!-- grid -->
            
        	<?php endif; ?>	
	
    		<div class="grid grid-pad">
    
    				<?php /* Start the Loop */ ?>
					<?php while ( $mt->have_posts() ) : $mt->the_post(); ?>
        
        			<?php if (has_post_thumbnail( get_the_id() ) ): ?>
        				<div class="col-1-2">
                    <?php else: ?> 
                    	<div class="col-1-1">
                    <?php endif; ?> 
                    
        				<div class="home-news-post">
            
            				<span>
            					<h6><?php the_category(', ') ?></h6>
        						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            		
                    			<p><?php

								$content = get_the_content();
								$trimmed_content = wp_trim_words( $content, 18, '<a href="'. get_permalink() .'"> [...]</a>' );
								echo $trimmed_content;
				
								?></p>
                    
            					<a href="<?php the_permalink(); ?>"><button><?php echo esc_html( $read_more_text ); ?></button></a>
            				</span>
                        
            			</div>
                        
        			<?php if (has_post_thumbnail( get_the_id() ) ): ?>
        				</div>
                    <?php else: ?> 
                    	</div>
                    <?php endif; ?> 
        
    				
                    <?php if (has_post_thumbnail( get_the_id() ) ): ?>
                    
                    	<div class="col-1-2">
						
							<?php 
							
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'max-control' );
                      			$image = $image[0]; 
							
							?>
                        
                			<div class="home-news-bg" style="background-image: url('<?php echo $image; ?>');"></div> 
        			
                    	</div>
                        
                    <?php endif; ?> 
       
       			<?php endwhile; ?>

    		</div>
        
        
        	
        
        
		</section> 


	<?php

		// Reset the global $the_post as this query will have stomped on it

		wp_reset_postdata();



		endif;



		if ( ! $this->is_preview() ) {

			$cache[ $args['widget_id'] ] = ob_get_flush();

			wp_cache_set( 'luna_home_news', $cache, 'widget' );

		} else {

			ob_end_flush();

		}

	}


	

}