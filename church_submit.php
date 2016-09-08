<!DOCTYPE html>
<html>
<head>
<?php
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "pitestsite";
	$dbname = "church_db";
	$dbtable = "production";

	$churchname = $_POST["churchname"];
	$denomination = $_POST["denomination"];
	$prefecture = $_POST["prefecture"];
	$city = $_POST["city"];
	$gmap = $_POST["gmap"];
	$website = $_POST["website"];
	$servday = $_POST["servday"];
	$servtime = $_POST["servtime"];
	$contact = $_POST["contact"];



	try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = $conn->prepare("INSERT INTO $dbtable (churchname, denomination, prefecture, city, gmap, website, servday, servtime, contact)
	VALUES (:churchname, :denomination, :prefecture, :city, :gmap, :website, :servday, :servtime, :contact)");
	$sql->bindParam(':churchname', $churchname);
	$sql->bindParam(':denomination', $denomination);
	$sql->bindParam(':prefecture', $prefecture);
	$sql->bindParam(':city', $city);
	$sql->bindParam(':gmap', $gmap);
	$sql->bindParam(':website', $website);
	$sql->bindParam(':servday', $servday);
	$sql->bindParam(':servtime', $servtime);
	$sql->bindParam(':contact', $contact);

	$sql->execute();
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
Please allow 1-2 weeks for your submission to be reviewed.

<ul>
<li>Church Name: <?php echo $churchname; ?></li>
<li>Denomination: <?php echo $denomination; ?></li>
<li>Location: <a target="_blank" href="<?php echo $gmap; ?>"><?php echo $city . ", " . $prefecture; ?></a></li>
<li>Website: <a target="_blank" href="<?php echo $website; ?>"><?php echo $churchname; ?></a></li>
<li>Service Information: <?php echo $servday . " at " . $servtime; ?></li>
</ul>

</section>
</body>
</html>
