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
 * 	Echo the SNS section on front page.
 * @reference (Uikit)
 * 	https://getuikit.com/docs/container
 * 	https://getuikit.com/docs/grid
 * 	https://getuikit.com/docs/scrollspy
 * 	https://getuikit.com/docs/section
 * 	https://getuikit.com/docs/width
*/
?>
<!-- ====================
	<home-sns>
 ==================== -->
<section id="<?php echo $index; ?>" class="uk-section uk-section-small uk-section-muted">
<div class="uk-container uk-container-small">

	<div class="uk-grid uk-child-width-1-4 uk-child-width-expand@m logos-grid" uk-grid uk-scrollspy="cls: uk-animation-scale-down; target: > div > a; delay: 100">
		<?php
		/**
		 * @since 1.0.1
		 * 	Get theme customizer settings.
		 * @reference
		 * 	[Parent]/inc/customizer/option.php
		 * 	[Parent]/inc/utility/general.php
		*/
		$list = __utility_get_value('follow');
		if(empty($list)){
			$list = array(
				'twitter',
				'facebook',
				'instagram',
				'github',
				'youtube',
			);
		}
		foreach($list as $item){
			/**
			 * @reference (Beans)
			 * 	HTML markup.
			 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
			 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
			 * @reference (Uikit)
			 * 	https://getuikit.com/docs/icon
			 * @reference
			 * 	[Parent]/inc/customizer/option.php
			 * 	[Parent]/inc/setup/constant.php
			 * 	[Parent]/inc/utility/general.php
			*/
			beans_open_markup_e("_column[{$theme}][{$index}][{$item}]",'div',array('class' => 'uk-text-center'));
				beans_open_markup_e("_icon[{$theme}][{$index}][{$item}]",'a',array(
					'href' => __utility_get_option('url_' . $item),
					'uk-icon' => 'icon: ' . $item . ' ; ratio: 4',
					'style' => 'color: ' . __utility_get_color($item) . ' ;',
				));
				beans_close_markup_e("_icon[{$theme}][{$index}][{$item}]",'a');
			beans_close_markup_e("_column[{$theme}][{$index}][{$item}]",'div');
		}
		?>
	</div><!-- .grid -->

</div><!-- .container -->
</section>
