<?php

namespace Beakerboy\CoverallsVisualizer\Controller;

use Beakerboy\CoverallsVisualizer\Controller\Directory;
use Beakerboy\CoverallsVisualizer\Controller\File;
use Beakerboy\CoverallsVisualizer\Entity\Coveralls;

class Page
{
  protected $title;
  protected $content;
  protected $coveralls;

  public function __construct() {
    $this->coveralls = new Coveralls();
  }

  public function getCoveralls() {
    return $this->coveralls;
  }

  public function __toString() {
    $head = '<head><link rel="stylesheet" href="styles.css"></head>';
    $output = '<html>' . $head . '<body><h1>Coverage Visualization</h1>';
    $output .= $this->content;

    $output .= '</body></head>';
    return $output;
  }
}
