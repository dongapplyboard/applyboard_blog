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

	<header id="masthead" class="site-header" role="banner">
		<div class="navbar-wrapper">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<button id="nav-button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="container">
				<div class="navbar-header page-scroll" id="navbar_ab_logo" style="position: absolute">
					<a href="https://www.applyboard.com">
						<img class="navbar-logo" src="https://d2mqj6445k6q7s.cloudfront.net/assets/applyboard-fc701424c1e1bccabd1d9f9cdcc5565d.png" alt="Applyboard"/>
					</a>
				</div>
			<div id="navbar" class="navbar-collapse collapse">
				<!-- collapse -->
				<ul class="nav navbar-nav navbar-right">
					<li><a class="page-scroll" href="https://www.applyboard.com/schools">Schools</a></li>
					<li id="nav-info">
						<a class="page-scroll" href="https://applyboard.zendesk.com/hc/en-us">
							<!-- <span class='fa fa-chevron-down'></span>  -->
							Help
						</a>
				<i id="triangle-after-help" style="width: 0; height: 0; border-left: 15px solid transparent; border-right: 15px solid transparent; border-bottom: 10px solid rgba(255, 255, 255, 0.95); margin-left: 15px; position: absolute; top: 40px; display: none"></i>
			</li>
			<li><a class="page-scroll" href="https://www.applyboard.com/features">Features</a></li>

			<li>
				<a class="page-scroll" href="https://www.applyboard.com/blog">Blog</a>
			</li>
				<li><a class="page-scroll" href="https://www.applyboard.com/login">Login</a></li>
				<li><a class="page-scroll" href="https://www.applyboard.com/register">Register</a></li>
			<li><a class="page-scroll match-btn" href="https://www.applyboard.com/quick_search">Apply Now</a></li>
		</ul>
	</div>
</div>
</nav>
	</header><!-- #masthead -->
</div>
	<div id="content" class="site-content">
