<?php
class File
{
  protected $name;
  protected $source;
  protected $coverage;

  public function getCoverageTotal() {
    $yes_no_covered = array_map(function($a) { return is_int($a[0]) && $a > 0 ? 1 : 0; }, $this->coverage);
    $lines_covered = array_sum($yes_no_covered);
    $total_lines = count($this->coverage);
    return $lines_covered / $total_lines;
  }

}
