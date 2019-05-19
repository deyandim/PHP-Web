<form>
    Name:<input type="text" name="name"><br>
    Phone:<input type="text" name="phone"><br>
    Age:<input type="number" name="age"><br>
    Address:<input type="text" name="address"><br>
    <input type="submit" value="Get Info">
</form>

<?php
if (isset($_GET['name']) && isset($_GET['phone']) && isset($_GET['age']) && isset($_GET['address'])){
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $age = $_GET['age'];
    $address = $_GET['address'];
    echo getAllInfo($_GET);
}
function getAllInfo($arrInfo){
    $output = "<table border='2'>";
    foreach ($arrInfo as $key => $value){
        if($key == 'phone'){
            $key = "Phone number";
        }
        $key = ucfirst($key);
        $output .= "<tr><td style='background-color: orange'><b>$key</b></td><td style='text-align: right'>$value</td></tr>";
    }
    $output .= "</table>";
    return $output;
}

?>