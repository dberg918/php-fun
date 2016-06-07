<!DOCTYPE html>
<html>
<head>
<?php
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "pitestsite";
	$dbname = "church_db";
	$dbtable = "staging";

	$churchname = $_POST["churchname"];
	$denomination = $_POST["denomination"];
	$region = $_POST["region"];
	$address1 = $_POST["address1"];
	$address2 = $_POST["address2"];
	$gmap = $_POST["gmap"];
	$website = $_POST["website"];
	$servday = $_POST["servday"];
	$servtime = $_POST["servtime"];
	$servlang = $_POST["servlang"];
	$churchdesc = $_POST["churchdesc"];
	$contact = $_POST["contact"];



	try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO $dbtable (churchname, denomination, region, address1, address2, gmap, website, servday, servtime, servlang, churchdesc) VALUES ('$churchname', '$denomination', '$region', '$address1', '$address2', '$gmap', '$website', '$servday', '$servtime', '$servlang', '$churchdesc')";
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
<h1>Submission Successful</h1>

</section>
</body>
</html>
