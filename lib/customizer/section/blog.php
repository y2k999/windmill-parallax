<?php
/**
 * Return theme customizer section parameters.
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
	 * @access (public)
	 * 	Return the theme customizer sections under the panel.
	 * @return (array)
	*/
	if(function_exists('__get_section_child_blog') === FALSE) :
	function __get_section_child_blog()
	{
		return array(
			'blog_general' => esc_html__('General Settings','windmill'),
		);

	}// Method
	endif;


	/**
	 * @access (public)
	 * 	Add the theme customizer sections.
	 * @param (WP_Customize_Manager) $wp_customize
	 * 	Instance of WP_Customize_Manager.
	 * 	https://developer.wordpress.org/reference/classes/wp_customize_manager/
	 * @return (bool)
	 * 	Will always return true(Validate action arguments?).
	 * 
	 * @reference (Beans)
	 * 	Set beans_add_action() using the callback argument as the action ID.
	 * 	https://www.getbeans.io/code-reference/functions/beans_add_smart_action/
	 * @reference (WP)
	 * 	Fires once WordPress has loaded, allowing scripts and styles to be initialized.
	 * 	https://developer.wordpress.org/reference/hooks/customize_register/
	*/
	beans_add_smart_action('customize_register',function($wp_customize)
	{
		$panel = basename(__FILE__,'.php');

		foreach(__get_section_child_blog() as $key => $value){
			/**
			 * [NOTE]
			 * 	"WP" stands for Windmill Parallax.
			 * 
			 * @reference (WP)
			 * 	Add a customize section.
			 * 	https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
			*/
			// A specific ID for the section.
			$wp_customize->add_section('section_WP_' . $key,array(
				'title' => $value,
				'panel' => 'panel_WP_' . $panel
			));
		}
	});
