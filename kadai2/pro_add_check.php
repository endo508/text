<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>ろくまる農園</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
	$title       = $_POST["title"];
	$description = $_POST["description"];
	$file        = $_FILES["image"];
	print_r($file);

	$title       = htmlspecialchars($title, ENT_QUOTES, "UTF-8");
	$description = htmlspecialchars($description, ENT_QUOTES, "UTF-8");
	move_uploaded_file($file["tmp_name"], "images/" .$file["name"] );
	$error = false;
	?>
	<header>
		<h1>画像の登録確認</h1>
	</header>

	<main>
		<table>
			<tr>
				<td>タイトル</td>
				<td>
				<?php
				if ($title == "") {
					echo "<span class=\"colred\">タイトルが未入力です</span>";
					$error = true;
				} else {
					echo $title;
				} 
				?>
				</td>
			</tr>
			<tr>
				<td>説明</td>
				<td>
				<?php
				if ($description == "") {
					echo "<span class=\"colred\">説明が未入力です</span>";
					$error = true;
				} else {
					echo $description;
				} 
				?>
				</td>
			</tr>
			<tr>
				<td>画像</td>
				<td>
				<?php
				if ($file["name"] == "") {
					echo "<span class=\"colred\">画像が指定されていません</pan>";
				} else {
					echo "<img src=\"images/" .$file["name"] ."\" class=\"width2\">";
				}
				?>
				</td>
			</tr>
		</table>

		<?php
		if ($error) {
		?>
			<div class="buttons">
				<button type="button" onclick="history.back()">戻る</button>
			</div>
		<?php
		} else {
		?>
		<p>この画像を登録しますか</p>
		<form method="post" action="pro_add_done.php">
			<input type="hidden" name="title" value="<?=$title ?>">
			<input type="hidden" name="description" value="<?=$description ?>">
			<input type="hidden" name="file" value="<?=$file["name"] ?>">
			<div class="buttons">
				<button type="button" onclick="history.back()">戻る</button>
				<button type="submit" class="button1">ＯＫ</button>
			</div>
		</form>
		<?php
		}

		?>
	</main>
</body>

</html>