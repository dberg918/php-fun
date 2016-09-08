<!DOCTYPE html>
<html>
<head>
<title>Sample Form</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<section>
<h1>JCF Church Information Form</h1>

<form action="church_submit.php" method="post">
	<h3>Church Name</h3>
	<p><input type="text" name="churchname" placeholder="Church Name" required><br /></p>

	<h3>Church Denomination</h3>
	<p><input type="text" name="denomination" placeholder="Denomination" required><br /></p>

	<h3>Prefecture</h3>
	<p><select name="prefecture">
		<option value="Hokkaido">Hokkaido</option>
		<option value="Tohoku">Tohoku</option>
		<option value="Kanto">Kanto</option>
		<option value="Chubu">Chubu</option>
		<option value="Kansai">Kansai</option>
		<option value="Chugoku">Chugoku</option>
		<option value="Shikoku">Shikoku</option>
		<option value="Kyushu">Kyushu</option>
	</select></p>

	<h3>City</h3>
	<p><input type="text" name="city" placeholder="City" required><br /></p>

	<h3>Google Maps URL</h3>
	<p><input type="url" name="gmap" placeholder="Google Maps Link"><br /></p>

	<h3>Church Website URL</h3>
	<p><input type="url" name="website" placeholder="Church Website Link"><br /></p>

	<h3>Service Day</h3>
	<p><input type="radio" name="servday" value="Saturday"> Saturday<br />
	   <input type="radio" name="servday" value="Sunday"> Sunday<br /></p>
	<h3>Service Time</h3>
	<p><input type="time" name="servtime"><br /></p>

	<h3>Contact Email Address</h3>
	<p><input type="email" name="contact" placeholder="Contact Email" required></p>

	<center>
		<input type="submit" value="Send">
		<input type="reset" value="Reset">
	</center>
</form>
</section>

</body>
</html>
