<?php

/* الاتصال بقاعدة البيانات */
include('connect.php');

/* جملة الاستعلام*/
$sql="update subscribers set full_name = '$_REQUEST[full_name]'  where  id = '$_REQUEST[id]'";

/* تنفيذ الاستعلام */                   /*  إظهار رسالة الخلل في الاستعلام  */
mysqli_query($con,$sql) or die ("Please check your query.");

/* عرض عدد السجلات المتأثرة بالاستعلام*/


echo"Updated records= ".mysqli_affected_rows($con);
/* غلق الاتصال بقاعدة البيانات */
mysqli_close($con);

?>
