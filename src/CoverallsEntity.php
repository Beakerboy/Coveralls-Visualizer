<?php

namespace Beakerboy\CoverallsVisualizer;

class CoverallsEntity
{
  protected $service_name;
  protected $service_event_type;
  $repo_token;
  $git;
  $run_at;
  $source_files;
  $environment;
  public function __construct(string $json) {
    $json_object = json_decode($string);
    foreach ($json_object->source_files as $file) {
      $this->source_files[$name] = new File($file);
    }
  }

  public function getSourceFiles() {
  }

  public function getFoleNames() {
  }
}

