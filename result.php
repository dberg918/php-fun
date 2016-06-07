<!DOCTYPE html>
<html>
<head>
<?php
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "pitestsite";
	$dbname = "form_db";
	$dbtable = "members";

	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO $dbtable (lastname, firstname, email, password) VALUES ('$lastname', '$firstname', '$email', '$password')";
	$conn->exec($sql);
	$last_id = $conn->lastInsertId();
	}
	catch(PDOException $e) {
	echo $sql . "<br />" . $e->getMessage();
	}
	$conn = null;

?>
<title>Results</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<section>
<h1>Results</h1>
<p>Here's your submitted information:</p>

<p>
	<?php echo "Name: " . $firstname . " " . $lastname; ?><br />
	<?php echo "Email address: " . $email; ?><br />
	<?php echo "Password: " . $password; ?><br />
	<?php echo "Your member ID is " . $last_id; ?>
</p>

</section>
</body>
</html>
