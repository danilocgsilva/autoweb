<?php

// Common infos from all processing page
$name = $_GET['name'];
$chunk = $_GET['chunk'];

// Load the right file
require_once($chunk . '/action.php');