<?php

namespace Beakerboy\CoverallsVisualizer\Controller;

use Beakerboy\CoverallsVisualizer\Controller\Page;

class Directory extends Page
{

  public function build() {

    $content = "<ul>"; 
    foreach ($this->coveralls->getSourceFiles() as $name => $file) {
      $coverage = round($file->getCoveredPercent() * 100, 2);
      $content .= "<li><a href='{$name}'>{$name} ({$coverage}%)</a></li>";
    }
    $content .= '</ul>';
    $this->content = $content;
  }

}
