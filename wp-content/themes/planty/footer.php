<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
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
<?php astra_content_bottom(); ?>
</div> <!-- ast-container -->
</div><!-- #content -->
<footer class="site-footer" id="colophon" itemtype="https://schema.org/WPFooter" itemscope="itemscope" itemid="#colophon">
	<div class="site-below-footer-wrap ast-builder-grid-row-container site-footer-focus-item ast-builder-grid-row-full ast-builder-grid-row-tablet-full ast-builder-grid-row-mobile-full ast-footer-row-stack ast-footer-row-tablet-stack ast-footer-row-mobile-stack" data-section="section-below-footer-builder">
		<div class="ast-builder-grid-row-container-inner">
			<div class="ast-builder-footer-grid-columns site-below-footer-inner-wrap ast-builder-grid-row">
				<div class="site-footer-below-section-1 site-footer-section site-footer-section-1">
					<div class="footer-widget-area widget-area site-footer-focus-item" data-section="section-footer-menu">
						<div class="footer-bar-navigation">
							<nav class="site-navigation ast-flex-grow-1 navigation-accessibility footer-navigation" id="footer-site-navigation" aria-label="Navigation du site" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
								<div class="footer-nav-wrap">
									<?php
									/**** Replaces the ul=>li part of the menu *****/
									wp_nav_menu(
										array(
											'theme_location' => 'footer-menu',
											'container' => false,
											'menu_class' => 'ast-nav-menu ast-flex astra-footer-horizontal-menu astra-footer-tablet-vertical-menu astra-footer-mobile-vertical-menu',
											'menu_id' => 'astra-footer-menu'
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
</footer>
</div><!-- #page -->
<?php
astra_body_bottom();
wp_footer();
?>
</body>

</html>