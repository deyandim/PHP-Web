<?php
require_once 'config.php';

$mysqli = new mysqli('localhost', 'root', '', 'soft_uni');

$mysqli->set_charset('utf8');

if($mysqli->connect_errno){
    die('Cannot connect to MySQL');
}

$result = $mysqli->query('SELECT first_name, last_name, salary FROM employees ORDER BY salary DESC LIMIT 10');

if(!$result){
    die('Cannot read the post');
}
echo '<table style="border: 2px solid">' . PHP_EOL;
echo '<tr><th>First Name</th><th>Last Name</th><th>Salary</th></tr>';
while ($row = $result->fetch_assoc()){
    $name = htmlentities($row['first_name']);
    $lastName = htmlentities($row['last_name']);
    $salary = htmlentities($row['salary']);

    echo "<tr><td>$name</td><td>$lastName</td><td>$salary</td></tr>";
}
echo '</table>';

//var_dump($result->fetch_assoc());