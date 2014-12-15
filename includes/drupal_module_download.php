<?php
session_start();
// Validation
$valid = $_GET['module_description'] !== '' && $_GET['name'] !== '';
if (!$valid) {

	// Setting array with the errors
	$_SESSION['errors'] = array();

	// Settings the errors
	if ($_GET['name'] == '') {
		$_SESSION['errors'][] = 'The module name is empty. This field is mandatory.';
	}
	if ($_GET['module_description'] == '') {
		$_SESSION['errors'][] = 'The module description is empty. This field is mandatory.';
	}

	// Get the domain
	$domain = split('/', $_SERVER['SERVER_PROTOCOL']);
	$domain = strtolower($domain[0]);
	$domain_name = split('/', $_SERVER['URL']);
	$domain .= '://' . $_SERVER['SERVER_NAME'] . '/' . $domain_name[1] . '/';
	
	// Set the page source
	$_SESSION['page_source'] = 'drupal_module';

	header('Location: ' . $domain);
}

// Loads the format string drupal module
require_once('../includes/drupal_module_variable.php');

// Loads the machine_name function
require_once('../functions/machine_name.php');

// Configure inputs variables
$module_name = $_GET['name'];

// $module_machine_name
if ($_GET['module_machine_name'] == '') {
	$module_machine_name = machine_name($module_name);
} else {
	$module_machine_name = machine_name($_GET['module_machine_name']);
}

// Module description
$module_description = $_GET['module_description'];

// Text to go on module_name.info
$module_body = sprintf($drupal_module, $module_name, $module_description);

// The zip file to output
$zip_file = new ZipArchive;

// Creates a temporary php folder to create and get files

echo $module_name . '<br />' . $module_machine_name . '<br />' . $module_description;
echo '<br />' . $module_body;
