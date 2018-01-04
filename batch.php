<?php
	header("content-type: image/jpeg");
	$username = $_POST['username'];
	$image = imagecreatefromjpeg('images/batch.jpg');
	$font = "fonts/Baby Blocks.TTF";
	$color = imagecolorallocate($image, 200, 10, 10);
	$x = 720;
	$y = 660;
	imagettftext($image, 55, 0, $x, $y, $color, $font, $username);
	imagejpeg($image);
?>
