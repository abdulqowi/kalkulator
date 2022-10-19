<?php 

Class Calculator {

    public $number1;
    public $number2;
    public $calculation;

    public function __construct($num1, $num2, $calc)
    {
        $this->number1 = $num1;
        $this->number2 = $num2;
        $this->calculation = $calc;
    }

    public function calculation()
    {
        switch ($this->calculation) {
        case 'add':
            $result = $this->number1 + $this->number2;
            break;
        case 'sub':
            $result = $this->number1 - $this->number2;
            break;
        case 'mul':
            $result = $this->number1 * $this->number2;
            break;
        case 'bagi':
            $result = $this->number1 / $this->number2;
            break;
        default:
            $result = "Error";
            break;
        }
        return $result;
    }
}