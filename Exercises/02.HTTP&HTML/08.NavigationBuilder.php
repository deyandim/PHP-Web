<?php
if (isset($_GET['categories'])){
    $categories = explode(', ', $_GET['categories']);
    echo getResult($categories, 'Categories');
}
if (isset($_GET['tags'])){
    $tags = explode(', ', $_GET['tags']);
    echo getResult($tags, 'Tags');
}
if (isset($_GET['months'])){
    $months = explode(', ', $_GET['months']);
    echo getResult($months, 'Months');
}

function getResult($categories, $name){
    $result = "<h2>$name</h2><ul>";
    foreach ($categories as $category) {
        $result .= "<li>$category</li>";
    }
    $result .= "</ul>";
    return $result;
}
?>

<form>
    Categories:<input type="text" name="categories"><br>
    Tags:<input type="text" name="tags" style="margin: 5px"><br>
    Months:<input type="text" name="months"><br>
    <input type="submit" value="Generate" style="margin: 5px">
</form>
