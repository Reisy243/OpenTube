<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			file_exists('./config.php') ? require './config.php' : define('Name', 'OpenTube');
			$title = '404';
			require './head.php';
			echo '<link rel="stylesheet" href="' . CSSPath . 'forms.css">';
		?>
	</head>
	<body theme="dark">
		<form action="<?= BasePath ?>">
			<img src="<?= ImagesPath . 'OT404.png' ?>" alt="OpenTube 404">
			<h1>Page not found</h1>
			<h2>The page <u><i><?= $_SERVER['REQUEST_URI'] ?></i></u> <b>doesn't exist</b></h2>
			<input type="submit" value="Back to home">
		</form>
	</body>
<html>
