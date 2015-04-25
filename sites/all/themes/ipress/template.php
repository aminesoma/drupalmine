<?php 
global $base_url;

function ipress_preprocess_html(&$variables) {
	
	drupal_add_css(base_path().path_to_theme().'/styles/style.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/styles/icons.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/styles/animate.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/styles/responsive.css', array('type' => 'external'));
	drupal_add_css('http://fonts.googleapis.com/css?family=Roboto:400,300,100,500', array('type' => 'external'));
	
	
	
	
	drupal_add_css(base_path().path_to_theme().'/styles/update.css', array('type' => 'external'));
	
	drupal_add_js(base_path().path_to_theme().'/js/jquery.min.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/ipress.js', array('type' => 'file', 'scope' => 'footer'));
	
	drupal_add_js(base_path().path_to_theme().'/js/owl.carousel.min.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/jquery.ticker.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/custom.js', array('type' => 'file', 'scope' => 'footer'));
	
	drupal_add_js(base_path().path_to_theme().'/js/drupalet_admin/base.js', array('type' => 'file', 'scope' => 'footer'));
	
	
	drupal_add_js(base_path().path_to_theme().'/js/jflickrfeed.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/update.js', array('type' => 'file', 'scope' => 'footer'));
}

