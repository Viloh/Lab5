<!DOCTYPE html>
<html>
<head>
	<title>Lab1</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/FlorianHild_lab1.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<?php
		include("config.php");
	?>
</head>
<body>
	<div id="pageC">
	<?php
		include("header.php");
	?>
		<main>
			<div>
				<h3> Write your data here</h3>
				<form>
					<input type="text" name="" class="textF" value="Name">
					<input type="text" name="" class="textF" value="e-mail">
					<input type="text" name="" class="textF" value="Phone">
					<input type="submit" name="" value="Send" id="submit1">
				</form>
			</div>
		</main>
		<?php
			include("footer.php");
		?>
	</div>
</body>
</html>