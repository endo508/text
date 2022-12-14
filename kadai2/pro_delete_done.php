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
		$id   = $_POST["id"];
		$file = $_POST["file"];

		$dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
		$user = 'root';
		$password = '';
		$dbh = new PDO($dsn, $user, $password);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = 'delete from image where id=?';
		$stmt = $dbh->prepare($sql);
		$data[] = $id;
		$stmt->execute($data);
		unlink("images/{$file}");
	} catch (Exception $e) {
		print 'ただいま障害により大変ご迷惑をお掛けしております。';
		print $e->getMessage();
		exit();
	}

	?>
	<header>
		<h1>画像の削除完了</h1>
	</header>
	<main>
		<p><?=$file ?> を削除しました</p>
		<a class="buttonx" href="pro_list.php"> 戻る</a>
	</main>

</body>

</html>