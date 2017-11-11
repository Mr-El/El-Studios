<?php
	$id = $_GET['id'];

	$link = mysqli_connect("localhost", "mrel", "halo-2511", "el_gallery");
	$sql = $link->query("select File from Anime where Image_ID = 1");
	$row = mysqli_fetch_array($sql);

	$img = base64_encode($row['File']);

	echo $img;
	
	mysqli_close($link);
?>