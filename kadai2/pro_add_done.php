<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>画像管理</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
		<h1>画像の登録完了</h1>
	</header>

	<main>
		<?php
		try {
			$title       = htmlspecialchars($_POST["title"], ENT_QUOTES, "UTF-8");
			$description = htmlspecialchars($_POST["description"], ENT_QUOTES, "UTF-8");
			$file        = $_POST["file"];

			$dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
			$user = 'root';
			$password = '';

			$dbh = new PDO($dsn, $user, $password);
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = 'insert into image(title, description, file) values (?,?,?)';
			$stmt = $dbh->prepare($sql);
			$data[] = $title;
			$data[] = $description;
			$data[] = $file;
			$stmt->execute($data);

			print $file;
			print 'を追加しました。<br />';
		} catch (Exception $e) {
			print 'ただいま障害により大変ご迷惑をお掛けしております。';
			print $e->getMessage();
			exit();
		}

		?>

		<a class="buttonx" href="pro_list.php">戻る</a>
	</main>
</body>

</html>