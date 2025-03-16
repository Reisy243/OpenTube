<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			require './config.php';
			if(isset($_GET['search_query'])) { $sq = trim($_GET['search_query']); }
			$title = $sq;
			include './head.php';

			try {
				$CONN = new PDO("mysql:host=$DBHost;dbname=$DBName;charset=utf8", $DBUser, $DBPass);
				$CONN->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$query = $CONN->prepare("SELECT * FROM videos WHERE title LIKE '%$sq%'");
				$query->execute();

				$res = $query->fetchAll(PDO::FETCH_ASSOC);
			} catch(PDOException $err) {
				echo 'Server error: ' . $err->getMessage();
			}
		?>
	</head>
	<body theme="dark">
		<?php
			include './header.php';
			if(empty($res)) {
				header("HTTP/1.1 404 '$sq' Not Found");
				echo '<div><h1>No results found</h1><br><p>Try different keywords</p></div>';
			} else {
				foreach($res as $row) {
					echo '
						<a class="txt" href="' . $BasePath . '/watch?v=' . $row['id'] . '">
							<div class="cards">
								<div class="tumbnail">
									<img src="/upload/' . $row['authorId'] . '/' . $row['id'] . '/tumbnail.png">
								</div>
								<div class="cards-txt">
									<p>' . $row['title'] . '</p>
									<p>' . $row['authorId'] . '</p>
								</div>
							</div>
						</a>
';
				}
			}
		?>
	</body>
</html>
