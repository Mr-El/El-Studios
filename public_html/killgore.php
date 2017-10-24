<!doctype html>
<html>
<head>
<title>El's Studios - Arwork</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="icon" href="imgs/Lotus_Logo-filled.gif">
<script src="script.js"></script>
<?php
		$con = mysqli_connect("localhost","mrel","halo-2511","el_gallery");
	
		if (mysqli_connect_errno()) {
			echo "Failed to connect to database!", mysqli_connect_error();
		}
	
		$Anime_File = mysql_query('select File from Anime where Image_ID = 1');
	
		
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
	<div class="menu">
		<ul>
			<li><a href="javascript:all()" onClick="">All</a></li>
			<li><a href="javascript:masterpieces()">Masterpieces</a></li>
			<li><a href="javascript:anime()">Anime</a></li>
			<li><a href="javascript:furry()">Furry</a></li>
			<li><a href="javascript:nsfw()">NSFW</a></li>
		</ul>
	</div>
	<div class="gallery" id="dis">
	
	</div>
</body>
</html>
