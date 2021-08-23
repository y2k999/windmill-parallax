<?php
/**
 * The template for displaying masthead(topbar and navbar).
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package Windmill Parallax
 * @license GPL3.0+
 * @since 1.0.1
*/

/**
 * Inspired by Beans Framework WordPress Theme
 * @link https://www.getbeans.io
 * @author Thierry Muller
 * 
 * Inspired by Kick Off UIkit 3 Starter Layout / Templates for your UIKit 3 project.
 * @link https://github.com/zzseba78/Kick-Off
 * @author byHumans
 * 
 * Inspired by NovelLite WordPress Theme
 * @link http://www.themehunk.com/product/novellite-one-page-wordpress-theme/
 * @author The ThemeHunk Team
*/


/* Prepare
______________________________
*/

// If this file is called directly,abort.
if(!defined('WPINC')){die;}

// Set identifiers for this template.
$index = basename(__FILE__,'.php');

/**
 * @reference (WP)
 * 	Retrieves name of the current stylesheet.
 * 	https://developer.wordpress.org/reference/functions/get_stylesheet/
*/
$theme = get_stylesheet();


/* Exec
______________________________
*/
?>
<?php
/**
 * @since 1.0.1
 * 	Custom header template for this child theme.
 * 	Copy from original template ([Parent]/template/header/header.php) and modify it.
 * 	 - Remove topbar icons of the parent theme.
 * 	 - Instead, add and echo the navigation menu for landing page (this child theme).
 * @reference
 * 	[Child]/header.php
 * 	[Parent]/controller/layout.php
 * 	[Parent]/controller/render/column.php
 * 	[Parent]/controller/render/container.php
 * 	[Parent]/controller/render/grid.php
 * 	[Parent]/controller/render/section.php
 * 	[Parent]/inc/setup/constant.php
*/
?>
<!-- ====================
	<masthead>
 ==================== -->
<section<?php echo apply_filters("_property[section][masthead]",''); ?>>
<header id="masthead"<?php echo apply_filters("_property[container][masthead]",esc_attr('site-header')); ?><?php echo apply_filters("_attribute[container][masthead]",''); ?>>
	<nav class="uk-navbar-transparent" uk-navbar>
		<div class="uk-navbar-left">
			<?php
			/**
			 * @since 1.0.1
			 * 	Displays header site branding.
			 * @reference (Uikit)
			 * 	https://getuikit.com/docs/navbar
			 * @reference
			 * 	[Parent]/inc/utility/theme.php
			 * 	[Parent]/model/app/branding.php
			*/
			__utility_app_branding();
			?>
		</div><!-- .navbar-left -->
	
		<div class="uk-navbar-right uk-visible@m">
			<?php
			/**
			 * @since 1.0.1
			 * 	Displays header navigation menu.
			 * @reference (Beans)
			 * 	HTML markup.
			 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
			 * 	https://www.getbeans.io/code-reference/functions/beans_output_e/
			 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
			 * @reference (Uikit)
			 * 	https://getuikit.com/docs/navbar
			 * 	https://getuikit.com/docs/scroll
			 * 	https://getuikit.com/docs/visibility
			 * @reference
			 * 	[Child]/functions.php
			*/	

			// Custom global variables.
			global $home_sections;

			beans_open_markup_e("_list[{$theme}][{$index}][navbar]",'ul',array('class' => 'uk-navbar-nav'));
				foreach($home_sections as $key => $value){
					beans_open_markup_e("_item[{$theme}][{$index}][navbar]",'li');
						beans_open_markup_e("_link[{$theme}][{$index}][{$key}]",'a',array(
							'href' => $value['link'],
							'uk-scroll' => 'uk-scroll',
						));
							beans_output_e("_label[{$theme}][{$index}][{$key}]",$value['label']);
						beans_close_markup_e("_link[{$theme}][{$index}][{$key}]",'a');
					beans_close_markup_e("_item[{$theme}][{$index}][navbar]",'li');
				}
			beans_close_markup_e("_list[{$theme}][{$index}][navbar]",'ul');
			?>
		</div><!-- .navbar-right -->
	</nav>

</header>
</section>
