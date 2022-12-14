<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>画像管理</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
	try {

		$id = $_GET["id"];

		$dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
		$user = 'root';
		$password = '';
		$dbh = new PDO($dsn, $user, $password);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "select title, description, file from image WHERE id=?";
		$stmt = $dbh->prepare($sql);
		$data[] = $id;
		$stmt->execute($data);

		$rec = $stmt->fetch(PDO::FETCH_ASSOC);
		$title       = $rec["title"];
		$description = $rec["description"];
		$file        = $rec["file"];
	} catch (Exception $e) {
		print 'ただいま障害により大変ご迷惑をお掛けしております。';
		print $e->getMessage();
		exit();
	}

	?>

	<header>
		<h1>画像の表示</h1>
	</header>
	<main>
		<p>【タイトル】<?=$title ?></p>
		<p>
			【説明】<br>
			<span class="margin1"><?=$description ?></span>
		</p>
		<div>
			<img class="width2 margin1" src="images/<?=$file ?>">
		</div>
		<div class="buttons">
			<button type="button" onclick="history.back()">戻る</button>
		</div>
	</main>

</body>

</html>