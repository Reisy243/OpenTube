<?php
$search = isset($_GET['search_query']) ? htmlspecialchars($_GET['search_query']) : '';
echo '
<header class="flex">
	<h1><a class="txt" href="' .  $Root . '">' . $Name . '</a></h1>
	<form class="flex" action="' . $BasePath . '/results" method="GET">
		<input class="searchBar" type="text" name="search_query" placeholder="Search" value="' . $search . '" autocomplete="off" required>
		<input class="searchBar" type="submit" value="->">
	</form>
</header>
';
?>
