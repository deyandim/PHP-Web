<?php

class Number
{
    /**
     * @var integer
     */
    private $num;

    /**
     * Number constructor.
     * @param $num
     */
    public function __construct($num)
    {
        $this->num = $num;
    }

    /**
     * @return mixed
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param $num
     */
    private function setNum($num)
    {
        $this->num = $num;
    }

    /**
     * @param $num
     * @return string
     */
    public function lastDigit($num): string
    {
        $lastDig = $num[-1];

        $result = '';

        switch ($lastDig) {
            case '1':
                $result = 'one';
                break;
            case '2':
                $result = 'two';
                break;
            case '3':
                $result = 'three';
                break;
            case '4':
                $result = 'four';
                break;
            case '5':
                $result = 'five';
                break;
            case '6':
                $result = 'six';
                break;
            case '7':
                $result = 'seven';
                break;
            case '8':
                $result = 'eight';
                break;
            case '9':
                $result = 'nine';
                break;
            case '0':
                $result = 'zero';
                break;
        }
        return $result;
    }

    public function __toString()
    {
        return $this->lastDigit($this->getNum());
    }
}

$number = new Number(readline());
echo $number;
