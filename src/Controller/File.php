<?php

namespace CoverallsVisualizer\Controller;

use CoverallsVisualizer\Controller\Page;

class File extends Page
{
  protected $file_name;

  public function setFile($file) {
    $this->file_name = $file;
  }

  public function build() {
    $file = $this->coveralls->getFile($this->file_name);
    $source = $file->getSource();
     
    $array = explode("\n", htmlspecialchars($source));
    $content = '<table>';
    $i = 0;
    foreach ($array as $row) {
      $coverage = $file->getCoverageForLine($i);
      $class = 'na';
      if ($coverage > 0) {
        $class = "covered";
      } elseif ($coverage === 0) {
        $class = 'uncovered';
      }
      
      $content .= "<tr class=\"{$class}\"><td>{$coverage}</td><td><pre>" . $row . '</pre></td></tr>';
      $i++;
    }
    $content .= '</table>';
    $this->content = $content;
  }

}
