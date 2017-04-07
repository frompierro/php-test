<?php

class StupidTest extends \PHPUnit_Framework_TestCase
{
    public function testTrueIsTrue()
    {
        $foo = true;
        $this->assertTrue($foo);


        $matcher = array('id' => 'my_id');
        $sOutput = '<p id="my_id">';

    }

    public function testHTML()
    {

        $matcher = array('id' => 'my_id');
        $htmlOutput = '<p id="my_id">ciao</p>';
        $this->assertTag($matcher, $htmlOutput);
    }
}
