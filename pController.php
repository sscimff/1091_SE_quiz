<?php
// view, model 之間溝通
require("pModel.php");
$id=$_POST['id'];
//$name=mysqli_escape_string($conn, $_POST['name']);
//$dad=mysqli_escape_string($conn, $_POST['dad']);
//$mom=mysqli_escape_string($conn, $_POST['mom']);
//$species=mysqli_escape_string($conn, $_POST['species']);
//$t_content=mysqli_escape_string($conn, $_POST['t_content']);
//$t_sign=mysqli_escape_string($conn, $_POST['t_sign']);
//$s_result=mysqli_escape_string($conn, $_POST['s_result']);
//$s_sign=mysqli_escape_string($conn, $_POST['s_sign']);
$p_sign=mysqli_escape_string($conn, $_POST['p_sign']);
add($p_sign, $id);
// echo "Message:".$_POST['id'] ."completed.";
echo "Message: Completed.";
?>


