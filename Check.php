<?php
session_start();
require("dbconnect.php");
$id=(int)$_POST['id'];//接id
$sql = "select * from form where id = $id;";//收集id為XXX的全部資料
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");//連至資料庫
$rs=mysqli_fetch_assoc($result);//拆開

if ($id == $rs['id']){
    header("Location: statusView.php?id={$rs['id']}");//有在資料庫
    exit();
}else{
    header("Location: studentView.php?id=$id");//沒在資料庫
    exit();
}
?>