<?php
session_start();
require("dbconnect.php");
$id=(int)$_POST['id'];//接id
$sql = "select * from form where id = $id;";//收集id為XXX的全部資料
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");//連至資料庫
$rs=mysqli_fetch_assoc($result);//拆開
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<h1>貧困學生補助經費申請表</h1>
<form method="post" action="studentController.php">
    學生姓名<input name="name" type="text" id="name" /><br>
    學號<input name="id" type="int" id="id" value="<?php echo htmlspecialchars($id) ?>" /><br>
    父親姓名<input name="dad" type="text" id="dad" /><br>
    母親姓名<input name="mom" type="text" id="mom" /><br>
    申請種類<select name="species" type="text" id="species" /><br>
                <option value='低收入戶'>低收入戶</option>
                <option value='中低收入戶'>中低收入戶</option>
                <option value='家庭突發因素'>家庭突發因素</option>
            </select>
    <br>
    <input type="submit" name="Submit" value="送出" /><br>
</form>
</body>
</html>
