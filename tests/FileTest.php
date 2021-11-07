<?php

namespace CoverallsVisualizer\Tests;

use CoverallsVisualizer\Entity\Coveralls;

class FileTest
{

    public function testConstructor()
    {
        $default = new \StdClass();
        $class = new File($default);
    }
}
