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
    <link href="css/rav.css" rel="stylesheet">
    <link rel="icon" href="images/icon.png" type="faviconlx-icon">
  </head>


  <body>
    <?php
    include("menu.php");
    ?>
<?php
 $mid=$_SESSION['mid'];
 $urlImg=$_SESSION['imageUrl'];
      $user_name = "root";
   $password = "";
   $database = "hogwarts";
   $server = "127.0.0.1";

   $db_handle = mysql_connect($server,$user_name, $password);
   $db_found = mysql_select_db($database, $db_handle);

   if ($db_found){
    $SQL = "SELECT * from subjects WHERE uid=$mid";
    $return = mysql_query($SQL,$db_handle);
while ($row = mysql_fetch_array($return))
{
?>
<div class="col-md-1">

                 </div>
                     <div class="col-md-1"  >
                          <table class="table table-bordered table-hover" id="sub" border="1">
                              <tr >
                                        <td>Astronomy</td>
                                        <td>Alchemy</td>
                                        <td>Charms</td>
                                        <td>Apparition</td>
                                        <td>Defence Against the Dark</td>
                                        <td>Arithmancy</td>
                                        <td>Flying</td>
                                        <td>Herbology</td>
                                        <td>Divination</td>       
                                        <td>History of Magic</td>
                                        <td>Study of Ancien</td> 
                                      </tr>
                                      <tr >
                                        <td><?php echo $row['sub1']; ?></td>
                                        <td><?php echo $row['sub2']; ?></td>
                                        <td><?php echo $row['sub3']; ?></td>
                                        <td><?php echo $row['sub4']; ?></td>
                                        <td><?php echo $row['sub5']; ?></td>
                                        <td><?php echo $row['sub6']; ?></td>
                                        <td><?php echo $row['sub7']; ?></td>
                                        <td><?php echo $row['sub8']; ?></td>
                                        <td><?php echo $row['sub9']; ?></td>
                                        <td><?php echo $row['sub10']; ?></td>
                                        <td><?php echo $row['sub11']; ?></td>                                    </tr>


                          </table>        
                      </div>
        
<?php
}

   }
?>
    

  </body>
</html>
<?php
}
else{
  header("location:proba.php");
}
?>