<?php
mysql_connect("localhost","root","");
mysql_select_db("hogwarts");
$id	= $_REQUEST["id"];
$sub1 = $_REQUEST["sub1"];
$sub2 = $_REQUEST["sub2"];
$sub3 = $_REQUEST["sub3"];
$sub4 = $_REQUEST["sub4"];
$sub5 = $_REQUEST["sub5"];
$sub6 = $_REQUEST["sub6"];
$sub7 = $_REQUEST["sub7"];
$sub8 = $_REQUEST["sub8"];
$sub9 = $_REQUEST["sub9"];
$sub10 = $_REQUEST["sub10"];
$su11 = $_REQUEST["sub11"];
$query = "UPDATE subjects SET `sub1`='$sub1',`sub2`='$sub2',`sub3`=$sub3,`sub4`='$sub4',`sub5`='$sub5',`sub6`=$sub6,
`sub7`='$sub7',`sub8`='$sub8',`sub9`=$sub9,`sub10`='$sub10',`sub11`='$sub11'
WHERE id=$id";
echo $query;
mysql_query($query);
header("location: admin.php");

?>
