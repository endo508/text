<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ろくまる農園ver2</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>スタッフ追加</h1>

    <main>
        <form method="post" action="staff_add_check.php">
            <p>スタッフの情報を入力します</p>
            <table>
                <tr>
                    <td>スタッフ名</td>
                    <td class="haba2"><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>パスワード</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td>パスワード（確認）</td>
                    <td><input type="password" name="pass2"></td>
                </tr>
            </table>
            <div class="buttons">
                <button type="button" onclick="history.back()">戻る</button>
                <button class="button2" type="submit">ＯＫ</button>
            </div>
        </form>
    </main>
</body>

</html>