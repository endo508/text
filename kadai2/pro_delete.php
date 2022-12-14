<!DOCTYPE html>
<html lang="ja"as>

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

		$sql = "select title, file from image where id=?";
		$stmt = $dbh->prepare($sql);
		$data[] = $id;
		$stmt->execute($data);

		$rec = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$title = $rec["title"];
		$file  = $rec["file"];
	} catch (Exception $e) {
		print 'ただいま障害により大変ご迷惑をお掛けしております。';
		print $e->getMessage();
		exit();
	}

	?>

	<header>
		<h1>画像の削除確認</h1>
	</header>

	<main>
		<p>【ID】<?=$id ?></p>
		<p>【タイトル】<?=$title ?></p>
		<p><img src="images/<?=$file ?>" class="width2"></p>
		<p>このファイルを削除しますか？</p>
		<form method="post" action="pro_delete_done.php">
			<input type="hidden" name="id" value="<?=$id ?>">
			<input type="hidden" name="file" value="<?=$file ?>">
			<div class="buttons">
				<button type="button" onclick="history.back()">戻る</button>
				<button class="button1" type="submit">ＯＫ</button>
			</div>
		</form>
	</main>

</body>

</html>