<!DOCTYPE html>
<html>
<head>
<title>Churches in Japan</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="location.js" async></script>
</head>

<body>
<h1>Churches in Japan</h1>
<p>
    Want to help us build the database?
    <a href="/church_form.php">Send us your church's information!</a>
</p>

<button onclick="getLocation()">Check your location</button>

<div id="mapholder"></div>

<?php
include "connect.php";
include "ChurchEntry.php";

$query = $handler->query('SELECT churchname, denomination, prefecture, city,
                          gmap, website, servday, servtime FROM production');
$query->setFetchMode(PDO::FETCH_CLASS, 'ChurchEntry');
while($r = $query->fetch())
{
    $r->displayChurch();
}
?>

</body>
</html>
