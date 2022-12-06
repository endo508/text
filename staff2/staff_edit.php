<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ろくまる農園ver2</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    try {
        $staff_code = $_POST["staffcode"];

        $dsn = "mysql:dbname=shop;host=localhost;charset=utf8";
        $user = "root";
        $password = "";
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select name from mst_staff where code=?";
        $stmt = $dbh->prepare($sql);
        $data[] = $staff_code;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $staff_name = $rec["name"];

        $dbh = null;

    } catch (Exception $e) {
        print "ただいま障害により大変ご迷惑をおかけしております。";
        print "<br>" . $e->getMessage();
        exit();
    }
    ?>

    <h1>スタッフ修正</h1>
    <main id="edit">
    <p class="head1">スタッフコード<span class="waku2"><?=$staff_code ?></span></p>
    <form method="post" action="staff_edit_check.php">
        <input type="hidden" name="code" value="<?php print $staff_code; ?>">
        <table>
            <tr>
                <td class="haba1">スタッフ名</td>
                <td class="haba2"><input type="text" name="name" value="<?= $staff_name ?>"></td>
            </tr>
            <tr>
                <td>パスワードを入力してください</td>
                <td><input type="password" name="pass"></td>
            </tr>        
            <tr>
                <td>パスワードをもう一度入力してください</td>
                <td><input type="password" name="pass2"></td>
            </tr>
        </table>
        <button class="button1" type="button" onclick="history.back()">戻る</button>
        <button class="button2" type="submit">ＯＫ</button>
    </form>
</main>
</body>

</html>