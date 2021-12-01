<?php
/* الاتصال بقاعدة البيانات */
include('connect.php');

/* جملة استعلام حذف سجلات */
$sql = "insert into subscribers values ('$_REQUEST[id]','$_REQUEST[full_name]','','')";

/* تنفيذ الاستعلام */
mysqli_query($con, $sql) or die ("error query");


echo"inserted records= ".mysqli_affected_rows($con);

/* إغلاق الاتصال بقاعدة البيانات */
mysqli_close($con);

?>
