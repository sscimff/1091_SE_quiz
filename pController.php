<?php
// view, model 之間溝通
require("Model.php");
$id=$_POST['id'];
$p_sign=mysqli_escape_string($conn, $_POST['p_sign']);
$status=mysqli_escape_string($conn, $_POST['status']);
close($status, $p_sign, $id);
echo "Message: Completed.";
?>


