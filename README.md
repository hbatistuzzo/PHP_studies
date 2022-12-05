# PHP_studies

- with XAMPP!

![GitHub top language](https://img.shields.io/github/languages/top/hbatistuzzo/PHP_studies)
![GitHub commit activity](https://img.shields.io/github/commit-activity/m/hbatistuzzo/PHP_studies)
![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/hbatistuzzo/PHP_studies)
![GitHub last commit](https://img.shields.io/github/last-commit/hbatistuzzo/PHP_studies)

## SETUP

Currently, we need to run services and stop MySQL80 before attempting to set the connection through XAMPP's Control Panel. Apache runs fine though.
<p align="center"><img src="images/1.png" alt="full"  width="100%"></p>

## Technologies

- Python 3.8.3
	- Pandas 1.4.4
	- Numpy 1.20.3
	- Pycaret 2.3.10
	- Seaborn 0.11.2
	- Matplotlib 3.5.3
	- Scikit-learn 1.1

---

- Folder copy in XAMPP/htdocs/demo/
- Access through http://localhost/demo/Course_Exercise_Files/demo/

---

## Exercise 2

**Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:**

$number1 = 10;
$number2 = 20;

**Step 2: Add the two variables and display the sum with echo:**

echo "$number1 + $number2 is " . $number1 + $number2 . "<br>"; //the break line is just good form since we have more stuff coming next

**Step3: Make 2 Arrays with the same values, one regular and the other associative**

- associative arrays are kinds that dont need to be ordered. They are called by labels.
	- $number = array(10, 20, 49); # this is an ordered array
	- print_r($number);
	- $names = array("first_name" => "Edwin", "last_name" => "Dias"); # this is associate array. We changed the key from the standard 0 to "first_name"! In a way it's like a dictionary I guess.

```
		$listA = array(23,24,4324,231,424);//common array

		$listB = array('number' => 23) ;//associative array

		echo $listA[0] . "<br>"; //will only work if we are selecting a single list, otherwise we need a print_r

		echo $listB['number'] . "<br>";
```

## If statements are super important

```
if(4 == "4"){ \\ equal to...
    echo "4 is equal to '4'. It is known, muad'dib";

}

if(4 === "4"){ \\ identical to...
    echo "nah, muad'dib";

}
```

- This makes all the difference. == works between data types. === does not

---

## IF statements VS Switches:

```
// $number = 4;

// if($number < 10){

//     echo "this"; // will yield true and print "this"

// }

$number2 = 47;

// switches are useful when testing one condition against multiple values
switch($number2){

    case 34:
        echo "it is 34";
        break;
    case 47:
        echo "it is 47";
        break;
    case 88:
        echo "it is 88";
        break;
    default:
        echo"we could not find anything";
        break;
}
```

---

## While Loops

```
<?php

// pure while syntax

$i = 0; // a counter

while($i < 10){

    $i += 1;
    echo "Our counter is $i" . "<br>";
}

?>
```

---

## For Loops

```
<?php

for($i = 0; $i < 10; $i++){ // initialize the counter inside the loop itself | then test the condition | THEN increment

    echo $i . "<br>";

}

    echo "we are out of the loop now!";

?>
```

---

## Foreach Loops

- works only with arrays. The loop will go through the whole array.

```
<?php

$numbers = array(10,20,30,40,50,60);

foreach($numbers as $number){ // $numbers is the array. $number will incorporate each element.

    echo $number . "<br>";

}

?>
```

---

# PRACTICE EXERCISE 3

```
<?php  

 // Step 1: Make an if Statement with elseif and else to finally display string saying, I love PHP

 if(4 < 3){

	echo "this will not work dude";}

	elseif(4 > 3){
		echo "I love PHP";}

	else{
		echo "this will not work dude";}


//Step 2: Make a forloop  that displays 10 numbers


echo "<br>";

for($i=1;$i<11;$i++){
	echo $i;
}

echo "<br>";


//Step 3 : Make a switch Statement that test againts one condition with 5 cases


$condition = 100;

switch($condition){
	case 20:
		echo "this won't work";
		break;
	case 40:
		echo "this won't work";
		break;
	case 60:
		echo "this won't work";
		break;
	case 80:
		echo "this won't work";
		break;
	case 100:
		echo "this will work. Your condition is the number " . $condition;
		break;
}
?>
```

---
---

# Custom Functions

```
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
```

---

## Function parameters

```
<?php

function exclamate($message){

    echo $message . "!!!!";

}

exclamate("Hello there");

?>
```

---

## Function return values

```
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
```

---

## Global Variable and Scope

```
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
```

---

## Constants


```
<?php

$number = 10;
echo $number; //this is how we define a variable

define("NAME", 1000); // is how to define a constant. First argument is its name, second is the actual value;

echo NAME; //the constant NAME cannot be changed under any cirscumstances.
?>
```

---

## Practice 4

```
	
	<?php  

 // Step1: Define a function and make it return a calculation of 2 numbers

function summer(){

	$local1 = 20;
	$local2 = 30;
	$sum = $local1 + $local2;
	return $sum;
}

$sum = summer();
echo $sum . "<br>";

 // Step 2: Make a function that passes parameters and call it using parameter values

 function calc($num1,$num2){

	$res = cos($num1) + sin($num2);
	return $res;
	
	}
	
	echo calc(0,(3.1415/2));
?>
```

---
---

# Section 6 - Form data in PHP.

- We are shifting gears now. The php section goes in the head before anything else, where we process information sent by the form via post format.
- Only the parts in the form where we set a **name** keyword are being processed so far.
```
<?php //php starts here. It's here on the header that we will pick up information before anything.

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
    
<!-- this form will pick up data that we send through post format. $_POST will be a  SUPER GLOBAL variable -->

<form action="form.php" method="post"> <!-- this is where the processing will be done. The action keyword sends the data to the page form.php, via post -->

    <input type="text" placeholder="Enter Username:">
    <input type="password" placeholder="Enter Password"><br>
    <!-- <input type="submit" name="submitter"> as it is we are only sending the submit information right now, through the keyword name! -->

</form>

    
</body>
</html>
```

## With validations:

```
<?php //php starts here. It's here on the header that we will pick up information before anything.

if(isset($_POST["submitter"])){ //let's use isset function to see if the SUPER GLOBAL $_POST variable (an associative array) is available

    $minimum = 3;
    $maximum = 8;

    $username = $_POST["username"]; //now, if the form was submitted, I wanna get the username and put it in a variable
    $password = $_POST["password"]; //and the password too
}

    // now lets do a validation
    if(strlen($username) < $minimum || strlen($username) > $maximum){
        echo "<h1>Username has to be longer than $minimum chars and shorter than $maximum chars</h1>";
    }
    else{
        echo "great this is working too! <br>";
        echo "Hello " . $username;  //now we can even echo it
        echo " Your temporary password is " . $password . "<br>";
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
    
<!-- this form will pick up data that we send through post format. $_POST will be a  SUPER GLOBAL variable -->

<form action="form3.php" method="post"> <!-- this is where the processing will be done. The action keyword sends the data to the page form.php, via post -->

    <input type="text" name="username" placeholder="Enter Username:"> <!-- added name -->
    <input type="password" name="password" placeholder="Enter Password"><br> <!-- added name -->
    <input type="submit" name="submitter"> <!-- as it is we are only sending the submit information right now, through the keyword name! -->

</form>
```

---
---

- We will use http://localhost/phpmyadmin to connect to MySQL
- Create a database.
- Create a table
	- Define the structure. A_I (auto-increment) might come in handy.
	- Once it's done, insert tab allows for manual data addition.

Now that this is taken care of, we can communicate with the tables in them databases using php. Markup time!
- This template uses a lot of advanced html!

'''
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="container">

    <div class="col-xs-6">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Submit">

        </form>
    </div>

</div>

</body>
</html>
'''