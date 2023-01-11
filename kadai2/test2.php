<!DOCTYPE html>
<html lang="ja">

<head>
    <title>test</title>
    <meta charset="utf-8">
</head>

<body>
    <?php
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    if (isset($_GET["message"])) {
        $mess = explode("<>", $_GET["message"]);
        foreach($mess as $m) {
            print "$m<br>";
        }
    } else {
        print "no message<br>";
    }
    ?>

    <a href="test1.php">戻る</a>
</body>

</html>