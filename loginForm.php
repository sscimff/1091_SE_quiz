<?php
session_start();
//set the login mark to empty
$_SESSION['id'] = "";
?>
<h1>Login Form</h1><hr />
<form method="post" action="studentView.php">
ID: <input name="id" type="int" id="id" required="required"><br />
<input type="submit">
</form>