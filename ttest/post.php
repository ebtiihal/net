<?php

session_start();
include 'db.php';
 $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'class';
$conn = new mysqli($servername, $username, $password, $dbname);
    if (isset($_POST['stname']) && isset($_POST['idst']) && isset($_POST['amount']) && isset($_POST['section']) 
    && isset($_POST['cardnumber']) && isset($_POST['typecard'])) {
     
       
         $name = $_POST['stname'];
      $student_id = $_POST['idst'];
      $course = $_POST['amount'];
      $group = $_POST['section'];
      $card_number = $_POST['cardnumber'];
      $payment_type = $_POST['typecard'];

         $id=$_POST['id'];
     

     
      if ($conn->connect_error) {
        die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
      }

      $sql = "SELECT * FROM cours WHERE id = '$id'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) == 0) {
    
        echo "Invalid course selection";
      } else {
     
      

     //$fk=$_GET['id'];
      $sql = "INSERT INTO student (stname, idst, amount, section, cardnumber, typecard,id) VALUES ('$name', '$student_id', '$course', '$group', '$card_number',
       '$payment_type', $id)";
     $table_id = mysqli_insert_id($conn); 
         $_SESSION['id'] = $fk; 
      if ($conn->query($sql) === TRUE) {
        echo "تم تسجيل البيانات بنجاح";
      } else {
        echo "حدث خطأ أثناء تسجيل البيانات: " . $conn->error;
      }

   
      $conn->close();
    } 
}
  ?>