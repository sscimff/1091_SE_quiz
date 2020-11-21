<?php
session_start();
require("dbconnect.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Secretary</title>
</head>
<body>
<h1>Secretary Task</h1>
<form method="post" action="studentController.php">

      秘書審核結果:准予補助 <input name="s_result" type="text" id="s_result" /> 元(若輸入0元則不予以補助)<br>
      <!--秘書審查意見: <input name="msg" type="text" id="msg" /> <br>-->
      秘書簽章: <input name="s_sign" type="text" id="s_sign" /> <br>
	  
      <input type="submit" name="Submit" value="送出" />
      <br>
</form>
</tr>
</table>
</body>
</html>
