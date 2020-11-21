<?php
// Model 就是 SQL 指令(跟資料庫有關的變動)
require_once("dbconnect.php");

// 學生申請
function add($name, $id, $dad, $mom, $species) {
    global $conn;
    $sql = "INSERT INTO form (name, id, dad, mom, species) VALUES ('$name', $id, '$dad', '$mom', '$species');";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
}

// 檢視狀態
function show() {
    global $conn;
    $sql = "SELECT * FROM form WHERE 1;";
    $result = mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
    return $result;
}

// function getJobList($bossMode) {
//     global $conn;
//     if ($bossMode) {
//         $sql = "select *, TIME_TO_SEC(TIMEDIFF(NOW(), addTime)) diff from todo order by status, urgent desc;";
//     } else {
//         $sql = "select *, TIME_TO_SEC(TIMEDIFF(NOW(), addTime)) diff from todo where status = 0;";
//     }
//     $result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
//     return $result;
// }
?>