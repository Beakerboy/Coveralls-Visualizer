<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$url = 'https://git.drupalcode.org/project/drupalsqlsrvci/-/jobs/9914/artifacts/download';
// save zip file as archive.zip
echo "<html><body><h1>Coverage Visualizer</h1>";
$json = file_get_contents('../coveralls-upload.json', 'r');
$json_array = json_decode($json);
echo "<ul>";
foreach ($json_array->source_files as $file) {
  $name = $file->name;
  echo "<li><a href='file.php?name={$name}'>{$name}</a></li>";
}
echo '</ul></body></head>';

