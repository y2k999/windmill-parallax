<?php
/**
 * Return panel values of theme customizer.
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
	 * 	Return the theme customizer panels.
	 * @return (array)
	*/
	if(function_exists('__get_panel_child') === FALSE) :
	function __get_panel_child()
	{
		$return = array();

		// Customier global variable.
		global $home_sections;

		foreach($home_sections as $key => $value){
			$return[$key] = $value['label'];
		}
		return $return;

	}// Method
	endif;


	/**
	 * @access (public)
	 * 	Add the theme customizer panels.
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
		// Priority of the panel, defining the display order of panels and sections.
		$priority = 2000;

		foreach(__get_panel_child() as $key => $value){
			/**
			 * [NOTE]
			 * 	"WP" stands for Windmill Parallax.
			 * 
			 * @reference (WP)
			 * 	Add a customize panel.
			 * 	https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/
			*/
			$wp_customize->add_panel(
				// A specific ID for the panel.
				'panel_WP_' . $key,
				array(
					'capability' => 'edit_theme_options',
					'theme_supports' => '',
					'title' => '[Windmill Parallax] ' . $value,
					'priority' => $priority,
				)
			);
			$priority += 100;
		}
	});
