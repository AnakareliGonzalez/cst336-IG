<!DOCTYPE html>
<html>

<head>
    <title>Homework 2: Anakareli Gonzalez</title>
    
    <link href = "/styles.css" rel = "stylesheet" type = "text/css" />
    <link href="<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">"
    
</head>

<body>
    <header>
        <h1 id="h1">Magic 8 Ball</h1>
    </header>
</body>
    
</html>

<?php
    
$img = array('/cst-336/hw2/img/askagain.jpg, /cst-336/hw2/img/maybe.jpg, /cst-336/hw2/img/notlikely.jpg, /cst-336/hw2/img/yes.jpg');

$out = rand(1,4);

for($i = 0; $i < 4; $i++){
    echo "<li style=\"display:inline"> <img src=\"$img[$i]\"width=\"250\" height=\"250\"></li>";
}


?>