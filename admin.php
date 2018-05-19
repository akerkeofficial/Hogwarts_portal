<?php
session_start();
if(isset($_SESSION['mid'])){
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Subject</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link href="css/griff.css" rel="stylesheet">
    <link rel="icon" href="images/icon.png" type="faviconlx-icon">
  </head>

  <body>
    <button type="submit"  onclick="window.location='index.php';" class="btn btn-raised btn-warning pull-right">Log out</button>
 <?php
    if(isset($_REQUEST["gryff"])){
        $gryff = $_REQUEST["gryff"];
    }else{
        $gryff = "";

    }
 if($gryff == "") {
?>


     <?php
     $user_name = "root";
   $password = "";
   $database = "hogwarts";
   $server = "127.0.0.1";

   $db_handle = mysql_connect($server,$user_name, $password);
   $db_found = mysql_select_db($database, $db_handle);

   if ($db_found){
    $SQL = "SELECT * from students ";
    $return = mysql_query($SQL,$db_handle);
while ($row = mysql_fetch_array($return))
{
?>

<div class="col-md-1">
                 </div>
                     <div class="col-md-1"  >
                          <table class="table table-bordered table-hover" id="sub" border="1">
                              <tr >
                                        <th>name</th>
                                        <th>surname</th>
                                        <td>Astronomy</td>
                                        <td>Alchemy</td>
                                        <td>Charms</td>
                                        <td>Apparition</td>
                                        <td>Arithmancy</td>
                                        <td>Flying</td>
                                        <td>Herbology</td>
                                        <td>Divination</td>       
                                        <td>History of Magic</td>
                                        <td>Study of Ancien</td>                           
                                        <th>Potions</th>
                                    </tr>

                                    <tr >
                                        <td><?php echo $row['name']; ?></td>

                                        <td> <?php echo $row['surname']; ?></td>
<?php
mysql_connect("localhost","root","");
mysql_select_db("hogwarts");

$user_id = $row['id'];

$query = "SELECT * FROM subjects WHERE uid='$user_id'";
$result = mysql_query($query);
$num = mysql_num_rows($result);
for ($i=0;$i<$num;$i++){
  $row1 = mysql_fetch_array($result);?>


                                        <form action="update.php">
                                          <td> <?= $row1["sub1"]?><br/>
                                          <a href="delete_confirm.php?id=<?= $row1['id']?>">Delete</a>
    <a href="sub.php?id=<?= $row1['id']?>">Edit</a> <br/><br/></td>
                                          <td> <?= $row1["sub2"]?>   
                                            <a href="delete_confirm.php?id=<?= $row1['id']?>">Delete</a>
    <a href="edit.php?id=<?= $row1['id']?>">Edit</a> <br/><br/></td>
                                          <td><?= $row1["sub3"]?>  
                                            <a href="delete_confirm.php?id=<?= $row1['id']?>">Delete</a>
    <a href="edit.php?id=<?= $row1['id']?>">Edit</a> <br/><br/></td>
    <td> <?= $row1["sub4"]?><br/>
                                          <a href="delete_confirm.php?id=<?= $row1['id']?>">Delete</a>
    <a href="sub.php?id=<?= $row1['id']?>">Edit</a> <br/><br/></td>
                                          <td> <?= $row1["sub5"]?>   
                                            <a href="delete_confirm.php?id=<?= $row1['id']?>">Delete</a>
    <a href="edit.php?id=<?= $row1['id']?>">Edit</a> <br/><br/></td>
                                          <td><?= $row1["sub6"]?>  
                                            <a href="delete_confirm.php?id=<?= $row1['id']?>">Delete</a>
    <a href="edit.php?id=<?= $row1['id']?>">Edit</a> <br/><br/></td>
    <td> <?= $row1["sub7"]?><br/>
                                          <a href="delete_confirm.php?id=<?= $row1['id']?>">Delete</a>
    <a href="sub.php?id=<?= $row1['id']?>">Edit</a> <br/><br/></td>
                                          <td> <?= $row1["sub8"]?>   
                                            <a href="delete_confirm.php?id=<?= $row1['id']?>">Delete</a>
    <a href="edit.php?id=<?= $row1['id']?>">Edit</a> <br/><br/></td>
                                          <td><?= $row1["sub9"]?>  
                                            <a href="delete_confirm.php?id=<?= $row1['id']?>">Delete</a>
    <a href="edit.php?id=<?= $row1['id']?>">Edit</a> <br/><br/></td>
    <td> <?= $row1["sub10"]?><br/>
                                          <a href="delete_confirm.php?id=<?= $row1['id']?>">Delete</a>
    <a href="sub.php?id=<?= $row1['id']?>">Edit</a> <br/><br/></td>
                                          <td> <?= $row1["sub11"]?>   
                                            <a href="delete_confirm.php?id=<?= $row1['id']?>">Delete</a>
    <a href="edit.php?id=<?= $row1['id']?>">Edit</a> <br/><br/></td>                              
                                         </form>

                                    </tr>
<?php } ?>

                          </table>     
                      </div>
        
<?php
echo "<br>";
}

   }
?>
<?php
}?>
  </body>
</html>
<?php
}
else{
  header("location:index.php");
}
?>