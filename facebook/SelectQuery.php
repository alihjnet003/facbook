﻿<?php
/* الاتصال بقاعدة البيانات*/ 
include('connect.php');

echo"<link rel='stylesheet' href='table.css'>";

/* جملة الاستعلام*/ 
$sql = "select ? from ??? where ??? ? '???' ";

/* تنفيذ الاستعلام*/
$result=mysqli_query($con,$sql);

/* صف رأس الجدول */
echo"<table>";
    echo"<tr>";
        echo "<th>ID</th><th>FULL NAME</th><th>BIRTH DATE</th>";
    echo"</tr>";
/*  الجملة التكرارية تبدء من هنا */
while ( $row = ???(???))
{
     echo"<tr>";   /* إدراج صف جديد*/
    /* عرض الحقل الأول */
    
    
    /* عرض الحقل الثاني */
     
    
    //عرض الحقل المميّز
      
if (??? ? ???) /* الجملة الشرطية قصد تمييز حقل وفق شرط محدّد - استبدل علامات  ؟ بالمتغيرات المناسبة*/
    
    {                                    }   /* inline css عرض الحقل ضمن خلية بيانات منسقة بطريقة*/
    
    else
    
    {                                    }   /* في حال لم يتحقق الشرط : يعرض الحقل كباقي الحقول الأخرى */

  echo"</tr>";    /* غلق علامة صف الجدول */
    }
/* نهاية الجملة التكرارية */
    
echo"</table>"; /* إغلاق علامة الجدول*/




/*إغلاق الاتصال بقاعدة البيانات*/
mysqli_close($con);

?>