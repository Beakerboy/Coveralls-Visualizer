<?php

namespace Beakerboy\CoverallsVisualizer;

class Page
{
  protected $title;
  public function __construct($title) {
    $this->title = $title;
  }

  public  function render($content) {
    $output = '<html><body><h1>' . $this->title . '</h1>';
    $output .= $content;

    $output .= '</body></head>';
    return $output;
  }
}
