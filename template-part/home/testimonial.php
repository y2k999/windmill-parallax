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
 * 	Echo the testimonial section on front page.
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
 * 	[Child]/lib/customizer/setting/testimonial/xxx.php
*/
$array = array(
	'first' => array(
		'description' => get_theme_mod('setting_WP_description_first_' . $needle),
		'name' => get_theme_mod('setting_WP_name_first_' . $needle),
	),
	'second' => array(
		'description' => get_theme_mod('setting_WP_description_second_' . $needle),
		'name' => get_theme_mod('setting_WP_name_second_' . $needle),
	),
	'third' => array(
		'description' => get_theme_mod('setting_WP_description_third_' . $needle),
		'name' => get_theme_mod('setting_WP_name_third_' . $needle),
	),
);
?>
<!-- ====================
	<home-testimonial>
 ==================== -->
<section id="<?php echo $index; ?>" class="uk-section uk-section-default uk-padding-remove">
<div class="uk-cover-container overlay-wrap">

	<!-- =============== 
		<background image>
	 =============== --> 
	<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="https://picsum.photos/640/650/?image=770 640w,https://picsum.photos/960/650/?image=770 960w,https://picsum.photos/1200/650/?image=770 1200w,https://picsum.photos/2000/650/?image=770 2000w" data-sizes="100vw'" data-src="https://picsum.photos/1200/650/?image=770" alt="" uk-cover uk-img>

	<!-- =============== 
		<testimonials>
	 =============== --> 
	<div class="uk-container uk-position-z-index uk-position-relative uk-section uk-section-xlarge uk-light">
		<div class="uk-grid-small uk-grid-match uk-flex-right"<?php echo apply_filters("_attribute[grid]",''); ?>>

			<div class="uk-width-3-5@m" uk-parallax="y: 50,-50; easing: 0; media:@l">
				<?php
				/**
				 * @since 1.0.1
				 * 	Headline.
				 * @reference (Beans)
				 * 	HTML markup.
				 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
				 * 	https://www.getbeans.io/code-reference/functions/beans_output_e/
				 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
				 * @reference (Uikit)
				 * 	https://getuikit.com/docs/parallax
				 * @reference
				 * 	[Parent]/inc/customizer/option.php
				 * 	[Parent]/inc/utility/general.php
				*/
				beans_open_markup_e("_tag[{$theme}][{$index}][headline]",__utility_get_option('tag_page-title'));
					beans_open_markup_e("_link[{$theme}][{$index}][headline]",'a',array('href' => '#' . $index));
						beans_output_e("_output[{$theme}][{$index}][heading]",get_theme_mod('setting_WP_headline_section_' . $needle));
					beans_close_markup_e("_link[{$theme}][{$index}][headline]",'a');
				beans_close_markup_e("_tag[{$theme}][{$index}][headline]",__utility_get_option('tag_page-title'));

				/**
				 * @since 1.0.1
				 * 	Content.
				 * @reference (Uikit)
				 * 	https://getuikit.com/docs/slider
				*/
				if(get_theme_mod('setting_WP_slideshow_autoplay_' . $needle)) :
					beans_open_markup_e("_effect[{$theme}][{$index}]",'div',array('uk-slider' => 'autoplay: true autoplay-interval: ' . get_theme_mod('setting_WP_slideshow_speed_' . $needle) . ' pause-on-hover: true'));
				else :
					beans_open_markup_e("_effect[{$theme}][{$index}]",'div',array('uk-slider' => 'autoplay-interval: ' . get_theme_mod('setting_WP_slideshow_speed_' . $needle) . ' pause-on-hover: true'));
				endif;

					/**
					 * @since 1.0.1
					 * 	Navigation.
					 * @reference (Uikit)
					 * 	https://getuikit.com/docs/dotnav
					*/
					beans_open_markup_e("_list[{$theme}][{$index}][nav]",'ul',array('class' => 'uk-slider-nav uk-dotnav uk-flex-center uk-margin'));
						beans_open_markup_e("_item[{$theme}][{$index}][nav]",'li');
						beans_close_markup_e("_item[{$theme}][{$index}][nav]",'li');
					beans_close_markup_e("_list[{$theme}][{$index}][nav]",'ul');

					/**
					 * @since 1.0.1
					 * 	Testimonial
					 * @reference (Beans)
					 * 	HTML markup.
					 * 	https://www.getbeans.io/code-reference/functions/beans_output_e/
					 * @reference (Uikit)
					 * 	https://getuikit.com/docs/slider
					*/
					beans_open_markup_e("_unit[{$theme}][{$index}][content]",'div',array('class' => 'uk-slider-container'));
						beans_open_markup_e("_list[{$theme}][{$index}][content]",'ul',array('class' => 'uk-slider-items uk-child-width-1-1'));
							foreach((array)$array as $key => $value){
								beans_open_markup_e("_item[{$theme}][{$index}][content]",'li');
									beans_open_markup_e("_tag[{$theme}][{$index}][content]",__utility_get_option('tag_post-title'),array('class' => 'uk-text-lead uk-margin-small'));
										beans_output_e("_output[{$theme}][{$index}][description]",$value['description']);
									beans_close_markup_e("_tag[{$theme}][{$index}][content]",__utility_get_option('tag_post-title'));

									beans_open_markup_e("_paragraph[{$theme}][{$index}][content]",__utility_get_option('tag_site-description'),array('class' => 'uk-text-meta'));
										beans_output_e("_output[{$theme}][{$index}][name]",$value['name']);
									beans_close_markup_e("_paragraph[{$theme}][{$index}][content]",__utility_get_option('tag_site-description'));
								beans_close_markup_e("_item[{$theme}][{$index}][content]",'li');
							}
						beans_close_markup_e("_list[{$theme}][{$index}][content]",'ul');
					beans_close_markup_e("_unit[{$theme}][{$index}][content]",'div');

				beans_close_markup_e("_effect[{$theme}][{$index}]",'div');
				?>
			</div><!-- .parallax -->

		</div><!-- .grid -->
	</div><!-- .container -->

</div><!-- .cover -->
</section>
