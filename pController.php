<?php
// view, model 之間溝通
require("pModel.php");
$id=$_POST['id'];
$p_sign=mysqli_escape_string($conn, $_POST['p_sign']);
close($p_sign, $id);
echo "Message: Completed.";
?>


