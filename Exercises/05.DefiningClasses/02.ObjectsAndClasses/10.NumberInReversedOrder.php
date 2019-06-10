<?php
class DecimalNumber {
    /**
     * @var double
     */
    private $num;

    /**
     * DecimalNumber constructor.
     * @param $num
     */
    public function __construct($num)
    {
        $this->num = $num;
    }

    /**
     * @return float
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param $num
     */
    public function setNum($num)
    {
        $this->num = $num;
    }

    public function reverseNum($num)
    {
        return strrev(strval($num));
    }

    public function __toString()
    {
        return $this->reverseNum($this->getNum());
    }

}

$revNum = new DecimalNumber(readline());
echo $revNum;