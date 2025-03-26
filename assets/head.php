<?php
set_include_path(get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] . '/assets');
file_exists($_SERVER['DOCUMENT_ROOT'] . '/assets/config.php') && require 'config.php';

define('BasePath', str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(__DIR__)) . '/');

$siteName = empty($title) ? Name : $title . " - " . Name;

echo '
<meta charset="UTF-8">
<meta name="application-name" content="OpenTube">
<meta name="author" content="Isaac David Orozco Delgado">
<title>' . $siteName . '</title>
<link rel="icon" type="image/x-icon" href="' . BasePath . 'assets/Images/OTLogo.png">
<link rel="stylesheet" href="' . BasePath . 'assets/CSS/theme.css">
';
?>
