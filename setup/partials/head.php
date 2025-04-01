<?php
//echo '<p>' . $_SERVER['REQUEST_URI'] . '</p>';
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

	$canRun = ((isset($_POST['mysql']) ? true : isset($_COOKIE['mysql'])) && $webServer && $php && $pdo && $pdo_mysql);
	if ($_SERVER['REQUEST_URI'] != BasePath . 'setup/') {
		isset($_POST['mysql']) && setcookie('mysql', true, time()+3600, "/");
		include 'check.php';
	}
}
?>
