<?php
define('Name', 'OpenTube');
$title = isset($step) ? $step . ' setup' : 'Setup';
include '../assets/head.php';
echo '<link rel="stylesheet" href="' . BasePath . 'assets/CSS/forms.css">';
$existsConfig = file_exists($_SERVER['DOCUMENT_ROOT'] . '/assets/config.php');
if ($existsConfig) {
	if ($_SERVER['REQUEST_URI'] != BasePath . 'setup/') {
		header('Location: ' . BasePath);
	}
}
function isAvalible($avalible, $text) {
	echo '<span style="color: #' . ($avalible ? '32CD32' : 'FF6347') . ';">';
	echo '<i><u><b>' . $text . '</b></u></i>';
	echo '</span>';
}
?>
