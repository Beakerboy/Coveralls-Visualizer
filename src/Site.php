<?php

namespace CoverallsVisualizer;

use CoverallsVisualizer\Controller\Directory;
use CoverallsVisualizer\Controller\File;
use CoverallsVisualizer\Entity\Coveralls;

class Site
{
  public static function getCssPath() {
    return 'http://' . $_SERVER['SERVER_NAME'] . '/styles.css';
  }

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
