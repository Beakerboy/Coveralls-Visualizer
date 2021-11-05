<?php

namespace Beakerboy\CoverallsVisualizer\Controller;

use Beakerboy\CoverallsVisualizer\Site;
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
    $doctype = '<!DOCTYPE html>';
    $css_path = Site::getCssPath();
    $head = '<head><title>Code Coverage</title><link rel="stylesheet" href="' . $css_path . '"></head>';
    $body = '<body><h1>Code Coverage Visualization</h1>';
    $body .= $this->content;

    $body .= '</body>';
    $html = $doctype . '<html lang="en">' . $head . $body . '</html>';
    return $html;
  }
}
