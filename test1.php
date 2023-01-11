<?php
$item1 = ["aaa", "bbb", "ccc", "ddd", "eee"];
$item2 = ["123", "234", "345", "456", "567"];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>テスト</title>
    <style>
        table, td, th {
            border: solid 1px #000000;;
        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table>
        <?php
        for ($i = 0; $i < count($item1); $i++) {
            print "<tr>";
            print "<td>" . $item1[$i] . "</td>";
            print "<td>" . $item2[$i] . "</td>";
            print "</tr>";
        }
        ?>
    </table>
</body>

</html>