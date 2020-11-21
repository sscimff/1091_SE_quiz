<?php
session_start();
require("userModel.php");

$userName = $_POST['id'];

if (checkUserIDPwd($id)) {
	//provide a link to the message list UI
	echo "<a href='studentView.php'>go</a>";
} else {
	//print error message
	echo "Invalid ID - Please try again <br />";
}
?>
