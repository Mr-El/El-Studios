<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Private Upload Form</title>
<link rel="icon" href="imgs/Lotus_Logo-filled.gif">
</head>

<body>
<?php
	$dbhost = "localhost";
	$dbuser = "themrel";
	$dbpass = "K9iao73V\$Kfcq0";
	$dbname = "el_gallery";
	mysql_connect($dbhost, $dbuser, $dbpass) or die('Cannot connect to the server!</p>');
	mysql_select_db($dbname) or die('Database selection problem!');
	
	if (isset($_POST['Submit'])) {
		$Image_ID = $_FILES['Image_ID'];
		$Title = $_FILES['Title'];
		$Description = $_FILES['Description'];
		$Upload = $_FILES['Upload'];
		$Image = $_FILES['Image'];
		
		move_uploaded_file($Image_ID, $Title, $Description, $Upload, $Image);
		$sql="insert into images(Image_ID, Title, Description, Upload, Image)
			values('$Image_ID', '$Title', '$Description', '$Upload', '$Image');";
		sql_query($sql);
	}
?>

	
</body>
</html>
