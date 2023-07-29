<?php
session_start();
require_once 'db.php';

if (isset($_POST['submit'])) {
  $var_name = $_POST['cate'];
  $var_budget = $_POST['budget'];
  $user_id = $_SESSION['id'];

  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) {
    echo "<p>Error: Could not connect to database.<br/>
          Please try again later.</p>";
    die($conn->error);
  }

  $sql = "INSERT INTO cate(cate,budget,iduser) VALUES ('$var_name', '$var_budget', '$user_id')";
  $result = $conn->query($sql);

  if ($result) {
    echo "تمت العملية";
  } else {
    echo "حدث خطأ أثناء إدخال البيانات";
  }

  $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>add category</title>
  <link rel="stylesheet" href="up.css">
</head>
<body>
  <div style="background-color:rgb(233, 245, 204)">
    <center><h1>add</h1></center>
  </div>

  <header></header>

  <br><br><br><br>

  <form action="" method="POST">
    <div align="center">الفئة &thinsp; &thinsp;<br>
      <input type="text" placeholder="أدخل القيمة" name="cate" required="required" style="width:100px ; height:30px;">
    </div>
    <div align="center">الميزانية &thinsp; &thinsp;<br>
      <input type="text" placeholder="أدخل القيمة" name="budget" required="required" style="width:100px ; height:30px;">
    </div>
    <center><input type="submit" name="submit"></center>
    <center><button type="submit"><a href="home.php">إلغاء</a></button><br><br></center>
  </form>

</body>
</html>