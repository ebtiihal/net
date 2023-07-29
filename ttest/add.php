
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<h1>إدخال بيانات الطالب</h1>
</head>
<body> 

  <form  action="post.php" method="POST">
  <?php if(isset($_GET['error'])) {echo $_GET['error'];}?>    
 
    <label for="stname">اسم الطالب:</label><br>
    <input type="text" id="stname" name="stname" required><br><br>

    <label for="idst">رقم الطالب:</label><br>
    <input type="text" id="idst" name="idst" required><br><br>

    <label for="amount">قيمة الكورس:</label><br>
    <input type="text" id="amount" name="amount" required><br><br>

    <label for="section">مجموعة الطالب:</label><br>
    <input type="text" id="section" name="section" required><br><br>

    <label for="cardnumber">رقم البطاقة:</label><br>
    <input type="text" id="cardnumber" name="cardnumber" required><br><br>

    <label for="typecard">نوع الدفع:</label><br>
    <select id="typecard" name="typecard" required>
      <option value="بطاقة">بطاقة</option>
      <option value="فيزا">فيزا</option>
      <option value="كاش">كاش</option>
    </select><br><br>

    <label for="is_student">هل هو طالب؟</label><br>
    <input type="checkbox" id="is_student" name="is_student"><br><br>

    <input type="submit" value="تسجيل">
  </form>
  
</body>
</html>
