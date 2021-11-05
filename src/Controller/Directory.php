<?php

namespace Beakerboy\CoverallsVisualizer\Controller;

use Beakerboy\CoverallsVisualizer\Controller\Page;

class Directory extends Page
{

  public function build() {

    $content = "<ul>"; 
    foreach ($this->coveralls->getSourceFiles() as $name => $file) {
      $content .= "<li><a href='{$name}'>{$name}</a></li>";
    }
    $content .= '</ul>';
    $this->content = $content;
  }

}
