<?php
	$subject = $_POST['username'];
	$email = $_POST["email"];
	$message = $_POST["message"]
	mail($email, $subject, $message);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>
	<h3>Email gesendet.</h3>
</body>
</html>