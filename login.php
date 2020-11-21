<?php
session_start();
require("studentModel.php");
require("tModel.php");
require("secretaryModel.php");
require("pModel.php");
require("Model.php");
$result=show();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<h1>登入</h1>
<table width="1000" height="200" border="1">
  <tr>
    <td><a href="loginForm.php"><font size="10">Student</font></a></td>
    <td><a href="tView.php"><font size="10">Teacher</font></a></td>
    <td><a href="secretaryView.php"><font size="10">Secretary</font></a></td>
    <td><a href="pView.php"><font size="10">Principal</font></a></td>
  </tr>
<?php
/*
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
*/
?>
</table>
</body>
</html>
</html>
