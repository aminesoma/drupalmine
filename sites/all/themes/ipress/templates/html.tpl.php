<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US"><!--<![endif]-->
<head>
	<title>iPress - Responsive News/Blog/Magazine HTML5 Template</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
	<meta name="description" content="iPress - Responsive News/Blog/Magazine HTML5 Template">
	<meta name="keywords" content="iPress, magazine, light, dark, themeforest, multi purpose, premium, unlimited, blog, news, AD, optimized">

  <?php print $styles; ?>
  <?php print $scripts; ?>
  
  <?php
    /*
		$color_scheme = theme_get_setting('color_scheme', 'ipress');
		if(isset($color_scheme) && !empty($color_scheme)){
	?>
	<style type="text/css" media="all">
		a:hover, #footer a:hover, #newsletters button:hover, #header .search button:hover { color: <?php print $color_scheme;?> } #mobilepro:hover, .title.colordefault, .cat.colordefault, li.colordefault:hover > a, li.colordefault li:hover > a, li.current.colordefault, .share_post span, .pagination-tt ul li a, .wp-polls input.Buttons, .owl-theme .owl-controls.clickable .owl-buttons div:hover, .small_posts .s_thumb span, #layerBall:after, .inner_f, .right_icons a:hover, .search_icon i:hover, .search_icon i.activeated_search, #contactForm #sendMessage, .tags a:hover, #wp-calendar #today, .accordion-head-sign,.toggle-head-sign, .tbutton {background-color: <?php print $color_scheme;?> !important} .s_form, #track_input:focus, #contactForm #senderName:focus, #contactForm #senderEmail:focus, #contactForm #message:focus {border-color: <?php print $color_scheme;?> !important} ::selection{background:<?php print $color_scheme;?> !important} ::-moz-selection{background:<?php print $color_scheme;?> !important} .s_form:after {border-bottom: 6px solid <?php print $color_scheme;?>} #layerBall { box-shadow: 0 0 1px <?php print $color_scheme;?>}#layerBall:before {box-shadow: 0 0 4px <?php print $color_scheme;?>} .colordefault.title:after {border-top-color: <?php print $color_scheme;?>!important} .colordefault.cat:after {border-left-color: <?php print $color_scheme;?>!important} a.cat{background:<?php print $color_scheme;?>!important} .post_day .relative .cat:after, .cat-post-of-the-day a:after{border-left:5px solid <?php print $color_scheme;?>!important}
	</style>
	<?php
		}
	*/
	?>
  
</head>
<body>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  
  
  <!-- Scripts -->
		
		<script type="text/javascript">
		/* <![CDATA[ */
			function date_time(id){
				date = new Date;
				year = date.getFullYear();
				month = date.getMonth();
				months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
				d = date.getDate();
				day = date.getDay();
				days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
				h = date.getHours();
				if(h<10){
					h = "0"+h;}
					m = date.getMinutes();
					if(m<10){
						m = "0"+m;
					}
					s = date.getSeconds();
					if(s<10){
						s = "0"+s;
					}
				// result = ''+days[day]+' '+months[month]+' '+d+' '+year+' '+h+':'+m+':'+s;
				result = ''+days[day]+' '+d+' '+months[month]+' '+year;
				document.getElementById(id).innerHTML = result;
				setTimeout('date_time("'+id+'");','1000');
				return true;
			}
			window.onload = date_time('date_time');
		/* ]]> */
		</script>
</body>
</html>
