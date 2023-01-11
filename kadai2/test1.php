<?php
    $mess = [];
    $mess[] = "aaaa";
    $mess[] = "bbb";
    $send = implode("<>",$mess);

    header("location:test2.php?message={$send}");
?>