<?php
define('BasePath', str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(__DIR__)) . '/');
define('phpMinVer', '5.1.0');
define('OTVer', 'A0.0.1');

$siteName = empty($title) ? Name : $title . " - " . Name;

echo '
<meta charset="UTF-8">
<meta name="application-name" content="OpenTube">
<meta name="author" content="Isaac David Orozco Delgado">
<title>' . $siteName . '</title>
<link rel="icon" type="image/x-icon" href="' . BasePath . 'assets/Images/OTLogo.png">
<link rel="stylesheet" href="' . BasePath . 'assets/CSS/theme.css">
<link rel="stylesheet" href="' . BasePath . 'assets/CSS/general.css">
';
?>
