<?php



class luna_social extends WP_Widget {
	
// constructor

    function luna_social() {

		$widget_ops = array('classname' => 'luna_social_widget', 'description' => esc_html__( 'Drag this widget to the Social Widget Area.', 'luna') );

        parent::__construct(false, $name = esc_html__('MT - Social Icons', 'luna'), $widget_ops);

		$this->alt_option_name = 'luna_social_widget'; 

		

		add_action( 'save_post', array($this, 'flush_widget_cache') ); 

		add_action( 'deleted_post', array($this, 'flush_widget_cache') ); 

		add_action( 'switch_theme', array($this, 'flush_widget_cache') );	 	

    }

	

	// widget form creation

	function form($instance) {



	// Check values

		
		
		$social_fb_link 	= isset( $instance['social_fb_link'] ) ? esc_url( $instance['social_fb_link'] ) : '';
		
		$social_twitter_link 	= isset( $instance['social_twitter_link'] ) ? esc_url( $instance['social_twitter_link'] ) : '';
		
		$social_linked_link 	= isset( $instance['social_linked_link'] ) ? esc_url( $instance['social_linked_link'] ) : '';
		
		$social_google_link 	= isset( $instance['social_google_link'] ) ? esc_url( $instance['social_google_link'] ) : '';
		
		$social_instagram_link 	= isset( $instance['social_instagram_link'] ) ? esc_url( $instance['social_instagram_link'] ) : '';
		
		$social_flickr_link 	= isset( $instance['social_flickr_link'] ) ? esc_url( $instance['social_flickr_link'] ) : '';
		
		$social_pinterest_link 	= isset( $instance['social_pinterest_link'] ) ? esc_url( $instance['social_pinterest_link'] ) : '';
		
		$social_youtube_link 	= isset( $instance['social_youtube_link'] ) ? esc_url( $instance['social_youtube_link'] ) : '';
		
		$social_vimeo_link 	= isset( $instance['social_vimeo_link'] ) ? esc_url( $instance['social_vimeo_link'] ) : '';
		
		$social_tumblr_link 	= isset( $instance['social_tumblr_link'] ) ? esc_url( $instance['social_tumblr_link'] ) : '';
		
		$social_dribbble_link 	= isset( $instance['social_dribbble_link'] ) ? esc_url( $instance['social_dribbble_link'] ) : '';
		
		$social_rss_link 	= isset( $instance['social_rss_link'] ) ? esc_url( $instance['social_rss_link'] ) : '';
		
		$social_url_path	= isset( $instance['social_url_path'] ) ? (bool) $instance['social_url_path'] : false; 
		


	?>
	


	<!-- facebook -->
    
    <p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('social_fb_link')); ?>"><?php esc_html_e('Facebook URL:', 'luna'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('social_fb_link')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('social_fb_link')); ?>" type="text" value="<?php echo esc_url( $social_fb_link ); ?>" />

	</p>

	<!-- twitter -->
    
