<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>画像ライブラリ</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <h1>画像の登録</h1>
    </header>

    <main>
        <form method="post" action="pro_add_check.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>画像のタイトル</td>
                    <td><input class="width1" type="text" name="title"></td>
                </tr>
                <tr>
                    <td>画像の説明</td>
                    <td><textarea class="width1 height1" name="description"></textarea></td>
                </tr>
                <tr>
                    <td>画像ファイルの選択</td>
                    <td><input type="file" name="image"></td>
                </tr>
            </table>
            <div class="buttons">
                <button type="button" onclick="history.back()">戻る</button>
                <button type="submit" class="button1">ＯＫ</button>
            </div>
        </form>

    </main>

</body>

</html>