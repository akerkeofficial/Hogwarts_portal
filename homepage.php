<?php
session_start();
if(isset($_SESSION['mid'])){
?>
<html lang="en">  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wizard Page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link href="css/griff.css" rel="stylesheet">
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
    $SQL = "SELECT * from students WHERE id=$mid";
    $return = mysql_query($SQL,$db_handle);
while ($row = mysql_fetch_array($return))
{
?>

<div class="col-md-6">
    <div class="portfolio-item">
        <img style="width: 90%; height: 90%; border-radius:10px; margin-top:25px;" src="<?php echo "$urlImg"; ?>">
             </div>
                 </div>
                     <div class="col-md-6"  >
                          <table class="table table-bordered table-hover" id="info" border="1">
                              <tr >
                                 <td>Name:</td>
                                 <td><?php echo $row['name']; ?></td>
                              </tr>
                              <tr >
                                 <td>Surname:</td>
                                 <td><?php echo $row['surname']; ?></td>
                              </tr>
                              <tr >
                                 <td>Birth date :</td>
                                 <td><?php echo $row['birthday']; ?></td>
                              </tr>
                              <tr >
                                 <td>Faculty:</td>
                                 <td><?php echo $row['faculty']; ?></td>
                              </tr>
                              <tr >
                                 <td>Head :   </td>
                                 <td><?php echo $row['head']; ?></td>
                              </tr>
                              <tr >
                                 <td>Blood :</td>
                                 <td><?php echo $row['blood']; ?></td>
                              </tr>
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