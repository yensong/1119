<?php
session_start(); // 儲存伺服器的檔案，session_start():告訴系統準備開始使用
require("userModel.php");

$userName = $_POST['id'];
$passWord = $_POST['pwd'];

if (checkUserIDPwd($userName, $passWord)) {
	$_SESSION['uID'] = $userName;
	header("Location: todoListView.php");
} else {
	$_SESSION['uID']="";
	header("Location: loginForm.php");
}
?>