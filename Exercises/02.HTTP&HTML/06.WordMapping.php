<?php
$output = [];
if (isset($_GET['input']) && !empty(trim($_GET["input"]))){
    $input = $_GET['input'];

    preg_match_all('/\w+/', $input, $words);
    $words = $words[0];
    foreach ($words as $word) {
        if (!key_exists(strtolower($word), $output)){
            $output[strtolower($word)] = 1;

        } else {
            $output[strtolower($word)] += 1;
        }
//        arsort($output);
    }
    echo buildTable($output);
}

function buildTable($words){
    $result = "<table border='2'>";
    foreach ($words as $word => $count) {
        $result .= "<tr><td>$word</td><td>$count</td></tr>";
    }
    $result .= "</table>";

    return $result;
}
?>

<form>
    <textarea rows="10" name="input"></textarea><br>
    <input type="submit" value="Count words">
</form>
