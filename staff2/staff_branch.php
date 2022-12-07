<?php

if (!isset($_POST["staffcode"]) || !isset($_POST["button"])) {
    header("Location: staff_list.php");
}

$staffCode = $_POST["staffcode"];
$proc = $_POST["button"];

$programs = [
     "add"  => "staff_add.php",
     "edit" => "staff_edit.php"
];

if (isset($programs[$proc])) {
    header("Location: {$programs[$proc]}?staffcode={$staffCode}");
} else {
    header("Location: staff_list.php");
}

?>
