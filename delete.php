
<?php
mysql_connect("localhost","root","");
mysql_select_db("hogwarts");

$id = $_REQUEST["id"];

$findUID = "SELECT uid FROM subjects where  id = '$id'";
$result = mysql_query($findUID); 
$uid = mysql_result($result, 0);


$deleteSub = "DELETE FROM subjects WHERE id=$id";
mysql_query($deleteSub);

$deleteStu = "DELETE FROM students WHERE id=$uid";
mysql_query($deleteStu);

header("location: admin.php");
?>
