<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			require './config.php';
			$videoId = $_GET['v'];
			try {
				$CONN = new PDO("mysql:host=$DBHost;dbname=$DBName;charset=utf8", $DBUser, $DBPass);
				$CONN->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$query = $CONN->prepare("SELECT * FROM videos WHERE id = '$videoId'");
				$query->execute();

				$res = $query->fetch(PDO::FETCH_ASSOC);
				$title = $res['title'];
			} catch(PDOException $err) {
				echo 'Server error:' . $err->getMessage();
			}
			include './head.php';
			echo '<link rel="stylesheet" href="' . $BasePath . '/CSS/player.css">';
		?>
	</head>
	<body theme="dark">
		<?php
			include './header.php';
			echo '<video src="/upload/' . $res['authorId'] . "/$videoId" . '/video.mp4" autoplay controls></video>';
		?>
		<div>
			<h3><?php echo $res['title']; ?></h3>
		</div>
	</body>
</html>
