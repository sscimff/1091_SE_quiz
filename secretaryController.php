<?php
// view, model 之間溝通
require("Model.php");
$id=$_POST['id'];
$s_result=mysqli_escape_string($conn, $_POST['s_result']);
$s_content=mysqli_escape_string($conn, $_POST['s_content']);
$s_sign=mysqli_escape_string($conn, $_POST['s_sign']);
if ($s_result == 0) {
    s_deny($id);
    header("Location: View.php");
    exit();
}
elseif ($s_result < 0) {
    echo "補助金額不得小於 0，請重新輸入";
    exit();
}
s_add($s_result, $s_content, $s_sign, $id);
echo "Message: Completed.";
header("Location: View.php");
?>


