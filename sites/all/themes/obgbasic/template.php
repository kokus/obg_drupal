 <?php

/**
 * @file
 * Process theme data.
 *
 * Use this file to run your theme specific implimentations of theme functions,
 * such preprocess, process, alters, and theme function overrides.
 *
 * Preprocess and process functions are used to modify or create variables for
 * templates and theme functions. They are a common theming tool in Drupal, often
 * used as an alternative to directly editing or adding code to templates. Its
 * worth spending some time to learn more about these functions - they are a
 * powerful way to easily modify the output of any template variable.
 *
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function and instance of "obgbasic" to match
 *    your subthemes name, e.g. if your theme name is "footheme" then the function
 *    name will be "footheme_preprocess_hook". Tip - you can search/replace
 *    on "obgbasic".
 * 2. Uncomment the required function to use.
 */

/**
 * Alter the $head var
 * @param array $head_elements
 */

function obgbasic_html_head_alter ( &$head_elements ) {
	$head_elements["viewport"] = array(
		"#type" => "html_tag",
		"#tag" => "meta",
		"#attributes" => array(
			"http-name" => "viewport",
			"content" => "width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1, user-scalable=no"
			),
	);
}

/**
 * Alter the $breadcrumb var
 *
 */
function obgbasic_breadcrumb($variables) {
  $sep = ' &raquo; ';
  if (count($variables['breadcrumb']) > 0) {
    return implode($sep, $variables['breadcrumb']) . $sep;
  }
  else {
    return t("Home");
  }
}


/**
 * Process variables for the html template.
 */
function obgbasic_preprocess_html(&$vars) {
  drupal_add_css('https://fonts.googleapis.com/css?family=Pacifico|Cabin:400,700,600,500',array('type' => 'external'));

  //remove welcome title on front page
  if (drupal_is_front_page()) {
    $vars['title']="";
  }

}

/**
 * Override or insert variables for the page templates.
 */
function obgbasic_preprocess_page(&$vars) {
  //removes no content has been promoted to homepage
  unset($vars['page']['content']['system_main']['default_message']);

  //removes welcome to page title on front page
  if ($vars['is_front']) {
    $vars['title'] = '';
  }
}

/**
 * Implements hook_form_search_form_alter().
 */
function obgbasic_form_alter(&$form, &$form_state, $form_id) {
	 if ($form_id == 'search_block_form') {
			$form['actions']['submit']['#value'] = t('SEARCH');
			$form['actions']['submit']['#attributes'] = array('class' => array('button white'));
	 }

  //$form['actions']['submit']['#attributes']['class'][] = 'button white';
}



/**
 * Implements hook_preprocess_block()
 *
 * Override or insert variables into the block templates.
 */

/*function obgbasic_preprocess_block(&$vars) {
  //classes describing the position of the block within the region
  if($vars['block_id'] == 1) {
    $vars['classes_array'][] = 'first';
  }

  //Add class 'block-title' to blocks
  $vars['title_attributes_array']['class'][] = 'block-title';
}*/



/**
 * Preprocess variables for the html template.
 */
/* -- Delete this line if you want to use this function
function obgbasic_preprocess_html(&$vars) {
  // Add meta tag for viewport, for easier responsive theme design.
  $viewport = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1, maximum-scale=1',
    ),
  );
  drupal_add_html_head($viewport, ‘viewport’);
}
// */


/**
 * Process variables for the html template.
 */
/* -- Delete this line if you want to use this function
function obgbasic_process_html(&$vars) {
}
// */


/**
 * Override or insert variables for the page templates.
 */
/* -- Delete this line if you want to use these functions
function obgbasic_preprocess_page(&$vars) {
}
function obgbasic_process_page(&$vars) {
}
// */


/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function obgbasic_preprocess_node(&$vars) {
}
function obgbasic_process_node(&$vars) {
}
// */


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function obgbasic_preprocess_comment(&$vars) {
}
function obgbasic_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function obgbasic_preprocess_block(&$vars) {
}
function obgbasic_process_block(&$vars) {
}
// */
