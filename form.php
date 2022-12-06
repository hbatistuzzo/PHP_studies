<?php //here on the header we will pick up information before anything.

if(isset($_POST["submitter"])){ //let's use isset function to see if the SUPER GLOBAL $_POST variable (an associative array) is available

    echo "Yes, it works! The submit button was pressed";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- $_POST // will pick up data that we send through form format. This is a SUPER GLOBAL variable -->

<form action="form.php" method="post"> <!-- this is where the processing will be done -->

    <input type="text" placeholder="Enter Username:">
    <input type="password" placeholder="Enter Password"><br>
    <input type="submit" name="submitter">



</form>

    
</body>
</html>