<?php
session_start();
require("todoStudent.php");

$id = (int)$_GET['id'];
$rs = getJobDetail($id);
if (! $rs) {
	echo "no data found";
	exit(0);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Principal</title>
</head>
<body>
<h1>Principal Task</h1>
<form method="post" action="todoStudent.php">
      校長簽核:<select>
                <option>決行</option>
                <option>否決</option>
                </select>
      <input name="msg" type="text" id="msg" /> <br>
	  
      <input type="submit" name="Submit" value="送出" />
      <br>
</form>
</tr>
</table>
</body>
</html>
