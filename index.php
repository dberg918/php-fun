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

	<h3>Region</h3>
	<p><select name="region">
		<option value="hokkaido">Hokkaido</option>
		<option value="tohoku">Tohoku</option>
		<option value="kanto">Kanto</option>
		<option value="chubu">Chubu</option>
		<option value="kansai">Kansai</option>
		<option value="chugoku">Chugoku</option>
		<option value="shikoku">Shikoku</option>
		<option value="kyushu">Kyushu</option>
	</select></p>

	<h3>Church Address</h3>
	<p><input type="text" name="address1" placeholder="Address Line 1" required><br /></p>
	<p><input type="text" name="address2" placeholder="Address Line 2"><br /></p>

	<h3>Google Maps URL</h3>
	<p><input type="url" name="gmap" placeholder="Google Maps Link"><br /></p>

	<h3>Church Website URL</h3>
	<p><input type="url" name="website" placeholder="Church Website Link"><br /></p>

	<h3>Service Day</h3>
	<p><input type="radio" name="servday" value="saturday"> Saturday<br />
	   <input type="radio" name="servday" value="sunday"> Sunday<br /></p>
	<h3>Service Time</h3>
	<p><input type="time" name="servtime"><br /></p>

	<h3>Service Language</h3>
	<p><input type="checkbox" name="servlang" value="English"> English<br />
	   <input type="checkbox" name="servlang" value="Japanese"> Japanese<br /></p>

	<h3>Church Description</h3>
	<p><textarea name="churchdesc" placeholder="Church Description"></textarea></p>

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
