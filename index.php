<?php

use Beakerboy\CoverallsVisualizer\Page;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$autoloader = require_once 'autoload.php';
$page = new Page('Code Coverage for Sqlsrv');
$json = file_get_contents('coveralls-upload.json', 'r');
$json_array = json_decode($json);
$content = "<ul>";
foreach ($json_array->source_files as $file) {
  $name = $file->name;
  $content .= "<li><a href='file.php?name={$name}'>{$name}</a></li>";
}
$content .= '</ul>';

echo $page->render($content);


