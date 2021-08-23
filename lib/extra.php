<?php
/**
 * Setup and build basical environment for this theme.
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
// $index = basename(__FILE__,'.php');

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
	 * 	Remove secondary(footer) navigation of the parent theme.
	 * @reference (Beans)
	 * 	Remove an action.
	 * 	https://www.getbeans.io/code-reference/functions/beans_remove_action/
	 * @reference
	 * 	[Parent]/controller/structure/footer.php
	 * 	[Parent]/model/app/nav.php
	 * 	[Parent]/template/footer/footer.php
	 * 	[Parent]/template-part/nav/nav-secondary.php
	*/
	beans_remove_action('_structure_footer__the_nav');
