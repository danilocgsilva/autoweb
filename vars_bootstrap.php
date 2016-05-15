<?php
require_once('includes/basic_html_variable.php');
require_once('includes/basic_html_2_variable.php');

// Functions
function show_error_if_any() {
  if (isset($_SESSION['errors'])) {
    echo '<div id="errorbox"><ul>';
    foreach($_SESSION['errors'] as $error) {
      echo '<li>Error: ' . $error . '</li>' . "\n";
    }
    echo '</ul></div>';
  }
}

// The option to be selected on page loading
if (!isset($_SESSION['page_source'])) {
  $page_source = 'basic_html';
}
