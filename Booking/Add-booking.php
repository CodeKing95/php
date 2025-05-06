<?php
$host="localhost";
$username="root";
$password="";
$db_name="test";
$tbl_name="booking";

mysql_connect("$host","$username","$password")or die('cannot connect server');
mysql_select_db("$db_name") or die('cannot select DB');

$sql="INSERT INTO booking VALUES('$departure','$destination','$date','$time','$type','$airline','$seat')";
$result=mysql_query($sql);

if($result){
    echo "Successfull"."<BR>";
}
mysql_close();
?>
