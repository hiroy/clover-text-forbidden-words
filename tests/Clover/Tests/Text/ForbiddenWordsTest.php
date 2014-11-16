<?php
namespace Clover\Tests\Text;

use Clover\Text\ForbiddenWords;

class ForbiddenWordsTest extends \PHPUnit_Framework_TestCase
{
    public function testIncludes()
    {
        $this->assertTrue(ForbiddenWords::includes('about'));

        $this->assertFalse(ForbiddenWords::includes('hiroy'));
    }
}
