<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>画像ライブラリ</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
		<h1>画像一覧</h1>
	</header>

	<main>
		<form method="post" action="pro_branch.php">
			<table>
				<tr>
					<th></th>
					<th>ID</th>
					<th>タイトル</th>
					<th>サムネイル</th>
				</tr>

				<?php
				try {
					$dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
					$user = 'root';
					$password = '';
					$dbh = new PDO($dsn, $user, $password);
					$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					$sql = "select id, title, file FROM image";
					$stmt = $dbh->prepare($sql);
					$stmt->execute();
					while ($rec = $stmt->fetch(PDO::FETCH_ASSOC)) {
				?>
				<tr>
					<td><input type="radio" name="id" value="<?=$rec["id"] ?>"></td>
					<td><?=$rec["id"] ?></td>
					<td><?=$rec["title"] ?></td>
					<td><img src="images/<?=$rec["file"] ?>" class="samnail"></td>
				</tr>
				<?php
					}
				?>
			</table>
				<?php
				} catch (Exception $e) {
					print "ただいま障害により大変ご迷惑をお掛けしております。\n";
					print $e->getMessage();
					exit();
				}
				?>
			<div class="buttons">
                <button type="submit" name="disp">参照</button>
                <button class="button1" type="submit" name="add">追加</button>
                <button class="button1" type="submit" name="delete">削除</button>
            </div>
		</form>
	</main>
</body>

</html>