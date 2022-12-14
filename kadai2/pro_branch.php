<?php

if(isset($_POST["disp"])) {
	if(!isset($_POST["id"])) {
		header("Location:pro_ng.php");
		exit();
	}
	$id = $_POST["id"];
	header("Location:pro_disp.php?id={$id}");
	exit();
}

if(isset($_POST["add"])) {
	header("Location:pro_add.php");
	exit();
}

if(isset($_POST["delete"])) {
	if(!isset($_POST["id"])) {
		header("Location:pro_ng.php");
		exit();
	}
	$id=$_POST["id"];
	header("Location:pro_delete.php?id={$id}");
	exit();
}

header("Location: pro_list.php");
?>