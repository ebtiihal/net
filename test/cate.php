<!DOCTYPE html>
<html>
<div  style="background-color:   hsla(199, 39%, 50%, 0.945); width: 100cap; height:200cap;"> 

<head>
<link rel="stylesheet" href="Css/cate.css">


<title>category </title>
<center>
<h1>الفئات</h1>
</center>
</head>


<body>
<table border='2' align='center' bgcolor='#ffebee'>
<?php
 session_start();
include 'db.php';
$conn = new mysqli($hn, $un , $pw ,$db);
 // التحقق من نجاح الاتصال
  if ($conn->connect_error) {
      die("فشل الاتصال: " . $conn->connect_error);
  }
$sql = "SELECT * FROM cate";
$result = $conn->query($sql);
 
  // التحقق من وجود نتائج
  if ($result->num_rows > 0) 
  {
    

    echo'
           <thead><tr>
            <th>الفئة</th>
            <th>الميزانية</th>
            <th>اختر</th>
            <th>اختر</th>
            <th>اختر</th>
           <thead><tr>' ;
    // طباعة بيانات كل صف في الجدول
    while($row = $result->fetch_assoc()) {
    $_SESSION['cate']=$row['cate'];
    $_SESSION['budget']=$row['budget'];
   
    $_SESSION['idcat'] = $row['idcat'];
        echo "
        
          <tbody><tr>
          <td>".$row['cate']."</td>
          <td>".$row['budget']."</td>
          <td><a href ='addex.php?idcat=".$row['idcat']."'><input type ='submit' value='Add'></a></td>
          <td><a href ='delete.php?idcat=".$row['idcat']."'><input type ='submit' value='Delete'></a></td>
          <td><a href ='updatecate.php?idcat=".$row['idcat']."'><input type ='submit' value='update'></a></td>
          
          </tr> </tbody>";     
    }
} 
else {
         echo "لا توجد نتائج";
     }
  
  $conn -> close();  
?>

</table>
<br><br><br><br>
<center><button type="submit" >  <a href="home.php">  إلغاء   </a></button><br><br><center>


</body>  
<html>