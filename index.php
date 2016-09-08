<!DOCTYPE html>
<html>
<head>
<title>Churches in Japan</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<h1>Churches in Japan</h1>
<p>
    Want to help us build the database?
    <a href="/church_form.php">Send us your church's information!</a>
</p>

<?php
include "connect.php";
include "ChurchEntry.php";

$query = $handler->query('SELECT churchname, denomination, prefecture, city,
                          gmap, website, servday, servtime FROM production');
$query->setFetchMode(PDO::FETCH_CLASS, 'ChurchEntry');
while($r = $query->fetch())
{
    $r->displayName();
}
?>

</body>
</html>
