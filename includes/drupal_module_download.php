<?php

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

echo $module_name . '<br />' . $module_machine_name;
