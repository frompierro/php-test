<?php

class StupidTest extends \PHPUnit\Framework\DOMTestCase
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
        $html = file_get_contents('index.php');
        $selector = 'div.foo';
        $content  = 'Test class text';

        $this->assertSelectEquals($selector, $content, true, $html);
    }
}
