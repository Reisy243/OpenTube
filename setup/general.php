<!DOCTYPE html>
<html lang="en">
	<head lang="en">
		<?php
			$step = 'General';
			include 'partials/head.php';
		?>
	</head>
	<body theme="dark">
		<?php if (empty($msg)): ?>
			<form action="database.php" method="POST">
				<?php include 'partials/forms.php'; ?>
				<input id="name" name="name" type="text" value="OpenTube" placeholder="Site name" required>
				<input id="dName" name="dName" type="text" placeholder="User name" required>
				<div class="password">
					<input id="pass" name="pass" type="password" placeholder="Password" required>
					<input id="confirmPass" name="confirmPass" type="password" placeholder="Confirm password" required>
				</div>
				<input id="send" type="submit" value="Next" disabled>
			</form>
			<script src="<?= BasePath ?>assets/JavaScript/forms.js"></script>
		<?php else: ?>
			<p><?= $msg ?></p>
		<?php endif; ?>
	</body>
<html>
