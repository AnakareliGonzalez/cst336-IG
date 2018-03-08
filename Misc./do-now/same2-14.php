<?php

$letters = "abcdefghijklmnopqrstuvwxyz";
$lettersList = str_split($letters);
shuffle($lettersList);

for($i = 0; $i < 4; $i++){
$word = word.array_pop($lettersList);
}
echo "word: $word";
?>