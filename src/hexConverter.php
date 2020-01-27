<?php 

/**
* Hexadecimal to Decimal converter 
*/

class hexConverter 
{
    public $hexCode;
    public $alpha;
    private $error = 'Invalid length';

    public function __construct($hexCode, $alpha) 
    {
        $this->hexCode = $hexCode;
        $this->alpha = $alpha;
    }

    function convert() 
    {
        // If hexcode has # sign, delete it to order
        if ($this->hexCode[0] == '#' ) 
            $this->hexCode = substr($this->hexCode, 1);
        
        // If alpha is starting with 0 number, delete it to order
        if ($this->alpha[0] == '0' ) 
            $this->alpha = substr($this->alpha, 1);
        
        // Try if hexcode length is equal to 3, 6 or other
        // If 3 or 6, make it in order to ready for hexdex(Hexadecimal to decimal) function
        // If not, throw an exception
        try {
            if (strlen($this->hexCode) == 3) 
                return "rgba(".hexdec($this->hexCode[0].$this->hexCode[0]).",".hexdec($this->hexCode[1].$this->hexCode[1]).",".hexdec($this->hexCode[2].$this->hexCode[2]).",".$this->alpha.")";
            elseif (strlen($this->hexCode) == 6) 
                return "rgba(".hexdec($this->hexCode[0].$this->hexCode[1]).",".hexdec($this->hexCode[2].$this->hexCode[3]).",".hexdec($this->hexCode[4].$this->hexCode[5]).",".$this->alpha.")";
            else
                throw new Exception($this->error);
    
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
}

