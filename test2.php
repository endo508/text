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
        .line {
            display: flex;
        }
        .left, .right {
            border: solid 1px #000000;
        }
        .left {
            width: 100px;
        }
        .right {
            width: 200px;
        }

    </style>
</head>

<body>
    <table>
        <?php
        for ($i = 0; $i < count($item1); $i++) {
            print '<div class="line">';
            print '<div class="left">' .$item1[$i] .'</div>';
            print '<div class="right">' .$item1[$i] .'</div>';
            print '</div>';
        }
        ?>
    </table>
</body>

</html>