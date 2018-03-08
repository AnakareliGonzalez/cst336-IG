<?php
$letters = "abcdefghijklmnopqrstuvwxyz";
$letterArr = array();
for($i = 0; $i < strlen($letters); $i++){
    array_push(&array: $letterArr, $letters[$i]);
}

$num = rand(0, 25);
echo $letters[$num];
echo $letterArr[$num];
?>