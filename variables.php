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

# name; # this variable is empty right now

$name = "Henry"; # now we have declared it. Single quotes should work too.
$number = 100; # numbers dont have quotes

# good practice for naming variables is camel case e.g. ayyLmao

echo $name . " " . $number . " is a really cool guy" . "<br>"; #dots are used to concatenate strings

$name2 = "I said <h1> HELLOOOO </h1>"; #we can even assign html syntax to strings inside a variable

echo "\r\n" . $name2;

?>



</body>
</html>