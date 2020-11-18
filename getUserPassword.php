<?php
require("userModel.php");
$result=getUserPwd();
while (	$rs=mysqli_fetch_assoc($result)) { // mysqli_fetch_assoc:讀取陣列的資料，索引值只能是 "字串"
	echo $rs['loginID'], "---", $rs['password'], "<br>"; // $rs:把陣列儲存成新的變數
}
?>