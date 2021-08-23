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

		// name_first_team
		$wp_customize->add_setting('setting_WP_name_first_team',array(
			'default' => __get_customizer_default_child('name_first_team'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => '__utility_sanitize_text'
		));
		$wp_customize->add_control('setting_WP_name_first_team',array(
			'settings' => 'setting_WP_name_first_team',
			'label' => esc_html__('Member Name No.1','windmill'),
			'section' => 'section_WP_' . $_section,
			 'type' => 'text',
		));

		// link_first_team
		$wp_customize->add_setting('setting_WP_link_first_team',array(
			'default' => __get_customizer_default_child('link_first_team'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => '__utility_sanitize_text'
		));
		$wp_customize->add_control('setting_WP_link_first_team',array(
			'settings' => 'setting_WP_link_first_team',
			'label' => esc_html__('Member Link No.1','windmill'),
			'section' => 'section_WP_' . $_section,
			 'type' => 'text',
		));

		// assign_first_team
		$wp_customize->add_setting('setting_WP_assign_first_team',array(
			'default' => __get_customizer_default_child('assign_first_team'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => '__utility_sanitize_text'
		));
		$wp_customize->add_control('setting_WP_assign_first_team',array(
			'settings' => 'setting_WP_assign_first_team',
			'label' => esc_html__('Designation No.1','windmill'),
			'section' => 'section_WP_' . $_section,
			 'type' => 'text',
		));

		// image_first_team
		$wp_customize->add_setting('setting_WP_image_first_team',array(
			'default' => __get_customizer_default_child('image_first_team'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => '__utility_sanitize_upload'
		));
		/**
			@reference (WP)
				Customize Image Control class.
				https://developer.wordpress.org/reference/classes/wp_customize_image_control/
		*/
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'setting_WP_image_first_team',array(
			'settings' => 'setting_WP_image_first_team',
			'label' => esc_html__('Avatar No.1','windmill'),
			'section' => 'section_WP_' . $_section,
			'type'	=> 'image',
		)));

		// description_first_team
		$wp_customize->add_setting('setting_WP_description_first_team',array(
			'default' => __get_customizer_default_child('description_first_team'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => '__utility_sanitize_textarea'
		));
		$wp_customize->add_control('setting_WP_description_first_team', array(
			'settings' => 'setting_WP_description_first_team',
			'label' => esc_html__('Introduction No.1','windmill'),
			'section' => 'section_WP_' . $_section,
			'type' => 'textarea',
		));

	});
