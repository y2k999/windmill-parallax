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
 * 	Echo the contactus section on front page.
 * @reference (WP)
 * 	Retrieves theme modification value for the current theme.
 * 	https://developer.wordpress.org/reference/functions/get_theme_mod/
 * @reference (Uikit)
 * 	https://getuikit.com/docs/container
 * 	https://getuikit.com/docs/cover
 * 	https://getuikit.com/docs/grid
 * 	https://getuikit.com/docs/image
 * 	https://getuikit.com/docs/parallax
 * 	https://getuikit.com/docs/section
 * 	https://getuikit.com/docs/width
 * @reference
 * 	[Child]/front-page.php
 * 	[Child]/lib/customizer/setting/contact/xxx.php
*/
?>
<!-- ====================
	<home-service>
 ==================== -->
<section id="<?php echo $index; ?>" class="uk-section uk-section-default">
<div class="uk-cover-container overlay-wrap">

	<!-- =============== 
		<background image>
	 =============== --> 
	<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="https://picsum.photos/640/700/?image=816 640w,https://picsum.photos/960/700/?image=816 960w,https://picsum.photos/1200/900/?image=816 1200w,https://picsum.photos/2000/1000/?image=816 2000w" data-sizes="100vw'" data-src="https://picsum.photos/1200/900/?image=816" alt="" uk-cover uk-img uk-parallax="opacity: 1,0.1; easing:0">

	<!-- =============== 
		<contact form>
	 =============== --> 
	<div class="uk-width-1-1 uk-margin-xlarge-top uk-margin-xlarge-bottom">
		<div class="uk-container">
			<div class="uk-grid-margin uk-grid uk-grid-stack"<?php echo apply_filters("_attribute[grid]",''); ?>>
				<?php
				/**
				 * [SAMPLE]
				 * 	In this sample, check Contact Form & Lead Form Elementor Builder plugin.
				 * 	https://wordpress.org/plugins/lead-form-builder/
				 * 
				 * @reference
				 * 	[Parent]/inc/utility/general.php
				*/
				if(__utility_is_active_plugin('lead-form-builder/lead-form-builder.php')){
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
					/**
					 * @reference (Beans)
					 * 	HTML markup.
					 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
					 * 	https://www.getbeans.io/code-reference/functions/beans_output_e/
					 * 	https://www.getbeans.io/code-reference/functions/beans_selfclose_markup_e/
					 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
					 * @reference (Uikit)
					 * 	https://getuikit.com/docs/card
					 * 	https://getuikit.com/docs/scrollspy
					*/
					beans_open_markup_e("_effect[{$theme}][{$index}]",'div',array(
						'class' => 'uk-width-1-1',
						'uk-scrollspy' => 'target: > div; delay: 150; cls: uk-animation-slide-bottom-small'
					));
						beans_open_markup_e("_unit[{$theme}][{$index}]",'div',array('class' => 'uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large'));
							/**
							 * @since 1.0.1
							 * 	Form title
							 * @reference (Uikit)
							 * 	https://getuikit.com/docs/text
							 * @reference
							 * 	[Parent]/inc/customizer/option.php
							 * 	[Parent]/inc/utility/general.php
							*/
							beans_open_markup_e("_tag[{$theme}][{$index}]",__utility_get_option('tag_widget-title'),array('class' => 'uk-card-title uk-text-center'));
								beans_output_e("_output[{$theme}][{$index}][title]",esc_html__('Contact Us!','windmill'));
							beans_close_markup_e("_tag[{$theme}][{$index}]",__utility_get_option('tag_widget-title'));

							/**
							 * @since 1.0.1
							 * 	Form content
							*/
							beans_open_markup_e("_form[{$theme}][{$index}]",'form',array(
								'action' => get_the_permalink(),
								'method' => 'post',
							));
								/**
								 * @reference (WP)
								 * 	Retrieve or display nonce hidden field for forms.
								 * 	https://developer.wordpress.org/reference/functions/wp_nonce_field/
								*/
								wp_nonce_field($index . '-form','home_contact_form_nonce');

								/**
								 * @since 1.0.1
								 * 	Name Field.
								 * @reference (Uikit)
								 * 	https://getuikit.com/docs/form
								 * 	https://getuikit.com/docs/icon
								*/
								beans_open_markup_e("_field[{$theme}][{$index}][name]",'div',array('class' => 'uk-inline uk-width-1-1 uk-margin-small-bottom'));
									beans_open_markup_e("_icon[{$theme}][{$index}][name]",'span',array(
										'class' => 'uk-form-icon',
										'uk-icon' => 'icon: user',
									));
									beans_close_markup_e("_icon[{$theme}][{$index}][name]",'span');
									beans_selfclose_markup_e("_input[{$theme}][{$index}][name]",'input',array(
										'type' => 'text',
										'name' => 'name',
										'class' => 'uk-input uk-form-large',
									));
								beans_close_markup_e("_field[{$theme}][{$index}][name]",'div');

								/**
								 * @since 1.0.1
								 * 	E-mail Field.
								 * @reference (Uikit)
								 * 	https://getuikit.com/docs/form
								 * 	https://getuikit.com/docs/icon
								*/
								beans_open_markup_e("_field[{$theme}][{$index}][email]",'div',array('class' => 'uk-inline uk-width-1-1 uk-margin-small-bottom'));
									beans_open_markup_e("_icon[{$theme}][{$index}][email]",'span',array(
										'class' => 'uk-form-icon',
										'uk-icon' => 'icon: mail',
									));
									beans_close_markup_e("_icon[{$theme}][{$index}][email]",'span');
									beans_selfclose_markup_e("_input[{$theme}][{$index}][email]",'input',array(
										'type' => 'text',
										'name' => 'email',
										'class' => 'uk-input uk-form-large',
									));
								beans_close_markup_e("_field[{$theme}][{$index}][email]",'div');

								/**
								 * @since 1.0.1
								 * 	Inquiry Field.
								 * @reference (Uikit)
								 * 	https://getuikit.com/docs/form
								*/
								beans_open_markup_e("_field[{$theme}][{$index}][inquiry]",'div',array('class' => 'uk-inline uk-width-1-1 uk-margin-small-bottom'));
									beans_open_markup_e("_icon[{$theme}][{$index}][inquiry]",'span',array(
										'class' => 'uk-form-icon',
										'uk-icon' => 'icon: pencil',
									));
									beans_close_markup_e("_icon[{$theme}][{$index}][inquiry]",'span');
									beans_open_markup_e("_textarea[{$theme}][{$index}][inquiry]",'textarea',array(
										'name' => 'inquiry',
										'class' => 'uk-textarea uk-form-large',
										'rows' => '4',
									));
									beans_close_markup_e("_textarea[{$theme}][{$index}][inquiry]",'textarea');
								beans_close_markup_e("_field[{$theme}][{$index}][inquiry]",'div');

								/**
								 * @since 1.0.1
								 * 	Submit Button.
								 * @reference (Uikit)
								 * 	https://getuikit.com/docs/button
								*/
								beans_open_markup_e("_field[{$theme}][{$index}][submit]",'div',array('class' => 'uk-margin-small-bottom'));
									beans_open_markup_e("_button[{$theme}][{$index}]",'button',array('class' => 'uk-button uk-button-secondary uk-button-large uk-width-1-1'));
										beans_output_e("_output[{$theme}][{$index}][button]",esc_html__('Submit','windmill'));
									beans_close_markup_e("_button[{$theme}][{$index}]",'button');
								beans_close_markup_e("_field[{$theme}][{$index}][submit]",'div');

							beans_close_markup_e("_form[{$theme}][{$index}]",'form');

						beans_close_markup_e("_unit[{$theme}][{$index}]",'div');
					beans_close_markup_e("_effect[{$theme}][{$index}]",'div');
				}
				?>

			</div><!-- .grid -->
		</div><!-- .container -->
	</div><!-- .height -->

</div><!-- .cover -->
</section>
