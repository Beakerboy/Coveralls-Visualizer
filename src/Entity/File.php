<?php

namespace CoverallsVisualizer\Entity;

class File
{
    protected $name;
    protected $source;
    protected $coverage;

    public function __construct(\stdClass $file)
    {
        $this->name = $file->name;
        $this->source = $file->source;
        $this->coverage = $file->coverage;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function getCoveredPercent()
    {
        $yes_no_covered = array_map(function ($a) {
            return is_int($a) && $a > 0 ? 1 : 0;
        }, $this->coverage);
        $lines_covered = array_sum($yes_no_covered);
        $can_be_covered = array_map(function ($a) {
            return is_int($a) ? 1 : 0;
        }, $this->coverage);
        $total_lines = array_sum($can_be_covered);
        return $lines_covered / $total_lines;
    }

    public function getCoverageForLine(int $line)
    {
        return $this->coverage[$line];
    }
}
