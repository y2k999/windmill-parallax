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

		// price_third_price
		$wp_customize->add_setting('setting_WP_price_third_price',array(
			'default' => __get_customizer_default_child('price_third_price'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => '__utility_sanitize_number',
		));
		$wp_customize->add_control('setting_WP_price_third_price',array(
			'settings' => 'setting_WP_price_third_price',
			'label' => esc_html__('Price','windmill'),
			'section' => 'section_WP_' . $_section,
			'type' => 'number',
			'input_attrs' => array(
				'min' => 1,
				'max' => 1000,
				'step' => 1,
			),
		));

		// included_third_price
		$wp_customize->add_setting('setting_WP_included_third_price',array(
			'default' => __get_customizer_default_child('included_third_price'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		));
		$wp_customize->add_control('setting_WP_included_third_price',array(
			'settings' => 'setting_WP_included_third_price',
			'label' => esc_html__('Number of users included','windmill'),
			'section' => 'section_WP_' . $_section,
			'type'		=> 'select',
			'choices' => array(
				'two' => esc_html__('2 users included','windmill'),
				'ten' => esc_html__('10 users included','windmill'),
				'unlimited' => esc_html__('Unlimited users','windmill'),
			)
		));

		// storage_third_price
		$wp_customize->add_setting('setting_WP_storage_third_price',array(
			'default' => __get_customizer_default_child('storage_third_price'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => '__utility_sanitize_number',
		));
		$wp_customize->add_control('setting_WP_storage_third_price',array(
			'settings' => 'setting_WP_storage_third_price',
			'label' => esc_html__('Size of storage','windmill'),
			'section' => 'section_WP_' . $_section,
			'type' => 'number',
			'input_attrs' => array(
				'min' => 10,
				'max' => 100,
				'step' => 10,
			),
		));

		// support_third_price
		$wp_customize->add_setting('setting_WP_support_third_price',array(
			'default' => __get_customizer_default_child('support_third_price'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		));
		$wp_customize->add_control('setting_WP_support_third_price',array(
			'settings' => 'setting_WP_support_third_price',
			'label' => esc_html__('Range of support','windmill'),
			'section' => 'section_WP_' . $_section,
			'type'		=> 'select',
			'choices' => array(
				'email-limitted' => esc_html__('Email support (Limited)','windmill'),
				'email' => esc_html__('Email support','windmill'),
				'helpdesk' => esc_html__('Help center access','windmill'),
			)
		));

		// description_third_price
		$wp_customize->add_setting('setting_WP_description_third_price',array(
			'default' => __get_customizer_default_child('description_third_price'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => '__utility_sanitize_textarea'
		));
		$wp_customize->add_control('setting_WP_description_third_price', array(
			'settings' => 'setting_WP_description_third_price',
			'label' => esc_html__('Introduction','windmill'),
			'section' => 'section_WP_' . $_section,
			'type' => 'textarea',
		));

	});
