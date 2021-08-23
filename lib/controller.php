<?php
/**
 * Render template tags and components.
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
	 * @since 1.0.1
	 * 	Echo comment link on the post header of the blog section in this child theme.
	 * @reference (Beans)
	 * 	Initialize customizer default settings for the landing page.
	 * 	https://www.getbeans.io/code-reference/functions/beans_add_smart_action/
	 * @hook target
	 * 	windmill/item/card/header
	 * @reference
	 * 	[Child]/template-part/home-blog.php
	 * 	[Parent]/inc/utility/general.php
	 * 	[Parent]/template-part/item/card.php
	*/
	beans_add_smart_action(HOOK_POINT['item']['card']['header'],function()
	{
		if(!__utility_is_top_page()){return;}

		/**
		 * @reference (WP)
		 * 	Retrieves name of the current stylesheet.
		 * 	https://developer.wordpress.org/reference/functions/get_stylesheet/
		*/
		$theme = get_stylesheet();

		/**
		 * @reference (Beans)
		 * 	HTML markup.
		 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
		 * 	https://www.getbeans.io/code-reference/functions/beans_output_e/
		 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
		 * @reference
		 * 	[Parent]/inc/customizer/option.php
		 * 	[Parent]/inc/utility/general.php
		 * 	[Parent]/model/data/icon.php
		*/
		beans_open_markup_e("_label[{$theme}][home-blog][comments-link]",__utility_get_option('tag_site-description'),array('class' => 'comments-link'));

			beans_output_e("_icon[{$theme}][home-blog][comments-link]",__utility_get_icon('comments'));

			beans_open_markup_e("_text[{$theme}][home-blog][comments-link]",'span',array('class' => 'uk-padding-small'));
				/**
				 * @reference (WP)
				 * 	Displays the link to the comments for the current post ID.
				 * 	https://developer.wordpress.org/reference/functions/comments_popup_link/
				*/
				comments_popup_link(esc_html__('No Comments','windmill'),esc_html__('One Comments','windmill'),'% ' . esc_html__('Comments','windmill'));
			beans_close_markup_e("_text[{$theme}][home-blog][content][comments-link]",'span');

		beans_close_markup_e("_label[{$theme}][home-blog][content][comments-link]",__utility_get_option('tag_site-description'));
	});



	/**
	 * @since 1.0.1
	 * 	Adjust card item layout(paddings) in home-blog section.
	 * @reference (Beans)
	 * 	Initialize customizer default settings for the landing page.
	 * 	https://www.getbeans.io/code-reference/functions/beans_add_smart_action/
	 * @reference (Uikit)
	 * 	https://getuikit.com/docs/card
	 * 	https://getuikit.com/docs/padding
	 * @reference
	 * 	[Child]/template-part/home-blog.php
	 * 	[Parent]/inc/utility/general.php
	 * 	[Parent]/template-part/item/card.php
	*/
	// if(!is_page('front-page')){return;}
	// if('' !== locate_template('front-page.php',TRUE,FALSE)){return;}

	if(!__utility_is_top_page()){
		/**
		 * @reference (WP)
		 * 	Removes a callback function from a filter hook.
		 * 	https://developer.wordpress.org/reference/functions/remove_filter/
		 * 	Hooks a function or method to a specific filter action.
		 * 	https://www.getbeans.io/code-reference/functions/beans_add_filter/
		*/
		remove_filter('_class[card][item][image]',['_render_item','__the_image_card'],PRIORITY['mid-low']);
		beans_add_filter('_class[card][item][image]',function()
		{
			echo 'uk-card-media-top uk-padding-small uk-padding-remove-horizonal';
		});

		remove_filter('_class[card][item][header]',['_render_item','__the_header'],PRIORITY['mid-low']);
		beans_add_filter('_class[card][item][header]',function()
		{
			echo 'uk-card-header uk-padding-small uk-padding-remove-horizonal';
		});

		remove_filter('_class[card][item][body]',['_render_item','__the_body_card'],PRIORITY['mid-low']);
		beans_add_filter('_class[card][item][body]',function()
		{
			echo 'uk-card-body uk-padding-small uk-padding-remove-horizonal';
		});
	}
