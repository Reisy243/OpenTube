<?php
$siteName = !empty($title) ? $title . " - " . $Name : $Name;
$BasePath = strcmp($Root,"/") ? $Root : "";
echo '
<meta charset="UTF-8">
<title>' . $siteName . '</title>
<link rel="stylesheet" href="' . $BasePath . '/CSS/theme.css">
<link rel="stylesheet" href="' . $BasePath . '/CSS/general.css">
';
?>
