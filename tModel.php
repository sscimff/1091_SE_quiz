<?php
// Model 就是 SQL 指令(跟資料庫有關的變動)
require_once("dbconnect.php");

// 導師簽注
function add($t_content, $t_sign, $id) {
    global $conn;
    $sql = "UPDATE form SET t_content=$t_content, t_sign=$t_sign, status=1 WHERE id=$id and (status=0 or status=1);";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
}
?>