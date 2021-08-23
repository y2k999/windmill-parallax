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
 * 	Echo the pricetable section on front page.
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
 * 	[Child]/lib/customizer/setting/price/xxx.php
*/
$list = array(
	'first' => array(
		'name' => esc_html__('Personal','windmill'),
		'price' => get_theme_mod('setting_WP_price_first_' . $needle),
		'included' => get_theme_mod('setting_WP_included_first_' . $needle),
		'storage' => get_theme_mod('setting_WP_storage_first_' . $needle),
		'support' => get_theme_mod('setting_WP_support_first_' . $needle),
		'description' => get_theme_mod('setting_WP_description_first_' . $needle),
	),
	'second' => array(
		'name' => esc_html__('Professional','windmill'),
		'price' => get_theme_mod('setting_WP_price_second_' . $needle),
		'included' => get_theme_mod('setting_WP_included_second_' . $needle),
		'storage' => get_theme_mod('setting_WP_storage_second_' . $needle),
		'support' => get_theme_mod('setting_WP_support_second_' . $needle),
		'description' => get_theme_mod('setting_WP_description_second_' . $needle),
	),
	'third' => array(
		'name' => esc_html__('Corporate','windmill'),
		'price' => get_theme_mod('setting_WP_price_third_' . $needle),
		'included' => get_theme_mod('setting_WP_included_third_' . $needle),
		'storage' => get_theme_mod('setting_WP_storage_third_' . $needle),
		'support' => get_theme_mod('setting_WP_support_third_' . $needle),
		'description' => get_theme_mod('setting_WP_description_third_' . $needle),
	),
);
?>
<!-- ====================
	<home-service>
 ==================== -->
