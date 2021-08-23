<?php
/**
 * Register theme customizer settings specific to this child theme.
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
if(class_exists('_customizer_child') === FALSE) :
class _customizer_child
{
/**
 * [TOC]
 * 	__get_instance()
 * 	__construct()
 * 	set_default()
 * 	register_panel()
 * 	register_section()
 * 	register_setting()
 * 	register_control()
*/

	/**
		@access (private)
			Class properties.
		@var (string) $_class
			Name/Identifier with prefix.
		@var (string) $_index
			Name/Identifier without prefix.
		@var (array) $default
			Default values for the theme customizer.
		@var (array) $panel
			Registered instances of WP_Customize_Panel.
		@var (array) $section
			Registered instances of WP_Customize_Section.
	*/
	private static $_class = '';
	private static $_index = '';
	private $default = array();
	private $panel = array();
	private $section = array();

	/**
	 * Traits.
	*/
	use _trait_singleton;


	/* Constructor
	_________________________
	*/
	private function __construct()
	{
		/**
			@access (private)
				Send to Constructor.
			@return (void)
			@reference
				[Parent]/inc/trait/singleton.php
				[Parent]/inc/utility/general.php
		*/

		// Init properties.
		self::$_class = __utility_get_class(get_class($this));
		self::$_index = __utility_get_index(self::$_class);

		$this->default = $this->set_default();

		// Register.
		$this->register_panel();
		$this->register_section();
		$this->register_setting();

		// Init.
		$this->init_theme_mod();

	}// Method


	/* Setter
	_________________________
	*/
	private function set_default()
	{
		/**
			@access (private)
				Set the default values for the theme customizer.
			@return (array)
			@reference
				[Child]/lib/customizer/default.php
		*/
		if(!is_callable('__get_customizer_default_child')){
			get_template_part('lib/customizer/default');
		}
		return __get_customizer_default_child();

	}// Method


	/* Method
	_________________________
	*/
	private function register_panel()
	{
		/**
			@access (private)
				Add a customize panel.
				https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/
			@return (void)
			@reference
				[Child]/lib/customizer/panel.php
		*/
		if(!is_callable('__get_panel_child')){
			get_template_part('lib/customizer/panel');
		}
		$this->panel = __get_panel_child();

	}// Method


	/* Method
	_________________________
	*/
	private function register_section()
	{
		/**
			@access (private)
				Add a customize section.
				https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
			@return (void)
		*/
		if(empty($this->panel)){return;}

		foreach($this->panel as $key => $value){
			get_template_part('lib/customizer/section/' . $key);
			$method = '__get_section_child_' . $key;
			$this->section[$key] = call_user_func($method);
		}

	}// Method


	/* Method
	_________________________
	*/
	private function register_setting()
	{
		/**
			@access (private)
				Add a customize setting.
				https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
			@return (void)
		*/
		if(empty($this->section)){return;}

		foreach($this->section as $key => $value){
			foreach($value as $needle => $attr){
				get_template_part('lib/customizer/setting/' . $key . DIRECTORY_SEPARATOR . $needle);
			}
		}

	}// Method


	/* Method
	_________________________
	*/
	private function init_theme_mod()
	{
		/**
			@access (private)
				Set the initial value for the theme customizer.
			@param (WP_Customize_Manager) $wp_customize
				WP_Customize_Manager instance.
			@return (void)
		*/

		/**
		 * @reference (WP)
		 * 	Retrieves all theme modifications.
		 * 	https://developer.wordpress.org/reference/functions/get_theme_mods/
		*/
		$theme_mods = get_theme_mods();

		foreach($this->default as $key => $value){
			if(!array_key_exists('setting_WP_' . $key,$theme_mods)){
				/**
				 * [NOTE]
				 * 	"WP" stands for Windmill Parallax.
				 * 
				 * @reference (WP)
				 * 	Updates theme modification value for the current theme.
				 * 	https://developer.wordpress.org/reference/functions/set_theme_mod/
				*/
				set_theme_mod('setting_WP_' . $key,$value);
			}
		}

	}// Method


}// Class
endif;
// new _customizer_child();
_customizer_child::__get_instance();
