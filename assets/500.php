<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			file_exists('./config.php') ? require './config.php' : define('Name', 'OpenTube');
			$title = '500';
			require './head.php';
			echo '<link rel="stylesheet" href="' . CSSPath . 'forms.css">';
		?>
	</head>
	<body theme="dark">
		<form action="<?= BasePath ?>">
			<img src="<?= ImagesPath . 'OT500.png' ?>" alt="OpenTube 500">
			<h1>Internal server error</h1>
			<h4>Has been occurred an unexpected error processing <u><i>"<?= $_SERVER['REQUEST_URI'] ?>"</i></u></h4>
			<input type="submit" value="Back to home">
		</form>
	</body>
<html>
