<?php
namespace Sinergi\Registry\Tests;

use PHPUnit_Framework_TestCase;

class RegistryTest extends PHPUnit_Framework_TestCase
{
    public function testApplication()
    {
        new MockRegistry();
    }
}