<?php
class Car {
//model, engine, weight and color
    /**
     * @var string
     */
    private $model;
    /**
     * @var string
     */
    private $engine;
    /**
     * @var integer
     */
    private $weight;
    /**
     * @var string
     */
    private $color;

    public function __construct(string $model, string $engine, int $weight, string $color)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->weight = $weight;
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return string
     *
     */
    public function getEngine(): string
    {
        return $this->engine;
    }

    /**
     * @param string $engine
     *
     */
    public function setEngine(string $engine): void
    {
        $this->engine = $engine;
    }

    /**
     * @return int
     *
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     *
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     *
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     *
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function __toString()
    {
        return '';
    }


}

class Engine {
//model, power, displacement and efficiency
    /**
     * @var string
     */
    private $model;
    /**
     * @var integer
     */
    private $power;
    /**
     * @var integer
     */
    private $displacement;
    /**
     * @var string
     */
    private $efficiency;

    public function __construct(string $model, int $power, int $displacement, string $efficiency)
    {
        $this->model = $model;
        $this->power = $power;
        $this->displacement = $displacement;
        $this->efficiency = $efficiency;
    }

    /**
     * @return string
     */
    public function getModel():string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return int
     */
    public function getPower(): int
    {
        return $this->power;
    }

    /**
     * @param int $power
     */
    public function setPower(int $power): void
    {
        $this->power = $power;
    }

    /**
     * @return int
     */
    public function getDisplacemnet(): int
    {
        return $this->displacement;
    }

    /**
     * @param int $displacement
     */
    public function setDisplacement(int $displacement): void
    {
        $this->displacement = $displacement;
    }

    /**
     * @return string
     */
    public function getEfficiency(): string
    {
        return $this->efficiency;
    }

    /**
     * @param string $efficiency
     */
    public function setEfficiency(string $efficiency): void
    {
        $this->efficiency = $efficiency;
    }

    public function __toString()
    {
        return '';
    }
}

$n = readline();

for ($i = 0; $i < $n; $i++){
    $inputEngine = explode(' ', readline());
}

$m = readline();

for ($i = 0; $i < $n; $i++){
    $inputCar = explode(' ', readline());
}