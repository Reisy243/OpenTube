<?php
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
