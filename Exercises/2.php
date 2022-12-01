<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		  Step4: Make a constant and set it to the value of PHP. and use an echo to print it out


			

			 */

		$number1 = 10;
		$number2 = 20;

		echo "$number1 + $number2 is " . $number1 + $number2 . "<br>"; //the break line is just good form since we have more stuff coming next;

		$listA = array(23,24,4324,231,424);//common array

		$listB = array('number' => 23) ;//associative array

		echo $listA[0] . "<br>"; //will only work if we are selecting a single list, otherwise we need a print_r

		echo $listB['number'] . "<br>";


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>