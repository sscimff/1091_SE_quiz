<?php
session_start();
require("studentModel.php");
require("Model.php");
$result=show();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<h1>貧困學生補助經費申請表狀態查詢</h1>
<table width="1000" border="1">
  <tr>
    <td>學生姓名</td>
    <td>學號</td>
    <td>父親姓名</td>
    <td>母親姓名</td>
    <td>申請種類</td>
    <td>導師訪視說明</td>
    <td>導師簽章</td>
    <td>秘書審核結果</td>
    <td>秘書審查意見</td>
    <td>秘書簽章</td>
    <td>校長簽核</td>
    <td>申請狀態</td>
  </tr>
<?php

while ($rs=mysqli_fetch_assoc($result)) {
    echo "<td>{$rs['name']}</td>";
    echo "<td>{$rs['id']}</td>";
    echo "<td>{$rs['dad']}</td>";
    echo "<td>{$rs['mom']}</td>";
    echo "<td>{$rs['species']}</td>";
    echo "<td>{$rs['t_content']}</td>";
    echo "<td>{$rs['t_sign']}</td>";
    echo "<td>{$rs['s_result']}</td>";
    echo "<td>{$rs['s_content']}</td>";
    echo "<td>{$rs['s_sign']}</td>";
    echo "<td>{$rs['p_sign']}</td>";
    echo "<td>{$rs['status']}</td></tr>";
}
?>
</table>
</body>
</html>
</html>
