<?php
// إنشاء اتصال بقاعدة البيانات
$conn = mysqli_connect('localhost', 'root', '', 'expenses tracker');

// جلب القيم المدخلة من النموذج
$from_category = $_POST['from_category'];
$from_budget = $_POST['from_budget'];
$to_category = $_POST['to_category'];
$to_budget = $_POST['to_budget'];
$transfer_amount = $_POST['transfer_amount'];
$transfer_reason = $_POST['transfer_reason'];
$transfer_date = $_POST['transfer_date'];

// تحديث الميزانية للفئة المحول منها النقل
$sql = "UPDATE categorys SET budget = budget - $transfer_amount WHERE id_cat = $from_category";
mysqli_query($conn, $sql);

// تحديث الميزانية للفئة المحول إليها النقل
$sql = "UPDATE categorys SET budget = budget + $transfer_amount WHERE id_cat = $to_category";
mysqli_query($conn, $sql);

// إدخال سجل النقل في جدول transfers
$sql = "INSERT INTO transfers (from_category, from_budget, to_category, to_budget, transfer_amount,
 transfer_reason, transfer_date) VALUES ($from_category, $from_budget, $to_category, $to_budget, 
 $transfer_amount, '$transfer_reason', '$transfer_date')";
mysqli_query($conn, $sql);

// إغلاق اتصال قاعدة البيانات
mysqli_close($conn);

// إعادة توجيه المستخدم إلى الصفحة الرئيسية
header('Location: displaycate.php');
exit();
?>