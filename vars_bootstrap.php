<?php
require_once('includes/basic_html_variable.php');
require_once('includes/basic_html_2_variable.php');

// The option to be selected on page loading
if (!isset($_SESSION['page_source'])) {
  $page_source = 'basic_html';
}