<?php
// Model 就是 SQL 指令(跟資料庫有關的變動)
require_once("dbconnect.php");

// 學生申請
function add($name, $id, $dad, $mom, $species) {
    global $conn;
    $sql = "INSERT INTO form (name, id, dad, mom, species, status) VALUES ('$name', $id, '$dad', '$mom', '$species', '導師尚未簽注');";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
}

// 學生檢視狀態
function student_show($id) {
    global $conn;
    $sql = "SELECT * FROM form WHERE id=$id;";
    $result = mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
    return $result;
}

// 導師簽注
function t_add($t_content, $t_sign, $id) {
    global $conn;
    $sql = "UPDATE form SET t_content='$t_content', t_sign='$t_sign', status='秘書尚未簽注' WHERE id=$id;";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
}

// 導師登入瀏覽頁面
function t_show($id) {
    global $conn;
    $sql = "SELECT * FROM form WHERE id=$id and (status='導師尚未簽注' or status='秘書尚未簽注');";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
}
function s_add($s_result, $s_content, $s_sign, $id) {
    global $conn;
    $sql = "UPDATE form SET s_result='$s_result', s_content='$s_content', s_sign='$s_sign',status='校長尚未簽注' WHERE id=$id;";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
}

// 秘書簽注
function s_add($s_result, $s_content, $s_sign, $id) {
    global $conn;
    $sql = "UPDATE form SET s_content='$s_content', s_result=$s_result, s_sign='$s_sign', status='校長尚未核決' WHERE id=$id;";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
}

// 秘書未符合補助條件
function s_deny($id) {
    global $conn;
    $sql = "UPDATE form SET status='未符合補助條件' WHERE id=$id;";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
}

// 校長核決
function close($status, $p_sign, $id) {
    global $conn;
    $sql = "UPDATE form SET p_sign='$p_sign', status='$status' WHERE id=$id;";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
}

// 校長登入瀏覽頁面
function p_show($p_sign, $id) {
    global $conn;
    $sql = "UPDATE form SET p_sign=$p_sign status='否決' WHERE id=$id and status='校長尚未核決');";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
}

// 檢視所有清單
function show() {
    global $conn;
    $sql = "SELECT * FROM form WHERE 1;";
    $result = mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
    return $result;
}
?>