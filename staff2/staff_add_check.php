<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="utf-8">
    <title>ろくまる農園</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>スタッフ追加</h1>
    <main>
        <table>
            <?php
            $staff_name  = $_POST["name"];
            $staff_pass  = $_POST["pass"];
            $staff_pass2 = $_POST["pass2"];

            $staff_name  = htmlspecialchars($staff_name, ENT_QUOTES, "UTF-8");
            $staff_pass  = htmlspecialchars($staff_pass, ENT_QUOTES, "UTF-8");
            $staff_pass2 = htmlspecialchars($staff_pass2, ENT_QUOTES, "UTF-8");

            $errorFlag = false;
            
            print "<tr>";
            print '<td class="haba1">スタッフ名</td>';
            if ($staff_name == "") {
                print '<td class="colred haba2">スタッフ名が入っていません</td>';
                $errorFlag = true;
            } else {
                print '<td class="haba2">' .$staff_name .'</td>';
            }
            print "</tr>";

            print "<tr>";
            print "<td>パスワード</td>";
            if ($staff_pass == "") {
                print '<td class="colred">パスワードが入力されていません。</td>';
                $errorFlag = true;
            } else {
                print '<td class="fuseru"></td>';
            }
            print "</tr>";

            print "<tr>";
            print "<td>パスワード２</td>";
            if ($staff_pass != $staff_pass2) {
                print '<td class="colred">パスワードが一致しません</td>';
                $errorFlag = true;
            } else {
                print '<td class="fuseru"></td>';
            }
            ?>
        </table>

        <?php
        if ($errorFlag) {
            print '<button class="button1" type="button" onclick="history.back()">戻る</button>';
        } else {
            $staff_pass = md5($staff_pass);
            print '<form method="post" action="staff_add_done.php">';
            print '<input type="hidden" name="name" value="' . $staff_name . '">';
            print '<input type="hidden" name="pass" value="' . $staff_pass . '">';
            print '<div class="buttons">';
            print '<button type="button" onclick="history.back()">戻る</button>';
            print '<button class="button1" type="submit">ＯＫ</button>';
            print '</div>';
            print "</form>";
        }
        ?>
    </main>
</body>

</html>