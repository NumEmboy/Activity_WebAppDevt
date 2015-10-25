<?php

	// implement Tertiary Operator
	$fname 		= empty($_POST['fname']) 			? 'Undefined' 		: $_POST['fname']; 
	$mname 		= empty($_POST['mname'])			? 'Undefined' 		: $_POST['mname'];
	$lname 		= empty($_POST['lname']) 			? 'Undefined' 		: $_POST['lname'];
	$gender 	= empty($_POST['gender'])			? 'Undefined' 		: $_POST['gender'];

	$month 		= ($_POST['month'] == "NULL") 		? 'xx' 		: $_POST['month'];
	$day 		= ($_POST['day'] == "NULL") 		? 'xx' 		: $_POST['day'];
	$year 		= ($_POST['year'] == "NULL") 		? 'xxxx' 		: $_POST['year'];

	// Concatenate Month, Day, Year Variable into single Variable
	$bdate 		= $month ." ". $day .", ". $year;

	$program 	= ($_POST['program'] == "NULL") 	? 'Undefined' 		: $_POST['program'];
	$sType 		= empty($_POST['stype']) 			? 'Undefined' 		: $_POST['stype'];
	$address 	= empty($_POST['address'])			? 'Undefined' 		: $_POST['address'];

?>

 Firstname: <strong><?php echo @$fname; ?></strong><br />
 Middlename:<strong><?php echo @$mname; ?></strong><br />
 Lastname: <strong>	<?php echo @$lname; ?></strong><br />
 Gender: <strong><?php echo @$gender; ?></strong><br />
 Birthday: <strong>	<?php echo @$bdate; ?></strong><br />
 Program: <strong><?php echo @$program; ?></strong><br />
 Student Type: <strong>	<?php echo @$sType; ?></strong><br />
 Address: <strong><?php echo @$address; ?></strong>