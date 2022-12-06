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

function say_something(){

    echo "Hello Student, do you like the class? Yes? Okay great!";
}

function calculate(){

    echo 453+242;

}

//either function will work if I call them, but..
// I can also have functions inside of functions.

function init(){

    say_something();
    echo "<br>";
    echo "and now the calculation below" . "<br>";
    calculate();

}

init(); // THIS here is the only single line that is actually being run.

?>
    
</body>
</html>