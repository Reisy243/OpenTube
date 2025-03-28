<!DOCTYPE html>
<html lang="en">
	<head lang="en">
		<?php
			$step = 'Database server';
			include 'partials/head.php';
		?>
	</head>
	<body theme="dark">
		<?php if ($canRun): ?>
			<form method="POST">
				<?php include 'partials/forms.php'; ?>
				<input id="dbHost" name="dbHost" type="text" value="localhost" placeholder="Database server host" required>
				<input id="dbName" name="dbName" type="text" value="<?= Name ?>" placeholder="Database name" required>
				<input id="dbUser" name="dbUser" type="text" placeholder="Database user" required>
				<input id="dbPass" name="dbPass" type="password" placeholder="Database user password" required>
				<input id="send" type="submit" value="Finish" disabled>
			</form>
			<script src="<?= BasePath ?>assets/JavaScript/forms.js"></script>
		<?php endif; ?>
	</body>
<html>
