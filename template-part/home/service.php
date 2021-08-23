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
 * 	Echo the service section on front page.
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
 * 	[Child]/lib/customizer/setting/service/xxx.php
*/
$array = array(
	'first' => array(
		'heading' => get_theme_mod('setting_WP_heading_first_' . $needle),
		'description' => get_theme_mod('setting_WP_description_first_' . $needle),
		'link' => get_theme_mod('setting_WP_link_first_' . $needle),
		'icon' => get_theme_mod('setting_WP_icon_first_' . $needle),
	),
	'second' => array(
		'heading' => get_theme_mod('setting_WP_heading_second_' . $needle),
		'description' => get_theme_mod('setting_WP_description_second_' . $needle),
		'link' => get_theme_mod('setting_WP_link_second_' . $needle),
		'icon' => get_theme_mod('setting_WP_icon_second_' . $needle),
	),
	'third' => array(
		'heading' => get_theme_mod('setting_WP_heading_third_' . $needle),
		'description' => get_theme_mod('setting_WP_description_third_' . $needle),
		'link' => get_theme_mod('setting_WP_link_third_' . $needle),
		'icon' => get_theme_mod('setting_WP_icon_third_' . $needle),
	),
);
?>
<!-- ====================
	<home-service>
 ==================== -->
<section id="<?php echo $index; ?>" class="uk-section uk-section-default">
<div class="uk-container">

	<!-- =============== 
		<section headline>
	 =============== --> 
	<header class="uk-width-auto uk-padding-small uk-text-center" uk-scrollspy="cls: uk-animation-fade; target: > *; delay: <?php echo get_theme_mod('setting_WP_scrollspy_speed_' . $needle); ?>">
		<?php get_template_part('template-part/misc/headline',NULL,array('needle' => $needle)); 	?>
	</header>

	<!-- =============== 
		<section content>
	 =============== --> 
	<div class="uk-grid-large uk-grid-match uk-child-width-auto@s uk-child-width-1-3@m" uk-scrollspy="target: > div; delay: 150; cls: uk-animation-slide-bottom-small"<?php echo apply_filters("_attribute[grid]",''); ?>>
		<?php
		foreach((array)$array as $key => $value){
			/**
			 * @reference (Beans)
			 * 	HTML markup.
			 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
			 * 	https://www.getbeans.io/code-reference/functions/beans_output_e/
			 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
			 * @reference (Uikit)
			 * 	https://getuikit.com/docs/height
			 * 	https://getuikit.com/docs/icon
			 * @reference
			 * 	[Child]/lib/color.php
			 * 	[Parent]/inc/setup/constant.php
			 * 	[Parent]/inc/utility/general.php
			*/
			beans_open_markup_e("_unit[{$theme}][{$index}][content]",'div',array('class' => 'uk-text-center uk-height-large'));
				// Icon
				$icon = !$value['icon'] ? 'wordpress' : $value['icon'];
				beans_open_markup_e("_icon[{$theme}][{$index}][content]",'a',array(
					'href' => $value['link'],
					'uk-icon' => 'icon: ' . $value['icon'] . ' ; ratio: 4',
					'style' => 'color: ' . __utility_get_color($value['icon']) . ';',
				));
				beans_close_markup_e("_icon[{$theme}][{$index}][content]",'a');

				/**
				 * @since 1.0.1
				 * 	Section Headline.
				 * @reference (Uikit)
				 * 	https://getuikit.com/docs/text
				*/
				beans_open_markup_e("_link[{$theme}][{$index}][content]",'a',array('href' => $value['link']));
					beans_open_markup_e("_tag[{$theme}][{$index}][content]",__utility_get_option('tag_widget-title'),array('class' => 'uk-text-primary'));
						beans_output_e("_output[{$theme}][{$index}][{$key}][heading]",$value['heading']);
					beans_close_markup_e("_tag[{$theme}][{$index}][content]",__utility_get_option('tag_widget-title'));
				beans_close_markup_e("_link[{$theme}][{$index}][content]",'a');

				/**
				 * @since 1.0.1
				 * 	Section Description.
				*/
				beans_open_markup_e("_paragraph[{$theme}][{$index}][content]",__utility_get_option('tag_site-description'),array('class' => 'uk-text-muted'));
					beans_output_e("_output[{$theme}][{$index}][{$key}][description]",$value['description']);
				beans_close_markup_e("_paragraph[{$theme}][{$index}][content]",__utility_get_option('tag_site-description'));

			beans_close_markup_e("_unit[{$theme}][{$index}][content]",'div');
		}
		?>
	</div><!-- .grid -->

</div><!-- .container -->
</section>