    <p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('social_twitter_link')); ?>"><?php esc_html_e('Twitter URL:', 'luna'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('social_twitter_link')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('social_twitter_link')); ?>" type="text" value="<?php echo esc_url( $social_twitter_link ); ?>" />

	</p>
    
    <!-- linkedin -->
    
    <p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('social_linked_link')); ?>"><?php esc_html_e('LinkedIn URL:', 'luna'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('social_linked_link')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('social_linked_link')); ?>" type="text" value="<?php echo esc_url( $social_linked_link ); ?>" />

	</p>

	 <!-- google -->
    
    <p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('social_google_link')); ?>"><?php esc_html_e('Google URL:', 'luna'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('social_google_link')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('social_google_link')); ?>" type="text" value="<?php echo esc_url( $social_google_link ); ?>" />

	</p>
    
    <!-- instagram -->
    
    <p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('social_instagram_link')); ?>"><?php esc_html_e('Instagram URL:', 'luna'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('social_instagram_link')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('social_instagram_link')); ?>" type="text" value="<?php echo esc_url( $social_instagram_link ); ?>" />

	</p>
    
    <!-- flickr -->
    
    <p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('social_flickr_link')); ?>"><?php esc_html_e('Flickr URL:', 'luna'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('social_flickr_link')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('social_flickr_link')); ?>" type="text" value="<?php echo esc_url( $social_flickr_link ); ?>" />

	</p>
	
    <!-- pinterest -->
    
    <p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('social_pinterest_link')); ?>"><?php esc_html_e('Pinterest URL:', 'luna'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('social_pinterest_link')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('social_pinterest_link')); ?>" type="text" value="<?php echo esc_url( $social_pinterest_link ); ?>" />

	</p>
	
    <!-- youtube -->
    
    <p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('social_youtube_link')); ?>"><?php esc_html_e('Youtube URL:', 'luna'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('social_youtube_link')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('social_youtube_link')); ?>" type="text" value="<?php echo esc_url( $social_youtube_link ); ?>" />

	</p>
    
    <!-- vimeo -->
    
    <p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('social_vimeo_link')); ?>"><?php esc_html_e('Vimeo URL:', 'luna'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('social_vimeo_link')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('social_vimeo_link')); ?>" type="text" value="<?php echo esc_url( $social_vimeo_link ); ?>" />

	</p>
    
    <!-- tumblr -->
    
    <p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('social_tumblr_link')); ?>"><?php esc_html_e('Tumblr URL:', 'luna'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('social_tumblr_link')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('social_tumblr_link')); ?>" type="text" value="<?php echo esc_url( $social_tumblr_link ); ?>" />

	</p>
    
    <!-- dribbble -->
    
    <p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('social_dribbble_link')); ?>"><?php esc_html_e('Dribbble URL:', 'luna'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('social_dribbble_link')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('social_dribbble_link')); ?>" type="text" value="<?php echo esc_url( $social_dribbble_link ); ?>" />

	</p>
    
    <!-- rss -->
    
    <p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('social_rss_link')); ?>"><?php esc_html_e('RSS URL:', 'luna'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('social_rss_link')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('social_rss_link')); ?>" type="text" value="<?php echo esc_url( $social_rss_link ); ?>" /> 

	</p>
    
    <!-- checkbox -->
    
    <p>
    
    <input class="checkbox" type="checkbox" <?php checked( $social_url_path ); ?> id="<?php echo sanitize_text_field( $this->get_field_id( 'social_url_path' )); ?>" name="<?php echo $this->get_field_name( 'social_url_path' ); ?>" /> 

	<label for="<?php echo sanitize_text_field( $this->get_field_id( 'social_url_path' )); ?>"><?php esc_html_e( 'Check this box to open links in a new window.', 'luna' ); ?></label>
    
    </p> 
	

	<?php

	}



	// update widget

	function update($new_instance, $old_instance) {

		$instance = $old_instance;
		
		$instance['social_fb_link'] 	= 	esc_url($new_instance['social_fb_link']);
		
		$instance['social_twitter_link'] 	= 	esc_url($new_instance['social_twitter_link']);
		
		$instance['social_linked_link'] 	= 	esc_url($new_instance['social_linked_link']);
		
		$instance['social_google_link'] 	= 	esc_url($new_instance['social_google_link']);
		
		$instance['social_instagram_link'] 		= 	esc_url($new_instance['social_instagram_link']);
		
		$instance['social_flickr_link'] 	= 	esc_url($new_instance['social_flickr_link']);
		
		$instance['social_pinterest_link'] 		= 	esc_url($new_instance['social_pinterest_link']);
		
		$instance['social_youtube_link'] 	= 	esc_url($new_instance['social_youtube_link']);
		
		$instance['social_vimeo_link'] 		= 	esc_url($new_instance['social_vimeo_link']);
		
		$instance['social_tumblr_link'] 	= 	esc_url($new_instance['social_tumblr_link']);
		
		$instance['social_dribbble_link'] 	= 	esc_url($new_instance['social_dribbble_link']);
		
		$instance['social_rss_link'] 	= 	esc_url($new_instance['social_rss_link']);
		
		$instance['social_url_path'] 		= isset( $new_instance['social_url_path'] ) ? (bool) $new_instance['social_url_path'] : false;

		$this->flush_widget_cache();



		$alloptions = wp_cache_get( 'alloptions', 'options' );

		if ( isset($alloptions['luna_social']) )

			delete_option('luna_social');		  

		  

		return $instance;

	}

	

	function flush_widget_cache() {

		wp_cache_delete('luna_social', 'widget');

	}

	

	// display widget

	function widget($args, $instance) {

		$cache = array();

		if ( ! $this->is_preview() ) {

			$cache = wp_cache_get( 'luna_social', 'widget' );

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

		
		
		$social_fb_link 	= isset( $instance['social_fb_link'] ) ? esc_url( $instance['social_fb_link'] ) : '';
		
		$social_twitter_link 	= isset( $instance['social_twitter_link'] ) ? esc_url( $instance['social_twitter_link'] ) : '';
		
		$social_linked_link 	= isset( $instance['social_linked_link'] ) ? esc_url( $instance['social_linked_link'] ) : '';
		
		$social_google_link 	= isset( $instance['social_google_link'] ) ? esc_url( $instance['social_google_link'] ) : '';
		
		$social_instagram_link 	= isset( $instance['social_instagram_link'] ) ? esc_url( $instance['social_instagram_link'] ) : '';
		
		$social_flickr_link 	= isset( $instance['social_flickr_link'] ) ? esc_url( $instance['social_flickr_link'] ) : '';
		
		$social_pinterest_link 	= isset( $instance['social_pinterest_link'] ) ? esc_url( $instance['social_pinterest_link'] ) : '';
		
		$social_youtube_link 	= isset( $instance['social_youtube_link'] ) ? esc_url( $instance['social_youtube_link'] ) : '';
		
		$social_vimeo_link 	= isset( $instance['social_vimeo_link'] ) ? esc_url( $instance['social_vimeo_link'] ) : '';
		
		$social_tumblr_link 	= isset( $instance['social_tumblr_link'] ) ? esc_url( $instance['social_tumblr_link'] ) : '';
		
		$social_dribbble_link 	= isset( $instance['social_dribbble_link'] ) ? esc_url( $instance['social_dribbble_link'] ) : '';
		
		$social_rss_link 	= isset( $instance['social_rss_link'] ) ? esc_url( $instance['social_rss_link'] ) : '';
		
		$social_url_path	= isset( $instance['social_url_path'] ) ? (bool) $instance['social_url_path'] : false; 
		
		

?>
			
    	<ul class='social-media-icons'>
             
        	<?php if ($social_fb_link !='') : ?>
            	<li>
                <a href="<?php echo esc_url( $social_fb_link ); ?>" <?php if( $social_url_path ) : ?>target="_blank"<?php endif; ?>>
                <i class="fa fa-facebook"></i>
                </a>
                </li>
			<?php endif; ?>
            <?php if ($social_twitter_link !='') : ?>
            	<li>
                <a href="<?php echo esc_url( $social_twitter_link ); ?>" <?php if( $social_url_path ) : ?>target="_blank"<?php endif; ?>>
                <i class="fa fa-twitter"></i>
                </a>
                </li>
			<?php endif; ?>
            <?php if ($social_linked_link !='') : ?>
            	<li>
                <a href="<?php echo esc_url( $social_linked_link ); ?>" <?php if( $social_url_path ) : ?>target="_blank"<?php endif; ?>>
                <i class="fa fa-linkedin"></i>
                </a>
                </li>
			<?php endif; ?>
            <?php if ($social_google_link !='') : ?>
            	<li>
                <a href="<?php echo esc_url( $social_google_link ); ?>" <?php if( $social_url_path ) : ?>target="_blank"<?php endif; ?>>
                <i class="fa fa-google-plus"></i>
                </a>
                </li>
			<?php endif; ?>
            <?php if ($social_instagram_link !='') : ?>
            	<li>
                <a href="<?php echo esc_url( $social_instagram_link ); ?>" <?php if( $social_url_path ) : ?>target="_blank"<?php endif; ?>>
                <i class="fa fa-instagram"></i>
                </a>
                </li>
			<?php endif; ?>
            <?php if ($social_flickr_link !='') : ?>
            	<li>
                <a href="<?php echo esc_url( $social_flickr_link ); ?>" <?php if( $social_url_path ) : ?>target="_blank"<?php endif; ?>>
                <i class="fa fa-flickr"></i>
                </a>
                </li>
			<?php endif; ?>
            <?php if ($social_pinterest_link !='') : ?>
            	<li>
                <a href="<?php echo esc_url( $social_pinterest_link ); ?>" <?php if( $social_url_path ) : ?>target="_blank"<?php endif; ?>>
                <i class="fa fa-pinterest"></i>
                </a>
                </li>
			<?php endif; ?>
            <?php if ($social_youtube_link !='') : ?>
            	<li>
                <a href="<?php echo esc_url( $social_youtube_link ); ?>" <?php if( $social_url_path ) : ?>target="_blank"<?php endif; ?>>
                <i class="fa fa-youtube"></i>
                </a>
                </li>
			<?php endif; ?>
            <?php if ($social_vimeo_link !='') : ?>
            	<li>
                <a href="<?php echo esc_url( $social_vimeo_link ); ?>" <?php if( $social_url_path ) : ?>target="_blank"<?php endif; ?>>
                <i class="fa fa-vimeo-square"></i>
                </a>
                </li>
			<?php endif; ?>
            <?php if ($social_tumblr_link !='') : ?>
            	<li>
                <a href="<?php echo esc_url( $social_tumblr_link ); ?>" <?php if( $social_url_path ) : ?>target="_blank"<?php endif; ?>>
                <i class="fa fa-tumblr"></i>
                </a>
                </li>
			<?php endif; ?>
            <?php if ($social_dribbble_link !='') : ?>
            	<li>
                <a href="<?php echo esc_url( $social_dribbble_link ); ?>" <?php if( $social_url_path ) : ?>target="_blank"<?php endif; ?>>
                <i class="fa fa-dribbble"></i>
                </a>
                </li>
			<?php endif; ?>
            <?php if ($social_rss_link !='') : ?>
            	<li>
                <a href="<?php echo esc_url( $social_rss_link ); ?>" <?php if( $social_url_path ) : ?>target="_blank"<?php endif; ?>>
               <i class="fa fa-rss"></i>
                </a>
                </li>
			<?php endif; ?> 
            
    	</ul> 
              

	<?php



		if ( ! $this->is_preview() ) {

			$cache[ $args['widget_id'] ] = ob_get_flush();

			wp_cache_set( 'luna_social', $cache, 'widget' ); 

		} else {

			ob_end_flush();

		}

	}

	

}