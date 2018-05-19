<?php
mysql_connect("localhost","root","");
mysql_select_db("hogwarts");
$id = $_REQUEST["id"];
$query = "SELECT * FROM subjects WHERE id=$id";
$result = mysql_query($query);
$num = mysql_num_rows($result);
	$row = mysql_fetch_array($result);?>
	<?= $row["sub1"]?> <?= $row["sub2"]?> <?= $row["sub3"]?> <?= $row["sub4"]?> <?= $row["sub5"]?> <?= $row["sub6"]?> 
	<?= $row["sub7"]?> <?= $row["sub8"]?> <?= $row["sub9"]?> <?= $row["sub10"]?> <?= $row["sub11"]?>

	<a href="delete.php?id=<?= $row['id']?>">Yes</a>
	<a href="retrieve.php?id=<?= $row['id']?>">No</a><br>

