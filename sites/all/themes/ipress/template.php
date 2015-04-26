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


//custom main menu
function ipress_menu_tree__main_menu($variables) {
	$str = '';
	$str .= '<ul class="sf-menu sf-js-enabled sf-shadow">';
		$str .= $variables['tree'];
	$str .= '</ul>';
	
	return $str;
}

// Remove superfish css files.
function ipress_css_alter(&$css) {
	unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
	unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
	
//	unset($css[drupal_get_path('module', 'system') . '/system.base.css']);
}

function ipress_form_alter(&$form, &$form_state, $form_id) {
	if ($form_id == 'search_block_form') {
		$form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
		$form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
		$form['search_block_form']['#attributes']['id'] = array("mod-search-searchword");
		//disabled submit button
		//unset($form['actions']['submit']);
		unset($form['search_block_form']['#title']);
		$form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
		$form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
	}
}