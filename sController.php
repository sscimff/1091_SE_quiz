<?php
// view, model 之間溝通
require("sModel.php");
$id=$_POST['id'];
$s_result=mysqli_escape_string($conn, $_POST['s_result']);
$s_sign=mysqli_escape_string($conn, $_POST['s_sign']);
s_add($s_result, $s_sign, $id);
echo "Message: Completed.";
?>


