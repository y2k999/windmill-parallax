<?php
/**
 * The template for displaying landing page component.
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

// Set identifiers for this template.
$needle = basename(__FILE__,'.php');
$index = 'home-' . $needle;

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
 * @since 1.0.1
 * 	Echo the slider section on front page.
 * @reference (Uikit)
 * 	https://getuikit.com/docs/container
 * 	https://getuikit.com/docs/grid
 * 	https://getuikit.com/docs/scrollspy
 * 	https://getuikit.com/docs/section
 * 	https://getuikit.com/docs/width
 * @reference (WP)
 * 	Retrieves theme modification value for the current theme.
 * 	https://developer.wordpress.org/reference/functions/get_theme_mod/
 * @reference
 * 	[Child]/lib/customizer/setting/slider/xxx.php
*/
$array = array(
	'first' => array(
		'image' => get_theme_mod('setting_WP_image_first_' . $needle),
		'heading' => get_theme_mod('setting_WP_heading_first_' . $needle),
		'description' => get_theme_mod('setting_WP_description_first_' . $needle),
		'link' => get_theme_mod('setting_WP_link_first_' . $needle),
		'button' => get_theme_mod('setting_WP_button_first_' . $needle),
	),
	'second' => array(
		'image' => get_theme_mod('setting_WP_image_second_' . $needle),
		'heading' => get_theme_mod('setting_WP_heading_second_' . $needle),
		'description' => get_theme_mod('setting_WP_description_second_' . $needle),
		'link' => get_theme_mod('setting_WP_link_second_' . $needle),
		'button' => get_theme_mod('setting_WP_button_second_' . $needle),
	),
	'third' => array(
		'image' => get_theme_mod('setting_WP_image_third_' . $needle),
		'heading' => get_theme_mod('setting_WP_heading_third_' . $needle),
		'description' => get_theme_mod('setting_WP_description_third_' . $needle),
		'link' => get_theme_mod('setting_WP_link_third_' . $needle),
		'button' => get_theme_mod('setting_WP_button_third_' . $needle),
	),
);
?>
<!-- ====================
	<home-slider>
 ==================== -->
<section id="<?php echo esc_attr($index); ?>" class="uk-section uk-section-default uk-padding-remove">
<div class="uk-container uk-container-expand uk-padding-remove">

<?php if(get_theme_mod('setting_WP_slideshow_autoplay_' . $needle)) : ?>
	<div uk-slider="autoplay: true autoplay-interval: <?php echo get_theme_mod('setting_WP_slideshow_speed_' . $needle); ?> pause-on-hover: true">
<?php else : ?>
	<div uk-slider="autoplay-interval: <?php echo get_theme_mod('setting_WP_slideshow_speed_' . $needle); ?> pause-on-hover: true'">
<?php endif; ?>

		<div class="uk-position-relative">
			<?php
			/**
			 * @reference (Beans)
			 * 	HTML markup.
			 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
			 * 	https://www.getbeans.io/code-reference/functions/beans_output_e/
			 * 	https://www.getbeans.io/code-reference/functions/beans_selfclose_markup_e/
			 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
			 * @reference (Uikit)
			 * 	https://getuikit.com/docs/slider
			*/
			beans_open_markup_e("_unit[{$theme}][{$index}]",'div',array('class' => 'uk-slider-container'));
				beans_open_markup_e("_list[{$theme}][{$index}]",'ul',array('class' => 'uk-slider-items uk-child-width-auto uk-inline'));
					foreach((array)$array as $key => $value){
						beans_open_markup_e("_item[{$theme}][{$index}]",'li');
							/**
							 * @since 1.0.1
							 * 	Overlay caption.
							 * @reference (Uikit)
							 * 	https://getuikit.com/docs/button
							 * 	https://getuikit.com/docs/overlay
							 * 	https://getuikit.com/docs/position
							 * 	https://getuikit.com/docs/scrollspy
							 * @reference
							 * 	[Parent]/inc/customizer/option.php
							 * 	[Parent]/inc/utility/general.php
							*/
							beans_open_markup_e("_overlay[{$theme}][{$index}]",'div',array(
								'class' => 'uk-padding uk-overlay uk-position-center-left',
								'uk-scrollspy' => 'cls: uk-animation-slide-right-medium; target: > *; delay: 150',
							));
								// Title.
								beans_open_markup_e("_tag[{$theme}][{$index}]",__utility_get_option('tag_page-title'),array('class' => 'uk-text-primary'));
									beans_open_markup_e("_link[{$theme}][{$index}]",'a',array('href' => $value['link']));
										beans_output_e("_output[{$theme}][{$index}][{$key}][heading]",$value['heading']);
									beans_close_markup_e("_link[{$theme}][{$index}]",'a');
								beans_close_markup_e("_tag[{$theme}][{$index}]",__utility_get_option('tag_page-title'));
								// Description.
								beans_open_markup_e("_paragraph[{$theme}][{$index}]",__utility_get_option('tag_site-description'),array('class' => 'subtitle-text uk-visible@s'));
									beans_output_e("_output[{$theme}][{$index}][{$key}][description]",$value['description']);
								beans_close_markup_e("_paragraph[{$theme}][{$index}]",__utility_get_option('tag_site-description'));
								// Button.
								beans_open_markup_e("_button[{$theme}][{$index}]",'a',array(
									'class' => 'uk-button uk-button-primary uk-border-pill',
									'href' => $value['link'],
									'title' => stripslashes($value['button']),
									'uk-scrollspy-class' => 'uk-animation-fade',
								));
									beans_output_e("_output[{$theme}][{$index}][{$key}][button]",stripslashes($value['button']));
								beans_close_markup_e("_button[{$theme}][{$index}]",'a');
							beans_close_markup_e("_overlay[{$theme}][{$index}]",'div');
							/**
							 * @since 1.0.1
							 * 	Slider image.
							 * @reference (Uikit)
							 * 	https://getuikit.com/docs/image
							*/
							beans_selfclose_markup_e("_src[{$theme}][{$index}][{$key}]",'img',array(
								'data-src' => $value['image'],
								'uk-img' => '',
							));
						beans_close_markup_e("_item[{$theme}][{$index}]",'li');
					}
				beans_close_markup_e("_list[{$theme}][{$index}]",'ul');
			beans_close_markup_e("_unit[{$theme}][{$index}]",'div');
			/**
			 * @since 1.0.1
			 * 	Pagination.
			 * @reference (Uikit)
			 * 	https://getuikit.com/docs/dotnav
			 * 	https://getuikit.com/docs/slidenav
			*/
			beans_open_markup_e("_list[{$theme}][{$index}][nav]",'ul',array('class' => 'uk-slider-nav uk-dotnav uk-flex-center uk-margin'));
				beans_open_markup_e("_item[{$theme}][{$index}][nav]",'li');
				beans_close_markup_e("_item[{$theme}][{$index}][nav]",'li');
			beans_close_markup_e("_list[{$theme}][{$index}][nav]",'ul');
			?>
		</div><!-- .position -->
	</div>

</div><!-- .container -->
</section>
