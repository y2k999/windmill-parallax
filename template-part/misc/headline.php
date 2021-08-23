<?php
/**
 * The template for displaying headline of home section components.
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

/**
 * @reference (WP)
 * 	Merges user defined arguments into defaults array.
 * 	https://developer.wordpress.org/reference/functions/wp_parse_args/
 * 	Additional arguments passed to the template via get_template_part().
 * 	https://developer.wordpress.org/reference/functions/get_template_part/
*/
$args = wp_parse_args($args,array(
	'needle' => '',
));

// Set identifiers for this template.
// $index = basename(__FILE__,'.php');
$index = isset($args['needle']) ? 'home-' . $args['needle'] : 'home-default';

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
 * @reference (Beans)
 * 	HTML markup.
 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
 * 	https://www.getbeans.io/code-reference/functions/beans_output_e/
 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
 * @reference (Uikit)
 * 	https://getuikit.com/docs/text
 * @reference
 * 	[Child]/lib/customizer.php
 * 	[Parent]/inc/customizer/option.php
 * 	[Parent]/inc/utility/general.php
*/

// Section title
beans_open_markup_e("_tag[{$theme}][{$index}][headline]",__utility_get_option('tag_page-title'),array('class' => 'uk-text-primary'));
	beans_open_markup_e("_link[{$theme}][{$index}][headline]",'a',array('href' => '#' . $index));
		/**
		 * @reference (WP)
		 * 	Retrieves theme modification value for the current theme.
		 * 	https://developer.wordpress.org/reference/functions/get_theme_mod/
		*/
		beans_output_e("_output[{$theme}][{$index}][headline][title]",get_theme_mod('setting_WP_headline_section_' . $args['needle']));
	beans_close_markup_e("_link[{$theme}][{$index}][headline]",'a');
beans_close_markup_e("_tag[{$theme}][{$index}][headline]",__utility_get_option('tag_page-title'));

// Section description
beans_open_markup_e("_paragraph[{$theme}][{$index}][headline]",__utility_get_option('tag_site-description'),array('class' => 'uk-text-lead'));
	beans_output_e("_output[{$theme}][{$index}][headline][description]",get_theme_mod('setting_WP_description_section_' . $args['needle']));
beans_close_markup_e("_paragraph[{$theme}][{$index}][headline]",__utility_get_option('tag_site-description'));
