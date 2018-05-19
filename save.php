<?php
if (isset($_POST['name'])) {

      $user_name = "root";
   $password = "";
   $database = "hogwarts";
   $server = "127.0.0.1";

   $db_handle = mysql_connect($server,$user_name, $password);
   $db_found = mysql_select_db($database, $db_handle);

  
    $name=$_POST["name"]; 
    $surname=$_POST["surname"];
    $login=$_POST["login"];
    $password=$_POST["password"]; 
    $birthday=$_POST["birthday"]; 
    $faculty=$_POST["faculty"]; 
    $head=$_POST["head"];
    $blood=$_POST["blood"];
    //$image=$_POST["image"];

     if (strlen($name)<1) {
      echo "Name lenghthh less than 5";
    }
    else if (strlen($surname)<1) {
      echo "surname lenghth less than 5";   
    }
    else if (strlen($login)<1) {
      echo "login lenghth less than 5";
    }
    else if (strlen($password)<1) {
      echo "password lenghth less than 5";   
    }
    else if (strlen($birthday)<1) {
      echo "birthday lenghth less than 5";
    }
    else if (strlen($faculty)<1) {
      echo "faculty lenghth less than 5";   
    }
    else if (strlen($head)<1) {
      echo "head lenghth less than 5";
    } 
    else if (strlen($blood)<1) {
      echo "blood lenghth less than 5";
    }    
    else{
       $conn= new mysqli("localhost","root","","hogwarts");
       if ($conn->connect_error) {
        die("Connection error".$conn->error);
        }
      $full_path="UserImages/".$_FILES['image']['name'];
       
        $sql="INSERT INTO students(name,surname,login,password,birthday,faculty,head,blood,image) 
       VALUES ('$name','$surname','$login','$password','$birthday','$faculty','$head','$blood','$full_path')";
        
        if(is_uploaded_file($_FILES['image']['tmp_name'])){
            move_uploaded_file($_FILES['image']['tmp_name'], $full_path);
            //header("Location:index.php");
        if($conn->query($sql)===TRUE){
          // header("Location:proba.php");
          // echo ('DONE');
          echo "<script>alert('SUCCESS! Now you can login')</script>";
                    echo "<script>window.open('index.php','_self')</script>";
            $sql1="SELECT id FROM students WHERE login='$login' and password='$password'";
            $return1 = mysql_query($sql1,$db_handle);
                while ($row1 = mysql_fetch_array($return1)){
                          $useruid = $row1['id'];
                           $sql2="INSERT INTO subjects VALUES (null,'$useruid',0,0,0,0,0,0,0,0,0,0,0)"; 
                                 if($conn->query($sql2)===TRUE){
                                    echo ('<br>DONE SUBJECTS');
                                  }
                }
            
        }
       else{
        echo "ERROR".$sql."<br>".$conn->error;
        }
        }
         $conn->close();
      }
    }
?>
