<?php
class Employee {
    /**
     * @var string
     */
    public $name;
    /**
     * @var double
     */
    public $salary;
    /**
     * @var string
     */
    public $position;
    /**
     * @var string
     */
    public $department;
    /**
     * @var string
     */
    public $email;
    /**
     * @var integer
     */
    public $age;

    /**
     * Employee constructor.
     * @param string $name
     * @param float $salary
     * @param string $position
     * @param string $department
     * @param string|null $email
     * @param int|null $age
     */
    public function __construct(string $name, float $salary, string $position, string $department, string $email = null, int $age = null)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        $this->email = $email;
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
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @param float
     */
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @param string $department
     */
    public function setDepartment(string $department): void
    {
        $this->department = $department;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function __toString()
    {
        return $this->getName() . ' ' . number_format($this->getSalary(), 2) . ' ' . $this->getEmail() . ' ' . $this->getAge();
    }
}

$n = readline();
$arr = [];
$output = [];
for ($i = 0; $i < $n; $i++) {
    $input = explode(' ', readline());

    if(count($input) == 4){
        list($name, $salary, $position, $department) = $input;
        $age = -1;
        $email = 'n/a';
    } elseif (count($input) == 5) {
        list($name, $salary, $position, $department) = $input;
        if(filter_var($input[4], FILTER_VALIDATE_EMAIL)){
            $email = $input[4];
            $age = -1;
        }
        if(filter_var($input[4], FILTER_VALIDATE_INT)){
            $age = $input[4];
            $email = 'n/a';
        }
    } else {
        list($name, $salary, $position, $department, $email, $age) = $input;
    }

    $employee = new Employee($name, $salary, $position, $department, $email, $age);
    if(!isset($department, $output)) {
        $output[$department] = $salary;


    } else {
        $output[$department][] = $salary;
    }
    $arr[] = $employee;
}

uasort($arr, function(Employee $e1, Employee $e2){
    return $e2->getSalary() <=> $e1->getSalary();
});
$highSalaray = 0;
$highDep = '';


$count = 0;

foreach ($output as $dep => $sal) {
    if($highSalaray < array_sum($sal) / count($sal)){
        $highSalaray = array_sum($sal) / count($sal);
        $highDep = $dep;
    }
}

echo "Highest Average Salary: {$highDep}" . PHP_EOL;
foreach ($arr as $emp){
    if($emp->getDepartment() == $highDep) {
        echo $emp .PHP_EOL;
    }
}