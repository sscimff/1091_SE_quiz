<?php
// view, model 之間溝通
require("tModel.php");
$id=$_POST['id'];
$t_content=mysqli_escape_string($conn, $_POST['t_content']);
$t_sign=mysqli_escape_string($conn, $_POST['t_sign']);
t_add($t_content, $t_sign, $id);
// echo "Message:".$_POST['id'] ."completed.";
echo "Message: Completed.";
?>


