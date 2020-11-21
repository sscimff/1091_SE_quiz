<?php
// Model 就是 SQL 指令(跟資料庫有關的變動)
require_once("dbconnect.php");

// 學生申請
function add($name, $id, $dad, $mom, $species) {
    global $conn;
    $sql = "INSERT INTO form (name, id, dad, mom, species, status) VALUES ('$name', $id, '$dad', '$mom', '$species', '導師尚未簽注');";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
}

// 檢視狀態
// function show() {
//     global $conn;
//     $sql = "SELECT * FROM form WHERE 1;";
//     $result = mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
//     return $result;
// }
?>