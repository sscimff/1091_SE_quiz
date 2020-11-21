<?php
// view, model 之間溝通
require("studentModel.php");
$id=$_POST['id'];
$name=mysqli_escape_string($conn, $_POST['name']);
$dad=mysqli_escape_string($conn, $_POST['dad']);
$mom=mysqli_escape_string($conn, $_POST['mom']);
$species=mysqli_escape_string($conn, $_POST['species']);
add($name, $id, $dad, $mom, $species);
// echo "Message:".$_POST['id'] ."completed.";
echo "Message: Completed.";
show($id)
?>


