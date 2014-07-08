<?php
namespace Sinergi\Registry\Tests;

use PHPUnit_Framework_TestCase;
use Sinergi\Registry\Application;

class ApplicationTest extends PHPUnit_Framework_TestCase
{
    public function testApplication()
    {
        $app = new Application();
        $app->add(new MockApplication());
        $app->run();
    }
}