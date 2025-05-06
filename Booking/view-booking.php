<?php
$host="localhost";
$user="root";
$passwd="";
$database="test";
$tbl_name="booking";

mysql_connect($host,$user,$passwd)or die('cannot connect server');
mysql_select_db($database)or die('cannot select DB');

$result=mysql_query("SELECT * FROM $tbl_name");

while($rows = mysql_fecth_array($result)){
    echo $rows['departure']."".$rows['destination']."".$rows['date']."".$rows['time']."".$rows['type']."".$rows['airline']."".$rows['seat']."<br>";
}
mysql_close();
?>