<?php
/**
 * Return theme customizer control/setting parameters.
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
// $_index = basename(__FILE__,'.php');

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
	 * 	Add the theme customizer settings/controls.
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
		$_section = basename(__FILE__,'.php');

		/**
		 * [NOTE]
		 * 	"WP" stands for Windmill Parallax.
		 * 
		 * @reference (WP)
		 * 	Add a customize setting.
		 * 	https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
		 * 	Add a customize control.
		 * 	https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
		 * @reference
		 * 	[Child]/lib/customizer/default.php
		 * 	[Parent]/inc/utility/sanitize.php
		*/

		// headline_section_price
		$wp_customize->add_setting('setting_WP_headline_section_price',array(
			'default' => __get_customizer_default_child('headline_section_price'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => '__utility_sanitize_text'
		));
		$wp_customize->add_control('setting_WP_headline_section_price',array(
			'settings' => 'setting_WP_headline_section_price',
			'label' => esc_html__('Section Headline','windmill'),
			'section' => 'section_WP_' . $_section,
			 'type' => 'text',
		));

		// description_section_price
		$wp_customize->add_setting('setting_WP_description_section_price',array(
			'default' => __get_customizer_default_child('description_section_price'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => '__utility_sanitize_textarea'
		));
		$wp_customize->add_control('setting_WP_description_section_price', array(
			'settings' => 'setting_WP_description_section_price',
			'label' => esc_html__('Section Description','windmill'),
			'section' => 'section_WP_' . $_section,
			'type' => 'textarea',
		));

		// shortcode_price
		$wp_customize->add_setting('setting_WP_shortcode_price',array(
			'default' => __get_customizer_default_child('shortcode_price'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => '__utility_sanitize_text'
		));
		$wp_customize->add_control('setting_WP_shortcode_price',array(
			'settings' => 'setting_WP_shortcode_price',
			'label' => esc_html__('Pricing Table Shortcode','windmill'),
			'section' => 'section_WP_' . $_section,
			 'type' => 'text',
		));

	});
