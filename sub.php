<!DOCTYPE html>
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
  

  $id = $_REQUEST["id"];

   if ($db_found){
    $SQL = "SELECT * from subjects WHERE id = '$id'";
    $return = mysql_query($SQL,$db_handle);

while ($row_s = mysql_fetch_array($return))
{
  $ussserid = $row_s['uid'];
  $SQL1 = "SELECT * FROM students  WHERE id = '$ussserid'";
  $rettturn = mysql_query($SQL1,$db_handle);
  while ($row = mysql_fetch_array($rettturn)){
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
$query = "SELECT * FROM subjects WHERE id=$id";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
?>
                                        <form action="update.php">
<td> <input type="number" min="1" max="100" name="sub1" value="<?= $row['sub1'] ?>"/></td>
<td> <input type="number" min="1" max="100" name="sub2" value="<?= $row['sub2'] ?>"/></td>
<td> <input type="number" min="1" max="100" name="sub3" value="<?= $row['sub3'] ?>"/></td>
<td> <input type="number" min="1" max="100" name="sub4" value="<?= $row['sub4'] ?>"/></td>
<td> <input type="number" min="1" max="100" name="sub5" value="<?= $row['sub5'] ?>"/></td>
<td> <input type="number" min="1" max="100" name="sub6" value="<?= $row['sub6'] ?>"/></td>
<td> <input type="number" min="1" max="100" name="sub7" value="<?= $row['sub7'] ?>"/></td>
<td> <input type="number" min="1" max="100" name="sub8" value="<?= $row['sub8'] ?>"/></td>
<td> <input type="number" min="1" max="100" name="sub9" value="<?= $row['sub9'] ?>"/></td>
<td> <input type="number" min="1" max="100" name="sub10" value="<?= $row['sub10'] ?>"/></td>
<td> <input type="number" min="1" max="100" name="sub11" value="<?= $row['sub11'] ?>"/></td>
<input type="hidden" name="id" value="<?= $row['id'] ?>"/><br/>
<input type="submit"/>

                                    </tr>

                          </table>        
                      </div>
        
<?php
}
}

   }
?>
<?php
}?>
  </body>
</html>
