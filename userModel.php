<?php
require_once("dbconnect.php"); // require:將檔案引入  require_once:只會引入一次，若之前引入過，就不會再引入

function checkUserIDPwd($userName, $passWord) {
	global $conn; // global:全域變數
$userName = mysqli_real_escape_string($conn,$userName);
$isValid = false;

$sql = "SELECT password FROM user WHERE loginID='$userName'";
if ($result = mysqli_query($conn,$sql)) {
	if ($row=mysqli_fetch_assoc($result)) {
		if ($row['password'] == $passWord) {
			//keep the user ID in session as a mark of login
			//$_SESSION['uID'] = $row['id'];
			//provide a link to the message list UI
			$isValid = true;
		}
	}
}
return $isValid;
}



function getUserPwd() {
	global $conn;
	$sql = "select * from user;";
	$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
	return $result;
}

function setUserPassword($userName){
		return false;
}

?>










