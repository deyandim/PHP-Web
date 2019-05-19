<?php

if (isset($_GET['input'])){
    $text = $_GET['input'];
    preg_match_all('/[^\s]/', $text, $chars);
    $chars = $chars[0];
    echo coloringChars($chars);
}
function coloringChars($chars){
    $output = '';
    foreach ($chars as $char) {
        if(ord($char) % 2 != 0){
          $output .= "<span style='color:blue'>$char </span>";
        } else{
            $output .= "<span style='color:red'>$char </span>";
        }
    }
    return $output;
}
?>

<form>
    <textarea rows="10" name="input"></textarea><br>
    <input type="submit" value="Color Text">
</form>
