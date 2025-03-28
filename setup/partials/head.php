<?php
define('Name', 'OpenTube');
$title = isset($step) ? $step . ' setup' : 'Setup';
include '../assets/head.php';
echo '<link rel="stylesheet" href="' . BasePath . 'assets/CSS/forms.css">';
$existsConfig = file_exists($_SERVER['DOCUMENT_ROOT'] . '/assets/config.php');
if ($existsConfig) {
	$_SERVER['REQUEST_URI'] != BasePath . 'setup/' && header('Location: ' . BasePath);
} else {
	$webServer = isset($_SERVER['SERVER_SOFTWARE']) ? (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false) : false;
	$php = version_compare(PHP_VERSION, phpMinVer, '>=');
	$pdo = extension_loaded('PDO');
	$pdo_mysql = extension_loaded('pdo_mysql');
	$curl = extension_loaded('curl');

	$canRun = (isset($_POST['mysql']) && $webServer && $php && $pdo && $pdo_mysql && $curl);
	if ($_SERVER['REQUEST_URI'] != BasePath . 'setup/') {
		include 'check.php';
		$canRun && $curl = curl_init();
	}
}
?>
