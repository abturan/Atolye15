<?php namespace UnitTestFiles\Test;

/**
* Test if the hex converter algorithm is working properly, 
* while processing via various samples
*/

use PHPUnit\Framework\TestCase;

class testHexConverterMethod extends TestCase
{
    public function testHexConverterMethodIsItWorking(): void
    {
        $hexCodes = array('#FFF', '#FFFFFF', 'FFF', 'FFFFFF');
        $alphas = array('0.3', '1', '0.5', '1');
        $assertCodes = array('rgba(255,255,255,.3)', 'rgba(255,255,255,1)', 'rgba(255,255,255,.5)', 'rgba(255,255,255,1)');
        
        foreach ($hexCodes as $i => $hexCode) {

            if ($hexCode[0] == '#' ) 
            $hexCode = substr($hexCode, 1);
        
            if ($alphas[$i][0] == '0' ) 
                $alphas[$i] = substr($alphas[$i], 1);
            
            if (strlen($hexCode) == 3) 
                $rgba = "rgba(".hexdec($hexCode[0].$hexCode[0]).",".hexdec($hexCode[1].$hexCode[1]).",".hexdec($hexCode[2].$hexCode[2]).",".$alphas[$i].")";
            elseif (strlen($hexCode) == 6) 
                $rgba = "rgba(".hexdec($hexCode[0].$hexCode[1]).",".hexdec($hexCode[2].$hexCode[3]).",".hexdec($hexCode[4].$hexCode[5]).",".$alphas[$i].")";
            
            $this->assertEquals($rgba, $assertCodes[$i]);
        }
    }
}