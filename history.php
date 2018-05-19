<?php
session_start();
if(isset($_SESSION['mid'])){
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Faculty</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link href="css/huff.css" rel="stylesheet">
    <link rel="icon" href="images/icon.png" type="faviconlx-icon">
  </head>


  <body>
    <?php
    include("menu.php");
    ?>

<div id="carousel" class="carousel slide" style="float:left;">
  <ol class="carousel-indicators">
    <li class="active" data-target="#carousel" data-slide-to="0"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
    <li data-target="#carousel" data-slide-to="4"></li>
  </ol>
<!-- слайды -->  

  <div class="carousel-inner">
    <div class="item active">
          <img style="width: 100%; height: 500px;"src="images/embl.jpg">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
    </div>
  </div>
      <div class="item">
        <img style="width: 100%; height: 500px;" src="images/hall.jpg">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
    </div>
    </div>
    <div class="item">
        <img style="width: 100%; height: 500px;" src="images/qwid.jpg">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
    </div>
    </div>
        <div class="item">
          <img style="width: 100%; height: 500px;" src="gif/tumblr_lz7wg73LCU1qeijvdo1_250.gif">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
    </div>
  </div>
  <div class="item">
        <img style="width: 100%; height: 500px;" src="images/WI_83EdyJjo.jpg">
      <div class="carousel-caption">
        <h3><h3>
    </div>
    </div>
  </div>
<!-- стрелки переключения слайдов -->
  <a href="#carousel" class="left carousel-control" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a href="#carousel" class="right carousel-control" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
<div>
  <table  id="text" border="1">
    <tr><th>Founder: Godric Gryffindor</th></tr><tr><th>Animal:
Lion</th></tr><tr><th>Ghost:
Nearly-Headless Nick</th></tr><tr><th>Common room:  
Gryffindor Tower</th></tr><tr><th>Gryffindor is one of the four Houses of Hogwarts School of Witchcraft and Wizardry, founded by Godric Gryffindor. The particular characteristics of students Sorted into Gryffindor are courage, chivalry, and determination. The emblematic animal is a lion, and its colours are red and gold. Sir Nicholas de Mimsy-Porpington, also known as "Nearly Headless Nick" is the house ghost.  
</th></tr><tr><th>The head of house  Minerva McGonagall. Minerva became the head house possibly at the same time she was appointed Transfiguration professor at Hogwarts school of witchcraft and wizardry, in 1956 when Albus Dumbledore became Headmaster, she took over his previous teaching position.</th></tr></table></div>
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