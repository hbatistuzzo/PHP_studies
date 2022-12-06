<?php //php starts here. It's here on the header that we will pick up information before anything.

if(isset($_POST["submitter"])){ //let's use isset function to see if the SUPER GLOBAL $_POST variable (an associative array) is available

    $username = $_POST["username"]; //now, if the form was submitted, I wanna get the username and put it in a variable
    $password = $_POST["password"]; //and the password too
}
    echo "great this is working too! <br>";
    echo "Hello " . $username;  //now we can even echo it
    echo "Your temporary password is " . $password;
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
    
<!-- this form will pick up data that we send through post format. $_POST will be a  SUPER GLOBAL variable -->

<form action="form2.php" method="post"> <!-- this is where the processing will be done. The action keyword sends the data to the page form.php, via post -->

    <input type="text" name="username" placeholder="Enter Username:"> <!-- added name -->
    <input type="password" name="password" placeholder="Enter Password"><br> <!-- added name -->
    <input type="submit" name="submitter"> <!-- as it is we are only sending the submit information right now, through the keyword name! -->



</form>

    
</body>
</html>