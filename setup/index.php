<!DOCTYPE html>
<html lang="en">
	<head lang="en">
		<?php
			include 'partials/head.php';
			$msg = $existsConfig ? 'The configuration file (' . BasePath . 'assets/config.php) already exists' : '';
		?>
	</head>
	<body theme="dark">
		<?php if (empty($msg)): ?>
			<form action="general.php" method="POST">
				<?php include 'partials/forms.php'; ?>
				<p><b>NOTE:</b> Requeriments on <i><u><b>this</b></u></i> server will be auto checked</p>
				<h2>Pre-requirements:</h2>
				<ul>
					<li>
						<input id="mysql" name="mysql" type="checkbox" required>
						<label for="mysql">MySQL or compatible database server</label>
					</li>
					<li>
						<input id="webServer" name="webServer" type="checkbox" <?= $webServer ? 'checked' : 'disabled' ?> required readonly>
						<label for="webServer">Apache web server: <?php $isAvalible($webServer, $_SERVER['SERVER_SOFTWARE'] ?? 'Nginx?'); ?></label>
					</li>
					<li>
						<input id="php" name="php" type="checkbox" <?= $php ? 'checked' : 'disabled'; ?> required readonly>
						<label for="php">PHP <?= phpMinVer ?> or superior: <?php $isAvalible($php, PHP_VERSION); ?></label>
						<ul>
							<li>
								<input id="pdo" name="pdo" type="checkbox" <?= $pdo ? 'checked' : 'disabled' ?> required readonly>
								<label for="pdo">PHP Data Objects (PDO)</label>
							</li>
							<li>
								<input id="pdo_mysql" name="pdo_mysql" type="checkbox" <?= $pdo_mysql ? 'checked' : 'disabled'; ?> required readonly>
								<label for="pdo_mysql">PDO MySQL driver (pdo_mysql)</label>
							</li>
							<li>
								<input id="curl" name="curl" type="checkbox" <?= $curl ? 'checked' : 'disabled' ?> required readonly>
								<label for="curl">PHP cURL extenxion (curl)</label>
							</li>
						</ul>
					</li>
				</ul>
				<input id="send" type="submit" value="Start" disabled>
			</form>
			<script>
				document.querySelectorAll('input[type="checkbox"][readonly]').forEach(chk => chk.addEventListener('click', ro => ro.preventDefault()));
				document.querySelectorAll('input[type="checkbox"]').forEach(box => box.addEventListener('change', () => send.disabled = ![...document.querySelectorAll('input[type="checkbox"][required]')].every(chk => chk.checked)));
			</script>
		<?php else: ?>
			<p><?= $msg ?></p>
		<?php endif; ?>
	</body>
<html>
