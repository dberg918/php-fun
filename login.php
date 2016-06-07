<!DOCTYPE html>
<html>
<head>
<title>Log into your account</title>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
	$email = $password = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = test_input($_POST["email"]);
		$password = test_input($_POST["password"]);
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchar($data);
		return $data;
	}
?>
</head>
<body>
	<section>
	<h1>Login</h1>
	<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<input type="email" name="email"><br />
	<input type="password" name="password"><br />
	</form>
	</section>
</body>
</html>
