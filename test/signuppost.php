<?php
 require_once 'db.php';
   $var_username= $_POST['name'];
   $var_Email = $_POST['email'];
   $var_Phon = $_POST['phone'];
   $var_Password = $_POST['password'];
   $var_fPassword = $_POST['password'];
  
   
   $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) {
      echo "<p>Error: Could not connect to database.<br/>
      Please try again later.</p>";
        die($conn -> error);
    } 
  
    $sql = "INSERT INTO user(name,email,phone,password)  VALUES 
         ('$var_username','$var_Email',$var_Phon,'$var_Password')" ;
        
          $result=$conn->query($sql);
          echo 'تمت الاضافة';
         $conn -> close(); 
         header('location:login.php');
?>