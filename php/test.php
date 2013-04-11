<!DOCTYPE html>
<html>
<head>
	<title> Test </title>
</head>
	<body>
<?php
	$variable = "What's up?";
	print  "<h1>This is bold.</h1> $variable";
?>

<br>
<br>
								<hr noshade size=7>
<br>
<br>


<!-- Working with forms -->

	<form action="form_script.php" method="POST">
<p>Name: 
	<input type="text" name="name" size="30"/>
</p>

<p>
Shirt Size: 
			<select name="size">
			<option value="title">--Select Size--</option>
			<option value="small">Small</option>
			<option value="medium">Medium</option>
			<option value="large">Large</option>
			</select>
</p>

<p>
Gender:
			<input type="radio" name="gender" value="girl"/>
Girl
			<input type="radio" name="gender" value="boy"/>
Boy
</p>			
	<input type="submit" name="submit" value="Submit Button"/>
	
	</body>
</html>
