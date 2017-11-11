function anime() {
		document.getElementById('img1').innerHTML = '<img src="data:image/jpg;charset=utf8;base64, <?php $id = 1; echo $img; ?>" class="galleryImg"/>';
		document.getElementById('title1').innerHTML = '<p id="t1"></p>';
	}