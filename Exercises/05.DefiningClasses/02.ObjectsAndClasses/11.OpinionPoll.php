<?php
class Person {
    /**
     * @var string
     */
    private $name;
    /**
     * @var integer
     */
    private $age;

    /**
     * Person constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function __toString()
    {
        if($this->getAge() > 30) {
            return "{$this->getName()} - {$this->getAge()}" . PHP_EOL;
        } else {
            return '';
        }
    }

}

$n = readline();
$people =[];
for($i = 0; $i < $n; $i++){
    list($name, $age) = explode(' ', readline());
    if($age > 30){
        $people[] = new Person($name, $age);
    }
}
uasort($people, function (Person $p1, Person $p2){
    return $p1->getName() <=> $p2->getName();
});

foreach ($people as $person){
    echo  $person;
}