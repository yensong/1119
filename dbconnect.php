<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = '1091se'; // 連接1091se這個資料庫
$conn = mysqli_connect($host, $user, $pass, $db) or die('Error with MySQL connection'); //跟MyMSQL連線並登入
mysqli_query($conn,"SET NAMES utf8"); //選擇編碼
?>