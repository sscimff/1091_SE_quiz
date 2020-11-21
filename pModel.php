<?php
// Model 就是 SQL 指令(跟資料庫有關的變動)
require_once("dbconnect.php");

// 校長簽核
function close($p_sign, $id) {
    global $conn;
    $sql = "UPDATE form SET p_sign=$p_sign status='結案' WHERE id=$id and status=2);";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
}
?>