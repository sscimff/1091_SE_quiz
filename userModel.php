<?php
require("dbconnect.php");

function checkUserIDPwd($id) {
	global $conn;
$userName = mysqli_real_escape_string($conn,$id);
$isValid = false;

$sql = "SELECT password, id FROM user WHERE loginID='$id'";
if ($result = mysqli_query($conn,$sql)) {
	if ($row=mysqli_fetch_assoc($result)) {
		if ($row['password'] == $passWord) {
			//keep the user ID in session as a mark of login
			$_SESSION['id'] = $row['id'];
			//provide a link to the message list UI
			$isValid = true;
		}
	}
}
return $isValid;
}


function setUserPassword($userName){
		return false;
}

?>










