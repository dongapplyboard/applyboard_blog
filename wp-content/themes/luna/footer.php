<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package luna
 */
?>

	</div><!-- #content -->



	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="grid grid-pad">
        	<?php if ( get_theme_mod( 'luna_footer_title' ) ) : ?>

				<h3 class="footer-contact-title"><?php echo wp_kses_post( get_theme_mod( 'luna_footer_title' )); ?></h3>

			<?php endif; ?>

            <?php if ( get_theme_mod( 'luna_footer_text' ) ) : ?>

				<div class="footer-contact">
					<?php echo wp_kses_post( get_theme_mod( 'luna_footer_text' )); ?>
                </div>

			<?php endif; ?>
        </div>
		<div class="site-info">
            <div class="grid grid-pad">
                <div class="col-1-1">

                    	<div class="col-1-2">

                        	<?php if( get_theme_mod( 'active_byline' ) == '') : ?>

							<?php if ( get_theme_mod( 'luna_footerid' ) ) : ?>

        						<?php echo wp_kses_post( get_theme_mod( 'luna_footerid' )); // footer id ?>

							<?php else : ?>

									<div class="row text-center-sm" style="margin-top:20px; margin-bottom:20px;">
  <div class="col-md-6">
    <div class="row">

      <div class="col-sm-4">
        <span class="footer-title">Welcome</span>
        <br>
				<a href="http:/www.applyboard.com/quick_search">Find Programs</a>
          <br>
          <%= link_to "Login", login_path %>
          <br>
          <%= link_to "Register", register_path %>
        <% end %>
        <br>
        <%= link_to "Reset Password", forgot_password_path %>
        <br/>
        <br/>
      </div>

      <div class="col-sm-4">
        <span class="footer-title">About</span>
        <br>
        <%= link_to "Company", about_us_path %>
        <br/>
        <%= link_to "How it works", features_path %>
        <br/>
        <!--<a href="">Why ApplyBoard</a>-->
      </div>

      <div class="col-sm-4">
        <span class="footer-title">Partners</span>
        <br>
        <%= link_to "Schools", :schools %>
        <br>
        <%= link_to "Partner with Us", partner_with_us_path %>
        <br>
        <%= link_to "Certificates", certificates_gallery_path %>
        <br/>
        <br/>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="row">
      <div class="col-sm-4">
        <span class="footer-title">Community</span>
        <br>
        <a href="https://applyboard.zendesk.com/hc/en-us">Help Center</a>
        <br>
        <%= link_to "Student Testimonials", testimonials_path %>
        <br>
        <a href="http://applyboard.com/blog">Blog</a>
        <br/>
        <br/>
      </div>

      <div class="col-sm-4">
        <span class="footer-title">Quick Links</span>
        <br>
        <a href="https://applyboard.zendesk.com/hc/en-us/categories/200413168-Visa" target="_blank">Visa Guidance</a>
        <br>
        <a href="https://applyboard.zendesk.com/hc/en-us/categories/200415658-Study-in-Canada" target="_blank">Study in Canada</a>
        <br>
        <a href="https://applyboard.zendesk.com/hc/en-us/categories/201062757-Study-in-United-States-of-America" target="_blank">Study
          in USA</a>
        <br/>
        <a href="https://applyboard.zendesk.com/hc/en-us/articles/229458207" target="_blank">Fees</a>
        <br/>
      </div>

      <div class="col-sm-4">
        <span class="footer-title">Contact Us</span>
        <br>
        Easy Education Inc.
        <br>
        30 Duke St. West, Suite 1100<br/>
        Kitchener, ON.,<br/>
        N2H 3W5 Canada<br/>
        <abbr title="Phone">P:</abbr> (519) 900-6001
        <br/>
        <br/>
      </div>

    </div>

  </div>
</div>

<div class="row">
  <div class="col-lg-12 text-center">
    <a href="mailto:info@applyboard.com" class="btn btn-primary">Send us email</a>
    <p class="m-t-sm">
      Or follow us on social platform
    </p>
    <ul class="list-inline social-icon">
      <li><a target="_blank" href="https://twitter.com/applyboard"><i class="fa fa-twitter"></i></a>
      </li>
      <li><a target="_blank" href="https://www.facebook.com/applyboard"><i class="fa fa-facebook"></i></a>
      </li>
      <li><a target="_blank" href="https://www.youtube.com/c/ApplyboardChannel"><i class="fa fa-youtube"></i></a>
      </li>
      <li><a target="_blank" href="https://instagram.com/applyboard/"><i class="fa fa-instagram"></i></a>
      </li>
      <li><a target="_blank" href="https://plus.google.com/+ApplyboardChannel"><i class="fa fa-google-plus"></i></a>
      </li>
      <li><a target="_blank" href="https://www.linkedin.com/company/applyboard"><i class="fa fa-linkedin"></i></a>
      </li>
    </ul>
  </div>
</div>
<div class="row">
  <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
        <span>
            <strong>&copy;
              2017 ApplyBoard.com</strong> | <a href="<%= terms_of_service_url %>">Terms of Service</a> | <a href="<%= privacy_policy_url %>">Privacy Policy</a><br/>
            An online tool for students from anywhere in the world to find the best university or college in Canada or the USA and apply to it.
        </span>
  </div>
</div>

							<?php endif; ?>

                            <?php endif; ?>

                        </div>


                    	<?php if( get_theme_mod( 'active_social' ) == '') : ?>

                    		<?php if ( is_active_sidebar('social-widget-area') ) : ?>

                        		<div class="col-1-2">
                            		<?php dynamic_sidebar('social-widget-area');  ?>
                            	</div>

                    		<?php endif; ?>

                    	<?php endif; ?>


                </div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
