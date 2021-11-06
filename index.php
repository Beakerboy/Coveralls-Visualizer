<?php

use CoverallsVisualizer\Site;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$autoloader = require_once 'autoload.php';
$page = Site::getPage();
$page->build();
echo (string) $page;
