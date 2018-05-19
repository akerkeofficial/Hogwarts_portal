<?php
session_start();
if(isset($_SESSION['mid'])){
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Groupmates</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link href="css/slyth.css" rel="stylesheet">
    <link rel="icon" href="images/icon.png" type="faviconlx-icon">
  </head>


  <body>
    <?php
    include("menu.php");
    ?>
<div class="col-md-11">

                 </div>
                     <div class="col-md-11"  >
                          <table class="table table-bordered table-hover" id="mate" border="1">
                              <tr style="color:red; font-family: Goudy Stout;">
                                        <th>students of the Faculty</th>
                                    </tr>
                                    <tr >
                                        <td>Percy Weasley</td>
                                    </tr>
                                    <tr >
                                    </tr>
                                    <tr >
                                        <td>Oliver Wood</td>
                                    </tr>
                                    <tr >
                                        <td>Alicia Spinnet</td>
                                    </tr>
                                    <tr >
                                        <td>Angelina Johnson</td>
                                    </tr>
                                    <tr >
                                        <td>Fred Weasley</td>
                                    </tr>
                                    <tr >
                                        <td>George Weasley</td>
                                    </tr>
                                    <tr >
                                        <td>LeeJordan</td>
                                    </tr>
                                    <tr >
                                        <td>Cormac McLaggen</td>
                                    </tr>
                                    <tr >
                                        <td>Ritchie Coote</td>
                                    </tr>
                                    <tr >
                                        <td>Parvati Patil</td>
                                    </tr>
                                    <tr >
                                        <td>Hermione Granger</td>
                                    </tr>

                                    <tr >
                                        <td>Colin-Creev</td>
                                    </tr>
                                    <tr >
                                        <td>Seamus Finnigan</td>
                                    </tr>

                                    <tr >
                                        <td>Ginny Weasley</td>
                                    </tr>
                                    <tr >
                                        <td>LavenderBrown</td>
                                    </tr>
                                    <tr >
                                        <td>Jimmy Peakes</td>
                                    </tr>

                                    <tr >
                                        <td>Neville Longbottom</td>
                                    </tr>
                                    <tr >
                                        <td>Ron Weasley</td>
                                    </tr>

                                    <tr >
                                        <td>Dean Thomas</td>
                                    </tr>
                                    <tr >
                                        <td>Harry Potter</td>
                                    </tr>

                                    <tr >
                                        <td>Romilda Vane</td>
                                    </tr>

                                    <tr >
                                        <td>Demelza robins</td>
                                    </tr>
                                    <tr >
                                        <td>Nigel Wolpert</td>
                                    </tr>

                          </table>        
                      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
<?php
}
else{
  header("location:proba.php");
}
?>