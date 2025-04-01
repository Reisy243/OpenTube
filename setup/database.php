<!DOCTYPE html>
<html lang="en">
	<head lang="en">
		<?php
			$step = 'Database server';
			$run = true;
			include 'partials/head.php';
			if (isset($_POST['finish'])) {
				if (!emptyKeys($_POST, ['dbHost', 'dbName', 'dbUser', 'dbPass'])) {
					setcookie('dbHost', $_POST['dbHost'], time()+3600, "/");
					setcookie('dbName', $_POST['dbName'], time()+3600, "/");
					setcookie('dbUser', $_POST['dbUser'], time()+3600, "/");
					setcookie('dbPass', $_POST['dbPass'], time()+3600, "/");
					setcookie('finish', true, time()+3600, "/");

					header('Location: ' . BasePath . 'setup');
					$run = false;
				} else {
					echo '<h1><b><u><i>Please complete this form</i></u></b></h1>';
				}
			}
		?>
	</head>
	<body theme="dark">
		<?php if ($canRun && $run): ?>
			<form method="POST">
				<?php include 'partials/forms.php'; ?>
				<input id="dbHost" name="dbHost" type="text" value="localhost" placeholder="Database server host" required>
				<input id="dbName" name="dbName" type="text" value="<?= Name ?>" placeholder="Database name" required>
				<input id="dbUser" name="dbUser" type="text" placeholder="Database user" required>
				<input id="dbPass" name="dbPass" type="password" placeholder="Database user password" required>
				<input id="send" name="finish" type="submit" value="Finish" disabled>
			</form>
		<?php endif; ?>
		<script src="<?= BasePath ?>assets/JavaScript/forms.js"></script>
	</body>
<html>
