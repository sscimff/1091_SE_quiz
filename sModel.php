<?php
// Model 就是 SQL 指令(跟資料庫有關的變動)
require_once("dbconnect.php");

// 秘書簽注
function add($s_result, $s_sign, $id) {
    global $conn;
    $sql = "UPDATE form SET s_result=$s_result, s_sign=$s_sign WHERE id=$id and status=1;";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
}
?>