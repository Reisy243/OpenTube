<!DOCTYPE html>
<html lang="en">
	<head lang="en">
		<?php
			$step = 'General';
			include 'partials/head.php';
			curl_setopt($curl, CURLOPT_URL, 'http://localhost/setup/database.php');
			$data = ['mysql' => 'a'];
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$res = curl_exec($curl);
			curl_close($curl);
			//echo $res;
			header('Location: database.php');
		?>
	</head>
	<body theme="dark">
		<?php if ($canRun): ?>
			<form method="POST">
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
		<?php endif; ?>
	</body>
<html>
