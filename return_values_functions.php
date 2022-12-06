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

function addNumbers($var1, $var2){

    $sum = $var1 + $var2; // but now we want to return the data
    return $sum;

}

$result = addNumbers(5,10);

echo $result . "<br>"; // now I can print the result

$result = addNumbers($result,10); // I can even use the result in the function itself again, and overwrite the value of $result

echo $result;

?>
    
</body>
</html>