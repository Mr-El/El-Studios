<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>El's Studios - Arwork</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="icon" href="imgs/Lotus_Logo-filled.gif">
<script src="script.js"></script>

<?php
	$id = $_GET['id'];

	$link = new mysqli("localhost", "mrel", "halo-2511", "el_gallery");
	$sql = $link->query("select File from Anime where Image_ID = $id");
	$row = mysqli_fetch_object($sql);

	header("Content-type: image/jpeg");
	echo base64_encode($row['File']);


?>
	
</head>


	
<body>
	<div class="banner">
		<img class="logo" src="imgs/Lotus_Logo-filled.gif">
		<br clear="right"/>
		<h1 class="headtxt">Welcome to El's Studios!</h1>
	</div>
	<div class="sites">
		<a class="links" href="http://elstudios.org" title="">Home</a>
		<a class="links" href="http://elstudios.org/artwork" title="artwork">Artwork</a>
		<a class="links" href="http://elstudios.org/forums" title="forums">Forums</a>
		<a class="links" href="http://elstudios.org/commisions" title="commisions">Commisions</a>
		<a class="links" href="http://elstudios.org/server" title="server">Minecraft Server</a>
		<a class="links" href="http://elstudios.org/projects" title="projects">Animation Projects</a>
		<a class="links" href="http://elstudios.org/programming" title="programming">Programming Projects</a>
	</div>
	<input type="text" style="background-image: url("imgs/mag-glass.png")"/>
	<div class="menu">
		<ul>
			<li class="artList"><a href="javascript:all()" onClick="">All</a></li>
			<li class="artList"><a href="javascript:masterpieces()">Masterpieces</a></li>
			<li class="artList"><a href="javascript:anime()">Anime</a></li>
			<li class="artList"><a href="javascript:manga()">Manga</a></li>
			<li class="artList"><a href="javascript:furry()">Furry</a></li>
			<li class="artList"><a href="javascript:nsfw()">NSFW</a></li>
			<li class="artList"><a href="javascript:scetches()">Sketches</a></li>
		</ul>
	</div>
	<script>
		function anime() {
			document.getElementById('img1').innerHTML = '<img src="data:image/jpeg;base64, getImage.php?id=2" width="100"/>';
			document.getElementById('title1').innerHTML = '<p id="t1"></p>';
		}
	</script>
	<div class="gallery">
		<div id="Gallery">
			<table>
				<tr>
					<th><a href="http://elstudios.org/art#art1" id="img1"></a></th>
				</tr><tr>
					<th id="title1"></th>
				</tr>
			</table>
			
		</div>
		<div id="pageNumbers">
			<a href="#go2First"><<</a> <a href="goBack"><</a> <a href="#page1">[1]</a> <a href="#page2">[2]</a> <a href="#page3">[3]</a> <a href="#page4">[4]</a> <a href="#page5">[5]</a> <a href="#page6">[6]</a> <a href="#page7">[7]</a> <a href="#page8">[8]</a> <a href="#page9">[9]</a> <a href="#page10">[10]</a> <a href="#page11">[11]</a> <a href="#page12">[12]</a>
		</div>
		
	</div>
</body>
</html>
