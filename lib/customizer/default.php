<?php
/**
 * Return default values of theme customizer.
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
		@access (public)
			Return the default values of theme customizer.
		@param (string) $needle
			Theme modification name.
		@return (mixed)
			Theme modification value.
		@reference
			[Plugin]/beans_extension/admin/tab/image.php
			[Plugin]/beans_extension/include/constant.php
	*/
	if(function_exists('__get_customizer_default_child') === FALSE) :
	function __get_customizer_default_child($needle = '')
	{
		$default = array(
			/**
			 * @since 1.0.1
			 * 	Slider Section.
			 * @reference
			 * 	[Child]/template-part/home/slider.php
			*/
			// General setting
			'slideshow_speed_slider' => 6000,
			'slideshow_autoplay_slider' => TRUE,
			'scrollspy_speed_slider' => 150,
			'scrollspy_effect_slider' => 'fade',
			'scrollspy_direction_slider' => '',
			// No.1
			'image_first_slider' => esc_url(trailingslashit(get_stylesheet_directory_uri()) . 'asset/image/slider2-min.jpg'),
			'heading_first_slider' => esc_html__('Innovation in your hands No.1.','windmill'),
			'description_first_slider' => esc_html__('Tempor incididunt ut labore et dolore magna aliqua..','windmill'),
			'link_first_slider' => '#',
			'button_first_slider' => esc_html('LEARN MORE'),
			// No.2
			'image_second_slider' => esc_url(trailingslashit(get_stylesheet_directory_uri()) . 'asset/image/slider4-min.jpg'),
			'heading_second_slider' => esc_html__('Innovation in your hands No.2.','windmill'),
			'description_second_slider' => esc_html__('Vivamus sed consequat urna. Fusce vitae urna sed ante placerat iaculis.','windmill'),
			'link_second_slider' => '#',
			'button_second_slider' => esc_html('CONTINUE'),
			// No.3
			'image_third_slider' => esc_url(trailingslashit(get_stylesheet_directory_uri()) . 'asset/image/slider6-min.jpg'),
			'heading_third_slider' => esc_html__('Innovation in your hands No.3.','windmill'),
			'description_third_slider' => esc_html__('Ut enim ad minim veniam,quis nostrud exercitation ullamco.','windmill'),
			'link_third_slider' => '#',
			'button_third_slider' => esc_html('BUY NOW!!!'),

			/**
			 * @since 1.0.1
			 * 	Service Section.
			 * @reference
			 * 	[Child]/template-part/home/service.php
			*/
			// General setting
			'headline_section_service' => esc_html__('Services','windmill'),
			'description_section_service' => esc_html__('Know the behavior of your potential customers.','windmill'),
			'scrollspy_speed_service' => 250,
			'scrollspy_effect_service' => 'slide',
			'scrollspy_direction_service' => 'slide-bottom',
			// No.1
			'heading_first_service' => esc_html__('Responsive Design','windmill'),
			'description_first_service' => esc_html__('Vivamus sed consequat urna. Fusce vitae urna sed ante placerat iaculis. Suspendisse potenti. Pellentesque quis fringilla libero. In hac habitasse platea dictumst.','windmill'),
			'link_first_service' => '#',
			'icon_first_service' => 'twitter',
			// No.2
			'heading_second_service' => esc_html__('E-Commerce','windmill'),
			'description_second_service' => esc_html__('Ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.','windmill'),
			'link_second_service' => '#',
			'icon_second_service' => 'github',
			// No.3
			'heading_third_service' => esc_html__('Web Security','windmill'),
			'description_third_service' => esc_html__('Know the behavior of your potential customers.Donec eu libero sit amet quam egestas semper.','windmill'),
			'link_third_service' => '#',
			'icon_third_service' => 'youtube',

			/**
			 * @since 1.0.1
			 * 	Testimonial Section.
			 * @reference
			 * 	[Child]/template-part/home/testimonial.php
			*/
			// General setting
			'headline_section_testimonial' => esc_html__('Testimonials','windmill'),
			'slideshow_speed_testimonial' => 6000,
			'slideshow_autoplay_testimonial' => TRUE,
			// No.1
			'description_first_testimonial' => esc_html__('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur','windmill'),
			'name_first_testimonial' => esc_html__('Lorena Smith, founder of Some Cool Startup.','windmill'),
			// No.2
			'description_second_testimonial' => esc_html__('Aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur','windmill'),
			'name_second_testimonial' => esc_html__('Curabitur consequat lectus a dolor interdum semper.','windmill'),
			// No.3
			'description_third_testimonial' => esc_html__('Irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur','windmill'),
			'name_third_testimonial' => esc_html__('Excepteur sint occaecat cupidatat non proident.','windmill'),

			/**
			 * @since 1.0.1
			 * 	Blog Section.
			 * @reference
			 * 	[Child]/template-part/home/blog.php
			*/
			// General setting
			'headline_section_blog' => esc_html__('Latest Posts','windmill'),
			'description_section_blog' => esc_html__('Ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.','windmill'),
			'scrollspy_speed_blog' => 250,
			'scrollspy_effect_blog' => 'fade',
			'scrollspy_direction_blog' => 'slide-right',

			/**
			 * @since 1.0.1
			 * 	Team Section.
			 * @reference
			 * 	[Child]/template-part/home/team.php
			*/
			// General setting
			'headline_section_team' => esc_html__('Our Amazing Team','windmill'),
			'description_section_team' => esc_html__('Lorem ipsum dolor sit amet consectetur.','windmill'),
			'scrollspy_speed_team' => 150,
			'scrollspy_effect_team' => 'slide',
			'scrollspy_direction_team' => 'slide-left',
			// No.1
			'name_first_team' => esc_html__('Kay Garland','windmill'),
			'link_first_team' => '#',
			'assign_first_team' => esc_html__('Lead Designer','windmill'),
			'image_first_team' => esc_url(trailingslashit(get_stylesheet_directory_uri()) . 'asset/image/team-placeholder-min.jpg'),
			'description_first_team' => esc_html__('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur','windmill'),
			// No.2
			'name_second_team' => esc_html__('Larry Parker','windmill'),
			'link_second_team' => '#',
			'assign_second_team' => esc_html__('Lead Marketer','windmill'),
			'image_second_team' => esc_url(trailingslashit(get_stylesheet_directory_uri()) . 'asset/image/team-placeholder-min.jpg'),
			'description_second_team' => esc_html__('Aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur','windmill'),
			// No.3
			'name_third_team' => esc_html__('Diana Pertersen','windmill'),
			'link_third_team' => '#',
			'assign_third_team' => esc_html__('Lead Developer','windmill'),
			'image_third_team' => esc_url(trailingslashit(get_stylesheet_directory_uri()) . 'asset/image/team-placeholder-min.jpg'),
			'description_third_team' => esc_html__('Irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur','windmill'),

			/**
			 * @since 1.0.1
			 * 	Price Section.
			 * @reference
			 * 	[Child]/template-part/home/price.php
			*/
			// General setting
			'headline_section_price' => esc_html__('Price Table','windmill'),
			'description_section_price' => esc_html__('Our Product is the easiest way for teams to track their works progress. Our advance plans give you more tools to get the job done.','windmill'),
			'shortcode_price' => '',
			// No.1
			'price_first_price' => 12,
			'included_first_price' => 'two',
			'storage_first_price' => 20,
			'support_first_price' => 'email-limitted',
			'description_first_price' => esc_html__('A beer jar','windmill'),
			// No.2
			'price_second_price' => 148,
			'included_second_price' => 'ten',
			'storage_second_price' => 60,
			'support_second_price' => 'email',
			'description_second_price' => esc_html__('A beer jar with beer inside!','windmill'),
			// No.3
			'price_third_price' => 299,
			'included_third_price' => 'unlimited',
			'storage_third_price' => 200,
			'support_third_price' => 'helpdesk',
			'description_third_price' => esc_html__('A beer jar with beer inside!','windmill'),

			/**
			 * @since 1.0.1
			 * 	Contact Section.
			 * @reference
			 * 	[Child]/template-part/home/contact.php
			*/
			// General setting
			'shortcode_contact' => '',
		);

		/**
		 * @reference (WP)
		 * 	Retrieves theme modification value for the current theme.
		 * 	https://developer.wordpress.org/reference/functions/get_theme_mod/
		 * 	Retrieves all theme modifications.
		 * 	https://developer.wordpress.org/reference/functions/get_theme_mods/
		*/
		if(isset($needle) && array_key_exists($needle,$default)){
			return $default[$needle];
		}
		else{
			return $default;
		}

	}// Method
	endif;
