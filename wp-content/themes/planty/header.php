<?php

/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
	<?php astra_head_top(); ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
	<?php astra_body_top(); ?>

	<?php wp_body_open(); ?>

	<a class="skip-link screen-reader-text" href="#content" role="link" title="<?php echo esc_html(astra_default_strings('string-header-skip-link', false)); ?>">
		<?php echo esc_html(astra_default_strings('string-header-skip-link', false)); ?>
	</a>

	<div <?php
			echo astra_attr(
				'site',
				array(
					'id'    => 'page',
					'class' => 'hfeed site',
				)
			);
			?>>
		<header class="site-header header-main-layout-1 ast-primary-menu-enabled ast-hide-custom-menu-mobile ast-builder-menu-toggle-icon ast-mobile-header-inline" id="masthead" itemtype="https://schema.org/WPHeader" itemscope="itemscope" itemid="#masthead">
			<div id="ast-desktop-header" data-toggle-type="dropdown">
				<div class="ast-main-header-wrap main-header-bar-wrap">
					<div class="ast-primary-header-bar ast-primary-header main-header-bar site-header-focus-item" data-section="section-primary-header-builder">
						<div id="navbar-fluid" class="site-primary-header-wrap ast-builder-grid-row-container site-header-focus-item ast-container" data-section="section-primary-header-builder">
							<div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">
								<div class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">
									<div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="title_tagline">
										<div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
											<span class="site-logo-img"><a href="<?php echo get_permalink(28) ; ?>" class="custom-logo-link" rel="home" aria-current="page"><img width="3592" height="330" src="http://localhost:8888/planty/wp-content/uploads/2023/03/Logo.png" class="custom-logo" alt="Planty" decoding="async" srcset="http://localhost:8888/planty/wp-content/uploads/2023/03/Logo.png 3592w, http://localhost:8888/planty/wp-content/uploads/2023/03/Logo-300x28.png 300w, http://localhost:8888/planty/wp-content/uploads/2023/03/Logo-1024x94.png 1024w, http://localhost:8888/planty/wp-content/uploads/2023/03/Logo-768x71.png 768w, http://localhost:8888/planty/wp-content/uploads/2023/03/Logo-1536x141.png 1536w, http://localhost:8888/planty/wp-content/uploads/2023/03/Logo-2048x188.png 2048w, http://localhost:8888/planty/wp-content/uploads/2023/03/Logo-191x18.png 191w" sizes="(max-width: 3592px) 100vw, 3592px"></a></span>
										</div>
										<p class="text-to-side-logo">energy drink</p>
										<!-- .site-branding -->
									</div>
								</div>
								<div class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">
									<div class="ast-builder-menu-1 ast-builder-menu ast-flex ast-builder-menu-1-focus-item ast-builder-layout-element site-header-focus-item" data-section="section-hb-menu-1">
										<div class="ast-main-header-bar-alignment">
											<div class="main-header-bar-navigation ast-flex-1">
												<nav class="site-navigation" id="primary-site-navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope" aria-label="Navigation du site">
													<div id="ast-hf-menu-1" class="main-navigation ast-inline-flex">
														<?php
														/**** Replaces the ul=>li part of the menu *****/
														wp_nav_menu(
															array(
																'theme_location' => 'main-menu',
																'menu_id' => 'primary-menu',
																'container' => false,
																'menu_class' => 'main-header-menu ast-menu-shadow ast-nav-menu ast-flex submenu-with-border stack-on-mobile'
															)
														);
														/***************/
														?>
													</div>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ast-desktop-header-content content-align-flex-start " style="display: none;">
				</div>
			</div> <!-- Main Header Bar Wrap -->
			<div id="ast-mobile-header" class="ast-mobile-header-wrap " data-type="dropdown">
				<div class="ast-main-header-wrap main-header-bar-wrap">
					<div class="ast-primary-header-bar ast-primary-header main-header-bar site-primary-header-wrap site-header-focus-item ast-builder-grid-row-layout-default ast-builder-grid-row-tablet-layout-default ast-builder-grid-row-mobile-layout-default" data-section="section-primary-header-builder">
						<div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">
							<div class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">
								<div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="title_tagline">
									<div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
										<span class="site-logo-img"><a href="<?php echo get_permalink(28) ; ?>" class="custom-logo-link" rel="home" aria-current="page"><img width="3592" height="330" src="http://localhost:8888/planty/wp-content/uploads/2023/03/Logo.png" class="custom-logo" alt="Planty" decoding="async" srcset="http://localhost:8888/planty/wp-content/uploads/2023/03/Logo.png 3592w, http://localhost:8888/planty/wp-content/uploads/2023/03/Logo-300x28.png 300w, http://localhost:8888/planty/wp-content/uploads/2023/03/Logo-1024x94.png 1024w, http://localhost:8888/planty/wp-content/uploads/2023/03/Logo-768x71.png 768w, http://localhost:8888/planty/wp-content/uploads/2023/03/Logo-1536x141.png 1536w, http://localhost:8888/planty/wp-content/uploads/2023/03/Logo-2048x188.png 2048w, http://localhost:8888/planty/wp-content/uploads/2023/03/Logo-191x18.png 191w" sizes="(max-width: 3592px) 100vw, 3592px"></a></span>
									</div>
									<!-- .site-branding -->
								</div>
							</div>
							<div class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">
								<div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="section-header-mobile-trigger">
									<div class="ast-button-wrap">
										<button type="button" class="menu-toggle main-header-menu-toggle ast-mobile-menu-trigger-minimal" aria-expanded="false" data-index="0">
											<span class="screen-reader-text">Main Menu</span>
											<span class="mobile-menu-toggle-icon">
												<span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg class="ast-mobile-svg ast-menu2-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28">
														<path d="M24 21v2c0 0.547-0.453 1-1 1h-22c-0.547 0-1-0.453-1-1v-2c0-0.547 0.453-1 1-1h22c0.547 0 1 0.453 1 1zM24 13v2c0 0.547-0.453 1-1 1h-22c-0.547 0-1-0.453-1-1v-2c0-0.547 0.453-1 1-1h22c0.547 0 1 0.453 1 1zM24 5v2c0 0.547-0.453 1-1 1h-22c-0.547 0-1-0.453-1-1v-2c0-0.547 0.453-1 1-1h22c0.547 0 1 0.453 1 1z"></path>
													</svg></span><span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg class="ast-mobile-svg ast-close-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
														<path d="M5.293 6.707l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5.293-5.293 5.293 5.293c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z"></path>
													</svg></span> </span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ast-mobile-header-content content-align-flex-start ">
					<div class="ast-builder-menu-mobile ast-builder-menu ast-builder-menu-mobile-focus-item ast-builder-layout-element site-header-focus-item" data-section="section-header-mobile-menu">
						<div class="ast-main-header-bar-alignment">
							<div class="main-header-bar-navigation">
								<nav class="site-navigation" id="ast-mobile-site-navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope" aria-label="Navigation du site">
									<div id="ast-hf-mobile-menu" class="main-navigation">
										<?php
										/**** Replaces the ul=>li part of the menu *****/
										wp_nav_menu(
											array(
												'theme_location' => 'main-menu',
												'menu_id' => 'primary-menu',
												'container' => false,
												'menu_class' => 'main-header-menu ast-nav-menu ast-flex  submenu-with-border astra-menu-animation-fade stack-on-mobile'
											)
										);
										/***************/
										?>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div id="content" class="site-content">
			<div class="ast-container">
				<?php astra_content_top(); ?>