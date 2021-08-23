<?php
/**
 * The template for displaying the landing page.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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
 * @reference (WP)
 * 	Load header template.
 * 	https://developer.wordpress.org/reference/functions/get_header/
*/
?>
<?php get_header(); ?>

<?php
/**
 * [CASE]
 * 	1. implement one column landing page.
 * 		Load the template-part files sequencially.
 * 
 * @reference (WP)
 * 	Loads a template part into a template.
 * 	https://developer.wordpress.org/reference/functions/get_template_part/
 * @reference
 * 	[Child]/functions.php
 * 	[Child]/template-part/home/home-xxx.php
*/

// Custom global variable.
global $home_sections;

foreach($home_sections as $key => $value){
	get_template_part('template-part/home/' . $key);
}
?>

<?php
/**
 * @reference (WP)
 * 	Load footer template.
 * 	https://developer.wordpress.org/reference/functions/get_footer/
*/
?>
<?php get_footer(); ?>
