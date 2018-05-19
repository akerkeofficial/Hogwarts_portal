<!DOCTYPE html>
<?php
session_start();
session_unset();
session_destroy();
?>

<html lang="en">
  <head>
    
    <title>Hogwarts Portal</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link href="css/main_style.css" rel="stylesheet">
    <link rel="icon" href="images/icon.png" type="faviconlx-icon">

      <?php include 'linkSource.php';?>
  </head>
  <style type="text/css">
  
 
  .g{
    width: 500px;
    height:300px;
    float:left;
  }
  .b{
    background-color: rgba(255,255,255,0.5);
    width: 500px;
    height: 500px;
    padding: 50px;
    border: 2px solid black;
    border-radius: 10px;
    float: left;

  }
</style>


  <body>
  <?php
// include("menu.php");
    if(isset($_REQUEST["portal"])){
        $portal = $_REQUEST["portal"];
    }else{
        $portal = "";

    }
 if($portal == "") {
?>
  <?php
session_start();
if (isset($_POST['login'])) {
    $login=$_POST["login"];
    $password=$_POST["password"];
     if (strlen($login)<2) {
      echo "Name lenghth less than 5";
    }
    else if (strlen($password)<2) {
      echo "Login lenghth less than 5";   
    }
     else{
          $conn = new mysqli("localhost","root","","hogwarts");
          if ($conn->connect_error) {
          die("Connection error".$conn->connect_error);
           }
         $sql="SELECT * FROM students WHERE login='$login' AND password='$password'";
         $result=$conn->query($sql);

          if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            if ($login==$row['login'] and $password==$row['password']) {
              
              
              $_SESSION['mid']=$row['id'];
              $_SESSION['imageUrl']=$row['image'];
       //       $_SESSION['idd']=$id;
              header("Location: homepage.php");  
            }
        } 
       }
      }
    }

     
?>

    

  <a ><img style="width: 500px; height: 500px; position:absolute; left:0.1%; margin-top: 15%;" class="transparent"src="gif/tumblr_mn40fjGygp1rgpyeqo1_500.gif"/></a> 

<div class="container">

  <?php include 'template/mainMenu.php'; ?>
</div>
<form method="POST" enctype="multipart/form-data">
  <div>
    <label for="login" class="col-sm-2 control-label">login: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="login" name="login" placeholder="Your login" required>
    </div>
    <label for="password" class="col-sm-2 control-label">Password:   </label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
    </div>
    <button style="font-size:18px;  color: red; font-family: ravie;" type="submit"  id="sign" class="btn btn-default">ALOHOMORA</button>
</div>
  </form>

<form action="save.php" method="POST" enctype="multipart/form-data" id="application-form" name="application-form"  onsubmit="return validateTerms()">

   

<div class="a"></div>
<div class="g"></div>
<div class="b">
<div style="font-size:25px; color: GOLD; text-align:center; font-family: Lucida Calligraphy;">Registration</div>
    <label for="name" class="col-sm-2 control-label">Name: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Your firstname" required>
    </div>
    <label for="surname" class="col-sm-2 control-label">Surname: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="surname" name="surname" placeholder="Your surname" required>
    </div>
    <label for="login" class="col-sm-2 control-label">login: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="login" name="login" placeholder="Your login" required>
    </div>
    <label for="password" class="col-sm-2 control-label">Password:   </label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
    </div>
        <label for="date">Your date of birth:
          <input type="date" id="date" name="birthday" required> 
        </label>
        <div class="select">
        <label for="select" >Faculty  </label>
        <select name="faculty" id="select" required="required">
          <option value="nc">no selection</option>
          <option value="Gryffindor">Gryffindor</option>
          <option value="Slytherin">Slytherin</option>
          <option value="Hufflepuff">Hufflepuff</option>
          <option value="Ravenclaw">Ravenclaw</option>
        </select>
      </div>
      <div class="select">
        <label for="select" >Head of faculty  </label>
        <select name="head" id="select">
          <option value="nc">no selection</option>
          <option value="Minerva McGonagall">Minerva McGonagall</option>
          <option value="Pomona Sprout">Pomona Sprout</option>
          <option value="Filius Flitwick">Filius Flitwick</option>
          <option value="Severus Snape">Severus Snape</option>
        </select>
      </div>
      <div class="date">
        <label for="Blood">Origin:
          <input type="radio" name="blood" id="blood" value="Pure-blood">Pure-blood
          <input type="radio" name="blood" id="blood" value="Half-blood">Half-blood
          <input type="radio" name="blood" id="blood" value="Mud-blood">Mud-blood
        </label>
      </div>
      <input type="file" name="image"/>
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>

</div>

</form>
<?php
}?>
</body>

</html>