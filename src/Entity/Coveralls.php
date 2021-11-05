<?php

namespace Beakerboy\CoverallsVisualizer\Entity;

use Beakerboy\CoverallsVisualizer\Entity\File;

class Coveralls
{
  protected $service_name;
  protected $service_event_type;
  protected $repo_token;
  protected $git;
  protected $run_at;
  protected $source_files;
  protected $environment;
  public function __construct(string $file_path = 'coveralls-upload.json') {

    $json = file_get_contents($file_path, 'r');
    $json_object = json_decode($json);
    foreach ($json_object->source_files as $file) {
      $file = new File($file);
      $name = $file->getName();
      $this->source_files[$name] = $file;
    }
  }

  public function getSourceFiles() {
    return $this->source_files;
  }

  public function getFile($file) {
    return $this->source_files[$file];
  }

}

