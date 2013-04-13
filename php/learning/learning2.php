<!DOCTYPE html>
<html>
<head>
	<title> Learning PHP 2 </title>
</head>
	<body>
<?php
	$txt="Hello World";
	$x=5; // global scope
?>

<?php
	function myTest()
{  // anything between { and } are local
	echo $x; // local scope
}

		mytest();
?>	


	</body>
</html>

