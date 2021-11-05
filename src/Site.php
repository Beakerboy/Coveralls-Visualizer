<?php

namespace Beakerboy\CoverallsVisualizer;

use Beakerboy\CoverallsVisualizer\Controller\Directory;
use Beakerboy\CoverallsVisualizer\Controller\File;
use Beakerboy\CoverallsVisualizer\Entity\Coveralls;

class Site
{

  public static function getPage() {
    $uri = $_SERVER['REQUEST_URI'];
    if (substr($uri, -4) == '.php') {
      $path = substr($uri, 1);
      $file = new File();
      $file->setFile($path);
      return $file;
    } else {
      // if path
      return new Directory();
    }
  }

}
