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
		<option value="Aichi">Aichi</option>
		<option value="Akita">Akita</option>
		<option value="Aomori">Aomori</option>
		<option value="Chiba">Chiba</option>
		<option value="Ehime">Ehime</option>
		<option value="Fukui">Fukui</option>
		<option value="Fukuoka">Fukuoka</option>
		<option value="Fukushima">Fukushima</option>
		<option value="Gifu">Gifu</option>
		<option value="Gunma">Gunma</option>
		<option value="Hiroshima">Hiroshima</option>
		<option value="Hokkaido">Hokkaido</option>
		<option value="Hyogo">Hyogo</option>
		<option value="Ibaraki">Ibaraki</option>
		<option value="Ishikawa">Ishikawa</option>
		<option value="Iwate">Iwate</option>
		<option value="Kagawa">Kagawa</option>
		<option value="Kagoshima">Kagoshima</option>
		<option value="Kanagawa">Kanagawa</option>
		<option value="Kumamoto">Kumamoto</option>
		<option value="Kyoto">Kyoto</option>
		<option value="Kochi">Kochi</option>
		<option value="Mie">Mie</option>
		<option value="Miyagi">Miyagi</option>
		<option value="Miyazaki">Miyazaki</option>
		<option value="Nagano">Nagano</option>
		<option value="Nagasaki">Nagasaki</option>
		<option value="Nara">Nara</option>
		<option value="Niigata">Niigata</option>
		<option value="Oita">Oita</option>
		<option value="Okayama">Okayama</option>
		<option value="Okinawa">Okinawa</option>
		<option value="Osaka">Osaka</option>
		<option value="Saga">Saga</option>
		<option value="Saitama">Saitama</option>
		<option value="Shiga">Shiga</option>
		<option value="Shimane">Shimane</option>
		<option value="Shizuoka">Shizuoka</option>
		<option value="Tochigi">Tochigi</option>
		<option value="Tokushima">Tokushima</option>
		<option value="Tottori">Tottori</option>
		<option value="Toyama">Toyama</option>
		<option value="Tokyo">Tokyo</option>
		<option value="Wakayama">Wakayama</option>
		<option value="Yamagata">Yamagata</option>
		<option value="Yamaguchi">Yamaguchi</option>
		<option value="Yamanashi">Yamanashi</option>
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
