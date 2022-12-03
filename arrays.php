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

$numberList = array(); #$ needed since it's a variable.

# this looks pretty much like a function because.. it is a function.

$HenryList = ["name" => 'Henry']; # it's the same thing but it's much more common nowadays

$numberList = [2,45,2,4,45435];

$numberList = array(23,64,234,523,52345.32,'1423',324,'<h1>HELLOOOO</h1>'); #index starts at 0 too, yay

# echo $numberList # by itself will not work, there are a mix of types there

echo $numberList[0];

echo "<br>";

print_r($numberList); # will yield each and every item of the array indicating the index


# ---

# associative arrays are kinds that dont need to be ordered. They are called by labels.

$number = array(10, 20, 49); # this is ordered

print_r($number);

echo "<br>";
echo "<br>";
echo "<br>";
$names = array("first_name" => "Edwin", "last_name" => "Dias"); # this is associate array. We changed the key from the standard 0 to "first_name"! In a way it's like a dictionary I guess.

print_r($names);


# I can call them on echo with their key
echo "<br>";
echo "<br>";
echo "<br>";

echo $names["first_name"] . " " . $names["last_name"];
?>
    
</body>
</html>