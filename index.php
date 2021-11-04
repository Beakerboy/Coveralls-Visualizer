<?php
  $url = 'https://git.drupalcode.org/project/drupalsqlsrvci/-/jobs/9914/artifacts/download';
  // save zip file as archive.zip
  $json = file_get_contents('coveralls-upload.json', 'r');
  $json_array = json_decode($json);
  foreach ($json_array['source_files'] as $file) {
  }
// unzip
// open coveralls-upload.json file
// create coveralls entity from file
// print file tree


