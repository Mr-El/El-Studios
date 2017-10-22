<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$mysqli = new mysqli("localhost", "themrel", "K9iao73V\$Kfcq0", "el_gallery");
	$result = $mysqli->query("select * from images");
	
	echo $result;
	echo Hello;
?>
<?php
	echo '<p>hello!</p>';
?>
</body>
</html>
