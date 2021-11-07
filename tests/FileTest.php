<?php

namespace CoverallsVisualizer\Tests;

use CoverallsVisualizer\Entity\File;

class FileTest
{

    public function testConstructor()
    {
        $default = new \StdClass();
        $default->name = 'src/foo.php';
        $default->source = "<?php\n";
        $default->coverage = [null];
        $class = new File($default);
        $this->assertInstanceOf(File::class, $class);
    }
}
