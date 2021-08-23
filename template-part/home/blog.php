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
 * 	Echo the blog section on front page.
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
 * 	[Child]/front-page.php
 * 	[Child]/lib/customizer/setting/blog/xxx.php
*/
?>
<!-- ====================
	<home-blog>
 ==================== -->
<section id="<?php echo esc_attr($index); ?>" class="uk-section uk-section-default">
<div class="uk-container">

	<!-- =============== 
		<section headline>
	 =============== --> 
	<header class="uk-width-auto uk-padding-small uk-text-center" uk-scrollspy="cls: uk-animation-fade; target: > *; delay: <?php echo get_theme_mod('setting_WP_scrollspy_speed_' . $needle); ?>">
		<?php get_template_part('template-part/misc/headline',NULL,array('needle' => $needle)); ?>
	</header>

	<!-- =============== 
		<section content>
	 =============== --> 
	<div class="uk-grid-medium uk-child-width-auto@s uk-child-width-1-3@m uk-padding-small" uk-scrollspy="target: > div; delay: 150; cls: uk-animation-slide-bottom-medium"<?php echo apply_filters("_attribute[grid]",''); ?>>

		<?php
		// WP global.
		// $post = __utility_get_post_object();

		/**
		 * @reference (WP)
		 * 	The WordPress Query class.
		 * 	https://developer.wordpress.org/reference/classes/wp_query/
		*/
		$r = new WP_Query(array(
			'post_type' => 'post',
			'ignore_sticky_posts' => TRUE,
			'posts_per_page' => 3
		));

		/**
		 * @reference (WP)
		 * 	Determines whether current WordPress query has posts to loop over.
		 * 	https://developer.wordpress.org/reference/functions/have_posts/
		 * 	Iterate the post index in the loop.
		 * 	https://developer.wordpress.org/reference/functions/the_post/
		*/
		if($r->have_posts()) :
			while($r->have_posts()) : $r->the_post();
				/**
				 * @since 1.0.1
				 * 	Display posts in card format.
				 * @reference (WP)
				 * 	Get and load the parent theme's template part file.
				 * 	https://developer.wordpress.org/reference/functions/get_template_part/
				 * @reference
				 * 	[Parent]/template-part/item/card.php
				*/
				get_template_part(SLUG['item'] . 'card');
			endwhile;
		else :
			/**
			 * @reference (Beans)
			 * 	HTML markup.
			 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
			 * 	https://www.getbeans.io/code-reference/functions/beans_output_e/
			 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
			 * @reference (Uikit)
			 * 	https://getuikit.com/docs/alert
			 * @reference
			 * 	[Parent]/inc/customizer/option.php
			 * 	[Parent]/inc/utility/general.php
			*/
			beans_open_markup_e("_paragraph[{$theme}][{$index}][content]",__utility_get_option('tag_site-description'),array('class' => 'uk-alert-warning'));
				/**
				 * @since 1.0.1
				 * 	Display nopost message.
				*/
				beans_output_e("_output[{$theme}][{$index}][content]",__utility_get_option('message_nopost'));
			beans_close_markup_e("_paragraph[{$theme}][{$index}][conten}]",__utility_get_option('tag_site-description'));
		endif;

		/**
		 * @since 1.0.1
		 * 	Only reset the query if a filter is set.
		 * @reference (WP)
		 * 	After looping through a separate query, this function restores the $post global to the current post in the main query.
		 * 	https://developer.wordpress.org/reference/functions/wp_reset_postdata/
		*/
		wp_reset_postdata();
		?>
	</div><!-- .grid -->

</div><!-- .container -->
</section>
