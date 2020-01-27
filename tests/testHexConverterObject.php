<?php

/**
* Test if the hex converter class is working properly, 
* while 'creating object' and working,
* depending on on-live hex converter class
*/

use PHPUnit\Framework\TestCase;
require_once("src/hexConverter.php");


class testHexConverterObject extends TestCase
{
    public function testHexConverterObjectIsItWorking(): void
    {
        $hexConverter = new hexConverter('#FFF', '0.3');
        $this->assertEquals($hexConverter->convert(), 'rgba(255,255,255,.3)');

        $hexConverter = new hexConverter('#FFFFFF', 1);
        $this->assertEquals($hexConverter->convert(), 'rgba(255,255,255,1)');

        $hexConverter = new hexConverter('FFF', '0.5');
        $this->assertEquals($hexConverter->convert(), 'rgba(255,255,255,.5)');

        $hexConverter = new hexConverter('FFFFFF', 1);
        $this->assertEquals($hexConverter->convert(), 'rgba(255,255,255,1)');
    }
}