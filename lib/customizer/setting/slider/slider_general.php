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

		// slideshow_speed_slider
		$wp_customize->add_setting('setting_WP_slideshow_speed_slider',array(
			'default' => __get_customizer_default_child('slideshow_speed_slider'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => '__utility_sanitize_number',
		));
		$wp_customize->add_control('setting_WP_slideshow_speed_slider',array(
			'settings' => 'setting_WP_slideshow_speed_slider',
			'label' => esc_html__('Slideshow Speed','windmill'),
			'section' => 'section_WP_' . $_section,
			'type' => 'number',
			'input_attrs' => array(
				'min' => 1000,
				'max' => 10000
			),
		));

		// slideshow_autoplay_slider
		$wp_customize->add_setting('setting_WP_slideshow_autoplay_slider',array(
			'default' => __get_customizer_default_child('slideshow_autoplay_slider'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => '__utility_sanitize_checkbox',
		));
		$wp_customize->add_control('setting_WP_slideshow_autoplay_slider',array(
			'settings' => 'setting_WP_slideshow_autoplay_slider',
			'label' => esc_html__('Slider Auto Play','windmill'),
			'section' => 'section_WP_' . $_section,
			'type' => 'checkbox',
		));

		// scrollspy_speed_slider
		$wp_customize->add_setting('setting_WP_scrollspy_speed_slider',array(
			'default' => __get_customizer_default_child('scrollspy_speed_slider'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => '__utility_sanitize_number',
		));
		$wp_customize->add_control('setting_WP_scrollspy_speed_slider',array(
			'settings' => 'setting_WP_scrollspy_speed_slider',
			'label' => esc_html__('Slider Scrollspy Speed','windmill'),
			'section' => 'section_WP_' . $_section,
			'type' => 'number',
			'input_attrs' => array(
				'min' => 100,
				'max' => 300
			),
		));

		// scrollspy_effect_slider
		$wp_customize->add_setting('setting_WP_scrollspy_effect_slider',array(
			'default' => __get_customizer_default_child('scrollspy_effect_slider'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		));
		$wp_customize->add_control('setting_WP_scrollspy_effect_slider',array(
			'settings' => 'setting_WP_scrollspy_effect_slider',
			'label' => esc_html__('Slider Scrollspy Effect','windmill'),
			'section' => 'section_WP_' . $_section,
			'type'		=> 'select',
			'choices' => array(
				'fade' => esc_html__('Fade','windmill'),
				'slide' => esc_html__('Slide','windmill'),
			)
		));

		// scrollspy_direction_slider
		$wp_customize->add_setting('setting_WP_scrollspy_direction_slider',array(
			'default' => __get_customizer_default_child('scrollspy_direction_slider'),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		));
		$wp_customize->add_control('setting_WP_scrollspy_direction_slider',array(
			'settings' => 'setting_WP_scrollspy_direction_slider',
			'label' => esc_html__('Slider Scrollspy Direction','windmill'),
			'section' => 'section_WP_' . $_section,
			'type'		=> 'select',
			'choices' => array(
				'slide-top' => esc_html__('Slide Top','windmill'),
				'slide-bottom' => esc_html__('Slide Bottom','windmill'),
				'slide-left' => esc_html__('Slide Left','windmill'),
				'slide-right' => esc_html__('Slide Right','windmill'),
			)
		));

	});
