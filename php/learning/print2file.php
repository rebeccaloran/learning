<?php
	$email = $_POST['email'];
	$file = "http://localhost/www/learning/email_list.html";
file_put_contents($file, $email . PHP_EOL, FILE_APPEND);

?>




