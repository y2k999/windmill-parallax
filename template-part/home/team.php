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
 * 	Echo the team section on front page.
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
 * 	[Child]/lib/customizer/setting/team/xxx.php
 * 	[Parent]/inc/utility/general.php
*/
$array = array(
	'first' => array(
		'name' => get_theme_mod('setting_WP_name_first_' . $needle),
		'link' => get_theme_mod('setting_WP_link_first_' . $needle),
		'assign' => get_theme_mod('setting_WP_assign_first_' . $needle),
		'image' => get_theme_mod('setting_WP_image_first_' . $needle),
		'description' => get_theme_mod('setting_WP_description_first_' . $needle),
	),
	'second' => array(
		'name' => get_theme_mod('setting_WP_name_second_' . $needle),
		'link' => get_theme_mod('setting_WP_link_second_' . $needle),
		'assign' => get_theme_mod('setting_WP_assign_second_' . $needle),
		'image' => get_theme_mod('setting_WP_image_second_' . $needle),
		'description' => get_theme_mod('setting_WP_description_second_' . $needle),
	),
	'third' => array(
		'name' => get_theme_mod('setting_WP_name_third_' . $needle),
		'link' => get_theme_mod('setting_WP_link_third_' . $needle),
		'assign' => get_theme_mod('setting_WP_assign_third_' . $needle),
		'image' => get_theme_mod('setting_WP_image_third_' . $needle),
		'description' => get_theme_mod('setting_WP_description_third_' . $needle),
	),
);
?>
<!-- ====================
	<home-team>
 ==================== -->
<section id="<?php echo $index; ?>" class="uk-section uk-section-default">
<div class="uk-container">

	<!-- =============== 
		<headline>
	 =============== --> 
	<header class="uk-width-auto uk-padding-small uk-text-center" uk-scrollspy="cls: uk-animation-fade; target: > *; delay: <?php echo get_theme_mod('setting_WP_scrollspy_speed_' . $needle); ?>">
		<?php get_template_part('template-part/misc/headline',NULL,array('needle' => $needle)); 	?>
	</header>

	<!-- =============== 
		<navigation>
	 =============== --> 
	<nav class="uk-width-auto uk-margin-large" role="navigation">
		<ul class="uk-subnav uk-subnav-pill uk-flex uk-flex-center" uk-switcher="connect: .uk-switcher; animation: uk-animation-fade">
			<?php
			foreach(array(
				'name_first_team',
				'name_second_team',
				'name_third_team',
			) as $item){
				/**
				 * @reference (Beans)
				 * 	HTML markup.
				 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
				 * 	https://www.getbeans.io/code-reference/functions/beans_output_e/
				 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
				 * @reference (Uikit)
				 * 	https://getuikit.com/docs/subnav
				 * 	https://getuikit.com/docs/switcher
				*/
				beans_open_markup_e("_item[{$theme}][{$index}][nav]",'li');
					beans_open_markup_e("_link[{$theme}][{$index}][nav]",'a',array(
						'href' => '#' . $index,
						'class' => 'uk-border-pill',
					));
						beans_output_e("_output[{$theme}][{$index}][nav]",get_theme_mod('setting_WP_' . $item));
					beans_close_markup_e("_link[{$theme}][{$index}][nav]",'a');
				beans_close_markup_e("_item[{$theme}][{$index}][nav]",'li');
			}
			?>
		</ul>
	</nav>

	<!-- =============== 
		<content>
	 =============== --> 
	<div class="uk-grid-small uk-grid-match uk-flex-center uk-padding-remove-top" uk-scrollspy="target: > div; delay: 150; cls: uk-animation-slide-bottom-small" uk-grid>
		<ul class="uk-switcher uk-margin-small">
			<?php
			foreach((array)$array as $key => $value){
				/**
				 * @reference (Beans)
				 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
				 * 	https://www.getbeans.io/code-reference/functions/beans_selfclose_markup_e/
				 * 	https://www.getbeans.io/code-reference/functions/beans_output_e/
				 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
				 * @reference (Uikit)
				 * 	https://getuikit.com/docs/switcher
				*/
				beans_open_markup_e("_item[{$theme}][{$index}][content]",'li');

					beans_open_markup_e("_grid[{$theme}][{$index}][content]",'div',array(
						'class' => 'uk-grid uk-child-width-1-2@m uk-flex-middle',
						'uk-scrollspy' => 'target: > div; cls: uk-animation-slide-left-medium',
						'uk-grid' => '',
					));
						beans_open_markup_e("_figure[{$theme}][{$index}][content]",'div',array('class' => 'uk-padding uk-text-center'));
							/**
							 * @since 1.0.1
							 * 	Member Avatar.
							 * @reference (Uikit)
							 * 	https://getuikit.com/docs/image
							 * 	https://getuikit.com/docs/transition
							 * 	https://getuikit.com/docs/utility
							*/
							beans_open_markup_e("_link[{$theme}][{$index}][content]",'a',array('href' => $value['link']));
								beans_selfclose_markup_e("_image[{$theme}][{$index}][content]",'img',array(
									'class' => 'uk-border-circle uk-transition-scale-up uk-transition-opaque',
									'data-src' => $value['image'],
									'uk-img' => '',
								));
							beans_close_markup_e("_link[{$theme}][{$index}][content]",'a');
						beans_close_markup_e("_figure[{$theme}][{$index}][content]",'div');

						beans_open_markup_e("_effect[{$theme}][{$index}][content]",'div',array(
							'class' => 'uk-padding',
							'uk-scrollspy-class' => 'uk-animation-slide-right-medium',
						));
							/**
							 * @since 1.0.1
							 * 	Member Name.
							 * @reference
							 * 	[Parent]/inc/customizer/option.php
							 * 	[Parent]/inc/utility/general.php
							*/
							beans_open_markup_e("_tag[{$theme}][{$index}][content]",__utility_get_option('tag_list-title'),array('class' => 'uk-text-primary'));
								beans_output_e("_output[{$theme}][{$index}][content][name]",$value['name']);

								beans_open_markup_e("_label[{$theme}][{$index}][content]",'span',array('class' => 'uk-margin-left uk-text-secondary uk-text-small'));
									beans_output_e("_output[{$theme}][{$index}][content][assign]",$value['assign']);
								beans_close_markup_e("_label[{$theme}][{$index}][content]",'span');

							beans_close_markup_e("_tag[{$theme}][{$index}][content]",__utility_get_option('tag_list-title'));

							/**
							 * @since 1.0.1
							 * 	Member Profile.
							*/
							beans_open_markup_e("_paragraph[{$theme}][{$index}][content]",__utility_get_option('tag_site-description'));
								beans_output_e("_output[{$theme}][{$index}][content][description]",$value['description']);
							beans_close_markup_e("_paragraph[{$theme}][{$index}][content]",__utility_get_option('tag_site-description'));

						beans_close_markup_e("_effect[{$theme}][{$index}][content]",'div');
					beans_close_markup_e("_grid[{$theme}][{$index}][content]",'div');

				beans_close_markup_e("_item[{$theme}][{$index}][content]",'li');
			}
			?>
		</ul>
	</div><!-- .grid -->

</div><!-- .container -->
</section>
