<?php
session_start();
require("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Teacher</title>
</head>
<body>
<h1>導師簽注</h1>
<form method="post" action="tController.php">

      申請者學號： <input name="id" type="int" id="id" /><br>
      導師訪視說明： <input name="t_content" type="text" id="t_content" /> <br>
      導師簽章： <input name="t_sign" type="text" id="t_sign" /> <br>

      <input type="submit" name="Submit" value="送出" />
      <br>
</form>
</tr>
</table>
</body>
</html>