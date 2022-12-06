<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$x = "outside"; //global variable

function convert(){

    $x = "inside"; //local variable
}

echo $x; // yields outside

echo "<br>";

convert();

echo $x; // yields outside too. It always echo the global variable, unless...

function convert2(){
    global $x; // I specifically declare it to be global inside the function
    $x = "inside"; // this is not local anymore
}

echo "<br>";

convert2();

echo $x; // yields inside. This variable $x has changed!

?>

</body>
</html>