<section id="<?php echo $index; ?>" class="uk-section uk-section-muted uk-padding-remove-bottom">
<div class="uk-container uk-container-small">

	<!-- =============== 
		<section headline>
	 =============== --> 
	<header class="uk-width-auto uk-padding-small uk-text-center" uk-scrollspy="cls: uk-animation-fade; target: > *; delay: <?php echo get_theme_mod('setting_WP_scrollspy_speed_' . $needle); ?>">
		<?php get_template_part('template-part/misc/headline',NULL,array('needle' => $needle)); 	?>
	</header>

	<!-- =============== 
		<section content>
	 =============== --> 
	<div class="uk-grid uk-grid-small uk-child-width-1-3@m uk-margin-medium-top uk-grid-match" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div > .uk-card; delay: 200"<?php echo apply_filters("_attribute[grid]",''); ?>>
		<?php
		/**
		 * [SAMPLE]
		 * 	In this sample, check Pricing Table by Supsystic plugin.
		 * 	https://wordpress.org/plugins/pricing-table-by-supsystic/
		 * 
		 * @reference (Uikit)
		 * 	https://getuikit.com/docs/animation
		 * @reference
		 * 	[Parent]/inc/utility/general.php
		*/
		if(__utility_is_active_plugin('pts/pts.php')){
			/**
			 * @reference (WP)
			 * 	Whether a registered shortcode exists named $tag.
			 * 	https://developer.wordpress.org/reference/functions/shortcode_exists/
			*/
			if(shortcode_exists(get_theme_mod('setting_WP_shortcode_' . $needle))) :
				/**
				 * @reference (WP)
				 * 	Search content for shortcodes and filter shortcodes through their hooks.
				 * 	https://developer.wordpress.org/reference/functions/do_shortcode/
				*/
				echo do_shortcode(get_theme_mod('setting_WP_shortcode_' . $needle));
			endif;
		}
		else{
			foreach((array)$list as $key => $value){
				/**
				 * @reference (Beans)
				 * 	HTML markup.
				 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
				 * 	https://www.getbeans.io/code-reference/functions/beans_output_e/
				 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
				 * @reference (Uikit)
				 * 	https://getuikit.com/docs/card
				 * 	https://getuikit.com/docs/flex
				 * 	https://getuikit.com/docs/scrollspy
				 * @reference
				 * 	[Parent]/inc/customizer/option.php
				 * 	[Parent]/inc/utility/general.php
				*/
				beans_open_markup_e("_unit[{$theme}][{$index}][content]",'div');
					beans_open_markup_e("_effect[{$theme}][{$index}][content]",'div',array(
						'class' => 'uk-card uk-card-default uk-card-hover uk-flex uk-flex-column',
						'uk-scrollspy' => 'uk-animation-slide-left-small',
					));
						/**
						 * @since 1.0.1
						 * 	Card Header.
						 * @reference (Uikit)
						 * 	https://getuikit.com/docs/card
						 * 	https://getuikit.com/docs/text
						*/
						beans_open_markup_e("_header[{$theme}][{$index}][content]",'header',array('class' => 'uk-card-header uk-text-center'));
							beans_open_markup_e("_tag[{$theme}][{$index}][content][{$key}]",__utility_get_option('tag_widget-title'),array('class' => 'uk-text-bold'));
								beans_output_e("_output[{$theme}][{$index}][name]",$value['name']);
							beans_close_markup_e("_tag[{$theme}][{$index}][content]",__utility_get_option('tag_widget-title'));
						beans_close_markup_e("_header[{$theme}][{$index}][content]",'header');

						/**
						 * @since 1.0.1
						 * 	Card Body.
						*/
						beans_open_markup_e("_body[{$theme}][{$index}][content]",'div',array('class' => 'uk-card-body uk-flex-1'));
							// Price
							beans_open_markup_e("_label[{$theme}][{$index}][content]",'div',array('class' => 'uk-flex uk-flex-middle uk-flex-center'));
								?>
								<span style="font-size: 4rem; font-weight: 200; line-height: 1em;">
									<span style="font-size: 0.5em;"><?php echo '$'; ?></span>
									<?php echo $value['price']; ?>
								</span>
								<?php
							beans_close_markup_e("_label[{$theme}][{$index}][content]",'div');

							// Description
							beans_open_markup_e("_paragraph[{$theme}][{$index}][content]",__utility_get_option('tag_site-description'),array('class' => 'uk-text-small uk-text-center uk-text-muted'));
								beans_output_e("_output[{$theme}][{$index}][billed]",esc_html__('Per member billed annually','windmill'));
							beans_close_markup_e("_paragraph[{$theme}][{$index}][content]",__utility_get_option('tag_site-description'));

							// Feature
							beans_open_markup_e("_list[{$theme}][{$index}][content]",'ul');
								beans_open_markup_e("_item[{$theme}][{$index}][content]",'li');
									beans_output_e("_output[{$theme}][{$index}][content][included]",$value['included']);
								beans_close_markup_e("_item[{$theme}][{$index}][content]",'li');

								beans_open_markup_e("_item[{$theme}][{$index}][content]",'li');
									beans_output_e("_output[{$theme}][{$index}][content][storage]",$value['storage']);
								beans_close_markup_e("_item[{$theme}][{$index}][content]",'li');

								beans_open_markup_e("_item[{$theme}][{$index}][content]",'li');
									beans_output_e("_output[{$theme}][{$index}][content][description]",$value['description']);
								beans_close_markup_e("_item[{$theme}][{$index}][content]",'li');

							beans_close_markup_e("_list[{$theme}][{$index}][content]",'ul');
						beans_close_markup_e("_body[{$theme}][{$index}][content]",'div');

						/**
						 * @since 1.0.1
						 * 	Card Footer.
						 * @reference (Uikit)
						 * 	https://getuikit.com/docs/button
						 * 	https://getuikit.com/docs/card
						*/
						beans_open_markup_e("_footer[{$theme}][{$index}][content]",'footer',array('class' => 'uk-card-footer'));
							beans_open_markup_e("_link[{$theme}][{$index}][content]",'a',array(
								'href' => '#',
								'class' => 'uk-button uk-button-primary uk-width-1-1',
							));
								beans_output_e("_output[{$theme}][{$index}][content][button]",esc_html__('BUY NOW','windmill'));
							beans_close_markup_e("_link[{$theme}][{$index}][content]",'a');
						beans_close_markup_e("_footer[{$theme}][{$index}][content]",'footer');

					beans_close_markup_e("_effect[{$theme}][{$index}][content]",'div');
				beans_close_markup_e("_unit[{$theme}][{$index}][content]",'div');
			}
		}
		?>
	</div><!-- .grid -->

	<!-- =============== 
		<section footer>
	 =============== --> 
	<div class="uk-text-center uk-text-small uk-text-muted uk-section uk-section-small">
		<?php
		// Site-info
		beans_open_markup_e("_paragraph[{$theme}][{$index}][footer]",__utility_get_option('tag_site-description'),array('class' => 'uk-text-small'));
			beans_output_e("_output[{$theme}][{$index}][footer][description]",esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','windmill'));
		beans_close_markup_e("_paragraph[{$theme}][{$index}][footer]",__utility_get_option('tag_site-description'));
		/**
		 * @since 1.0.1
		 * 	Button.
		 * @reference (Uikit)
		 * 	https://getuikit.com/docs/button
		 * 	https://getuikit.com/docs/icon
		 * 	https://getuikit.com/docs/scroll
		*/
		beans_open_markup_e("_button[{$theme}][{$index}][footer]",'a',array(
			'class' => 'uk-button uk-button-secondary uk-margin-medium-top uk-button-large',
			'href' => '#more',
			'title' => esc_html__('More about Plans','windmill'),
			'uk-icon' => 'arrow-down',
			'uk-scroll' => 'duration: 400',
		));
			beans_output_e("_output[{$theme}][{$index}][footer][button]",esc_html__('MORE ABOUT PLANS','windmill'));

		beans_close_markup_e("_button[{$theme}][{$index}][footer]",'a');
		?>
	</div>

</div><!-- .container -->
</section>
