<!DOCTYPE html>
<html>
<head>
<title>Results</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<section>
<h1>Church Database</h1>
<table>
<tr>
	<th>id</th>
	<th>Church Name</th>
	<th>Denomination</th>
	<th>Region</th>
	<th>Address 1</th>
	<th>Address 2</th>
	<th>Google Maps Link</th>
	<th>Website URL</th>
	<th>Service Day</th>
	<th>Service Time</th>
	<th>Service Language</th>
	<th>Church Description</th>
</tr>
<?php
	class TableRows extends RecursiveIteratorIterator {
		function __construct($it) {
			parent::__construct($it, self::LEAVES_ONLY);
		}

		function current() {
			return "<td>" . parent::current() . "</td>";
		}

		function beginChildren() {
			echo "<tr>";
		}

		function endChildren() {
			echo "</tr>" . "\n";
		}
	}

	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "pitestsite";
	$dbname = "church_db";
	$dbtable = "staging";


	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = $conn->prepare("SELECT * FROM $dbtable");
		$sql->execute();

		$result = $sql->setFetchMode(PDO::FETCH_ASSOC);
		foreach(new TableRows(new RecursiveArrayIterator($sql->fetchAll())) as $k=>$v) {
			echo $v;
		}
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	$conn = null;

?>
</table>
</section>
</body>
</html>
