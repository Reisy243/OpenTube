<?php
define('BasePath', str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(__DIR__)) . '/');
define('CSSPath', BasePath. 'assets/CSS/');
define('ImagesPath', BasePath . 'assets/Images/');

define('phpMinVer', '5.1.0');
define('OTVer', 'A1.0.1');

$siteName = empty($title) ? Name : $title . " - " . Name;

function emptyKeys ($arry, $keys) {
	foreach ($keys as $key) if (empty($arry[$key])) return true;
	return false;
}

echo '
<meta charset="UTF-8">
<meta name="application-name" content="OpenTube">
<meta name="author" content="Isaac David Orozco Delgado">
<title>' . $siteName . '</title>
<link rel="icon" type="image/x-icon" href="' . ImagesPath . 'OTLogo.png">
<link rel="stylesheet" href="' . CSSPath . 'theme.css">
<link rel="stylesheet" href="' . CSSPath . 'general.css">
';
?>
