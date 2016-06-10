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
	$sql = $conn->prepare("INSERT INTO $dbtable (churchname, denomination, region, address1, address2, gmap, website, servday, servtime, servlang, churchdesc)
	VALUES (:church, :denom, :region, :add1, :add2, :gmap, :website, :servday, :servtime, :servlang, :desc)";
	$sql->bindParam(':church', $churchname);
	$sql->bindParam(':denom', $denomination);
	$sql->bindParam(':region', $region);
	$sql->bindParam(':add1', $address1);
	$sql->bindParam(':add2', $address2);
	$sql->bindParam(':gmap', $gmap);
	$sql->bindParam(':website', $website);
	$sql->bindParam(':servday', $servday);
	$sql->bindParam(':servtime', $servtime);
	$sql->bindParam(':servlang', $servlang);
	$sql->bindParam(':churchdesc', $desc);

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
<li>Region: <?php echo $region ?></li>
<li>Address: <a target="_blank" href="<?php echo $gmap; ?>"><?php echo $address1 . "<br />" . $address2; ?></a></li>
<li>Website: <a target="_blank" href="<?php echo $website; ?>"><?php echo $churchname; ?></a></li>
<li>Service Information: <?php echo $servtime . ", " . $servday . ", in " . $servlang; ?></li>
<li>Church Description: <?php echo $churchdesc; ?></li>
</ul>

</section>
</body>
</html>
