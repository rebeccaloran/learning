<!DOCTYPE html>
<html>
<head>
		<title>Learning PHP</title>
</head>
	<body>
<?php 
	echo 'Hello World!<br />';
?>

<br>


<?php
echo $_SERVER['HTTP_USER_AGENT'];
	if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
	echo 'You are using Internet Explorer. Please download Google Chrome! <br />';

// comments
// more notes
?>
<h3>strpos() must have returned non-false</h3>
<p> You are using Internet Explorer. You will now explode.</p>

<?php
}	else {
?>
<h3> strpos() must have returned false</h3>
<p> Congratulations! You are using a real browser!</p>
<?php
}
?>
<br>
<br>
								<hr noshade size=7>
<br>
<br>

<?php
	print "I'm not sure what the difference between the [print] command and [echo] command is, but I think [echo] uses a single quote ['] and [print] uses a double quote[''].";
?>
<br>
<br>
								<hr noshade size=7>
<br>
<br>

<?php
	print "Hello</br>\nWorld";
?>

<!-- Name/Age Form using >> /var/www/action.php -->
	<form action="action.php" method="post">
		<p>Your name: <input type="text" name="name"/></p>
		<p>Your age: <input type="text" name="age"/></p>
		<p><input type="submit"/></p>
	</form>

<!-- End of Form -->  

<br>
<br>
<br>
								<hr noshade size=7>
<br>
<br>
<br>

<!-- Include function of php -->

<?php
	print "</br>This demonstrates the usage of include()</br>";
		include('include.php');
/*
All of the
lines
between [/*] and [[* /] (no space) will be commented out
*/

?>
<br>
<b>Below is a simple math problem.</b>
<br>
<?php
	$x=5;
	$y=6;
		$z=$x+$y;
		print "x + y =";	
		echo $z;
?>



	</body>
</html>

