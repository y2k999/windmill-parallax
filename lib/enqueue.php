<?php
/**
 * Enqueue child theme scripts and styles.
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
// $theme = get_stylesheet();


/* Exec
______________________________
*/
?>
<?php
	/**
	 * @since 1.0.1
	 * 	Only front-end scripts for this child theme.
	 * @reference (WP)
	 * 	Determines whether the current request is for an administrative interface page.
	 * 	https://developer.wordpress.org/reference/functions/is_admin/
	*/
	if(is_admin()){return;}


	/**
	 * @reference (WP)
	 * 	Fires when scripts and styles are enqueued.
	 * 	https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
	*/

	// Invoke PHP_CSS plugin.
	if(class_exists('PHP_CSS') === FALSE) :
		get_template_part(SLUG['plugin'] . 'php-css/php-css');
	endif;
	$php_css = new PHP_CSS;


	/**
	 * @since 1.0.1
	 * 	Modify inline style of parent theme.
	 * @reference
	 * 	[Child]/template/header.php
	 * 	[Parent]/asset/inline/base.php
	*/
	// Add a single property.
	$php_css->set_selector('.site-header');
	$php_css->add_property('background',COLOR['white']);


	/**
	 * @since 1.0.1
	 * 	Register the handle of inline css.
	 * @reference
	 * 	[Parent]/inc/utility/general.php
	*/
	wp_register_style(__utility_make_handle('inline'),trailingslashit(get_stylesheet_directory_uri()) . 'asset/style/dummy.min.css');
	wp_enqueue_style(__utility_make_handle('inline'));


	/**
	 * @reference (WP)
	 * 	Add extra CSS styles to a registered stylesheet.
	 * 	https://developer.wordpress.org/reference/functions/wp_add_inline_style/
	 * @param (string) $handle
	 * 	Name of the stylesheet to add the extra styles to.
	 * @param (string) $data
	 * 	String containing the CSS styles to be added.
	 * @reference
	 * 	[Parent]/inc/utility/general.php
	*/
	wp_add_inline_style(__utility_make_handle('inline'),$php_css->css_output());
