<?php
session_start();
require("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Principal</title>
</head>
<body>
<h1>校長簽核</h1>
<form method="post" action="pController.php">
      申請者學號： <input name="id" type="int" id="id" /><br>
      校長簽核：<select name="status" type="text" id="status" /><br>
                <option value='決行(結案)'>決行</option>
                <option value='否決'>否決</option>
                </select>
      <input name="p_sign" type="text" id="p_sign" /> <br>
      <input type="submit" name="Submit" value="送出" />
      <br>
</form>
</tr>
</table>
</body>
</html>
