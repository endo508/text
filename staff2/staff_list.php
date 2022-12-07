<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ろくまる農園ver2</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body id="list">
    <h1>スタッフ一覧</h1>
    <main>
        <form method="post" action="staff_branch.php" class="waku">
            <table class="haba2">
                <tr>
                    <th>登録名</th>
                </tr>
                <?php
                try {
                    $dsn = "mysql:dbname=shop;host=localhost;charset=utf8";
                    $user = "root";
                    $password = "";
                    $dbh = new PDO($dsn, $user, $password);
                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $sql = "select code, name from mst_staff where 1";
                    $stmt = $dbh->prepare($sql);
                    $stmt->execute();

                    $dbh = null;

                    while (true) {
                        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
                        if ($rec == false) {
                            break;
                        }
                        print "<tr>\n";
                        print "  <td>";
                        print '<label><input type="radio" name="staffcode" value="' . $rec["code"] . '">';
                        print $rec["name"];
                        print "</label></td>\n";
                        print "</tr>\n";
                    }
                } catch (Exception $e) {
                    print "ただいま障害により大変ご迷惑をおかけしております。";
                    print "<br>" . $e->getMessage();
                    exit();
                }
                ?>
            </table>
            <div class="buttons">
                <button type="submit" name="button" value="disp">参照</button>
                <button class="button1" type="submit" name="button" value="add">追加</button>
                <button class="button1" type="submit" name="button" value="edit">修正</button>
                <button class="button1" type="submit" name="button" value="delete">削除</button>
            </div>
        </form>
    </main>
</body>

</html>