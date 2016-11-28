<?php

use Rakit\Validation\Rules\Email;

class EmailTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $this->rule = new Email;
    }

    public function testValids()
    {
        $this->assertTrue($this->rule->check(null, [])); // this is for required rule
        $this->assertTrue($this->rule->check('', [])); // this is for required rule
        $this->assertTrue($this->rule->check('johndoe@gmail.com', []));
        $this->assertTrue($this->rule->check('johndoe@foo.bar', []));
        $this->assertTrue($this->rule->check('foo123123@foo.bar.baz', []));
    }

    public function testInvalids()
    {
        $this->assertFalse($this->rule->check(1, []));
        $this->assertFalse($this->rule->check('johndoe', []));
        $this->assertFalse($this->rule->check('johndoe.gmail.com', []));
        $this->assertFalse($this->rule->check('johndoe.gmail.com', []));
    }

}
