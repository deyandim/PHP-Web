<?php

class Box
{
    /**
     * @var float
     */
    private $length;
    /**
     * @var float
     */
    private $width;
    /**
     * @var float
     */
    private $height;

    /**
     * Box constructor.
     * @param float $length
     * @param float $width
     * @param float $height
     * @throws Exception
     */
    public function __construct(float $length, float $width, float $height)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * @param float $length
     * @throws Exception
     */
    private function setLength(float $length): void
    {
        if(!$this->isValid($length)){
            $name = 'Length';
            throw new Exception("{$name} cannot be zero or negative.");
        }
        $this->length = $length;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $width
     * @throws Exception
     */
    private function setWidth(float $width): void
    {
        if(!$this->isValid($width)){
            $name = 'Width';
            throw new Exception("{$name} cannot be zero or negative.");
        }
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     * @throws Exception
     */
    private function setHeight(float $height): void
    {
        if(!$this->isValid($height)){
            $name = 'Height';
            throw new Exception("{$name} cannot be zero or negative.");
        }
        $this->height = $height;
    }

    /**
     * @param float $length
     * @param float $width
     * @param float $height
     * @return float
     */
    private function volume(float $length, float $width, float $height): float
    {
        $volume = $length * $width * $height;
        return $volume;
    }

    /**
     * @param float $length
     * @param float $width
     * @param float $height
     * @return float
     */
    private function lateralSurfaceArea(float $length, float $width, float $height): float
    {
        $lateralSurfaceArea = 2 * $length * $height + 2 * $width * $height;
        return $lateralSurfaceArea;
    }

    /**
     * @param float $length
     * @param float $width
     * @param float $height
     * @return float
     */
    private function surfaceArea(float $length, float $width, float $height): float
    {
        $secondPart = $this->lateralSurfaceArea($length, $width, $height);
        $surfaceArea = 2 * $length * $width + $secondPart;
        return $surfaceArea;
    }


    public function __toString(): string
    {
        $surface = number_format($this->surfaceArea($this->getLength(), $this->getWidth(), $this->getHeight()), 2, '.', '');
        $lateralSurfaceArea = number_format($this->lateralSurfaceArea($this->getLength(), $this->getWidth(), $this->getHeight()), 2, '.', '');
        $volume = number_format($this->volume($this->getLength(), $this->getWidth(), $this->getHeight()), 2, '.', '');

        $output = "Surface Area - " . $surface . PHP_EOL
            . "Lateral Surface Area - " . $lateralSurfaceArea . PHP_EOL
            . "Volume - " . $volume . PHP_EOL;
        return $output;
    }

    private function isValid($number): bool
    {
        if($number <= 0){
            return false;
        }
        return true;
    }
}

$length = floatval(readline());
$width = floatval(readline());
$height = floatval(readline());

try {
    $box = new Box($length, $width, $height);
    echo $box;
} catch (Exception $e) {
   echo $e->getMessage();
}

