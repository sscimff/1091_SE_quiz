<?php
session_start();
require("studentModel.php");
$result=show();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<h1>貧困學生補助經費申請表狀態查詢</h1>
<table width="800" border="1">
<tr><td width="100">學生姓名</td><td width="300"></td><td width="100">學號</td><td width="300"></td></tr>
<tr><td width="100">父親姓名</td><td colspan ="3"></td></tr>
<tr><td width="100">母親姓名</td><td colspan ="3"></td></tr>
<tr><td width="100">申請種類</td><td colspan ="3"></td></tr>
    <!--<td>申請狀態</td>-->
<tr><td width="100">導師訪視說明</td><td colspan ="1"></td><td colspan ="1">導師簽章</td><td colspan ="1"></td></tr>
<tr><td width="100">秘書審核結果</td><td colspan ="3"></td></tr>
<tr><td width="100">秘書簽章</td><td colspan ="1"></td><td colspan ="1">校長簽核</td><td colspan ="1"></td></tr>
<?php

while ($rs=mysqli_fetch_assoc($result)) {
    echo "<tr><td></td><td>{$rs['name']}</td><td></td><td>{$rs['id']}</td></tr>";
    echo "<tr><td></td><td>{$rs['dad']}</td></tr>";
    echo "<tr><td></td><td>{$rs['mom']}</td></tr>";
    echo "<tr><td></td><td>{$rs['species']}</td></tr>";
    //echo "<td>{$rs['status']}</td>";
    echo "<tr><td></td><td>{$rs['t_content']}</td><td></td><td>{$rs['t_sign']}</td></tr>";
    echo "<tr><td></td><td>{$rs['s_result']}</td></tr>";
    echo "<tr><td></td><td>{$rs['s_sign']}</td><td>{$rs['p_sign']}</td></tr>";
}
?>
</table>
</body>
</html>
</html>
