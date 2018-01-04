<! doctype html>
<html>
<head>
	<?php 
		include_once('web_head.php'); 
	?>
</head>
<body>
	<header>
		<?php
			include_once('header.php');
		?>
	</header>
	<div class="container">
		<h1>GET YOU DAILY BATCHES FROM SUMITPICX</h1>
		<form method="post" action="batch.php">
			<label>Enter Your Name</label>
			<br>
			<input type="text" placeholder="Enter your name to get the batch" name="username">
			<br>
			<br>
			<input type="submit" value="Click Here to get Batch">
		</form>
		<h2>Check People Favorite Batches</h2>
		<hr>
		<a href="images/gallery1.jpg"><img src="images/gallery1.jpg"></a>
		<a href="images/gallery2.jpg"><img src="images/gallery2.jpg"></a>
		<a href="images/gallery3.jpg"><img src="images/gallery3.jpg"></a>
		<a href="images/gallery4.jpg"><img src="images/gallery4.jpg"></a>
		<a href="images/gallery5.jpg"><img src="images/gallery5.jpg"></a>
		<a href="images/gallery6.jpg"><img src="images/gallery6.jpg"></a>
		<a href="images/gallery7.jpg"><img src="images/gallery7.jpg"></a>
		<a href="images/gallery8.jpg"><img src="images/gallery8.jpg"></a>
	</div>
	<footer>
		<?php
			include_once('footer.php');
		?>
	</footer>
</body>
</html>