<!DOCTYPE html>
<html lang="en">
	<head lang="en">
		<?php
			include 'partials/head.php';
			if ($existsConfig) {
				$msg = 'The configuration file (' . BasePath . 'assets/config.php) already exists';
			} else {
				$webServerComp = true;
				$phpComp = version_compare(PHP_VERSION, phpMinVer, '>=');
				$pdoComp = extension_loaded('PDO');
				$pdo_mysqlComp = extension_loaded('pdo_mysql');
			}
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
						<input id="webServer" name="webServer" type="checkbox" <?= $webServerComp ? 'checked' : 'disabled' ?> required readonly>
						<label for="webServer">Apache web server: <?php isAvalible($webServerComp, isset($_SERVER['SERVER_SOFTWARE']) ? $_SERVER['SERVER_SOFTWARE'] : 'Nginx?'); ?></label>
					</li>
					<li>
						<input id="php" name="php" type="checkbox" <?= $phpComp ? 'checked' : 'disabled'; ?> required readonly>
						<label for="php">PHP <?= phpMinVer ?> or superior: <?php isAvalible($phpComp, PHP_VERSION); ?></label>
						<ul>
							<li>
								<input id="pdo" name="pdo" type="checkbox" <?= $pdoComp ? 'checked' : 'disabled' ?> required readonly>
								<label for="pdo">PHP Data Objects (PDO)</label>
							</li>
							<li>
								<input id="pdo_mysql" name="pdo_mysql" type="checkbox" <?= $pdo_mysqlComp ? 'checked' : 'disabled'; ?> required readonly>
								<label for="pdo_mysql">PDO MySQL driver (pdo_mysql)</label>
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
