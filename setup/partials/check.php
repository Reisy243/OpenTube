<?php if (!$canRun): ?>
	<form action="<?= BasePath . 'setup'?>" method="POST">
		<h3>For use <?= Name ?>, you need install/configure/activate:</h3>
		<ul style="list-style-type: circle;">
			<?php
				$sendError = fn($dep, $err) => !$dep && print '<li>' . $err . '</li>';
				$sendError(isset($_POST['mysql']), 'A MySQL or compatible database server');
				$sendError($webServer, 'Apache web server');
				$sendError($php, 'PHP ' . phpMinVer . ' or superior');
				$sendError($pdo, 'PHP Data Objects (PDO)');
				$sendError($pdo_mysql, 'PHP Data Objects MySQL driver (pdo_mysql)');
				$sendError($curl, 'PHP cURL extenxion');
			?>
		</ul>
		<input type="submit" value="Back">
	</form>
<?php endif; ?>
