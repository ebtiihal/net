
<?php
 session_start();
 $hn = 'localhost';
 $un = 'root';
 $pw = '';
 $db = 'test';

try {
    // إنشاء اتصال PDO
   
    $conn = new PDO("mysql:host=$hn;dbname=$db", $un, $pw);
    // تعيين خيارات PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $date=$_POST['date'];
     $Paid_up=$_POST['Paid_up'];
     $payment_type=$_POST['payment_type'];
     $fk=$_SESSION['idcat'];
    // الاستعلام لإدخال بيانات في جدول
   // $sql = "INSERT INTO expen (date, Paid_up, payment_type,fkcat)
    //VALUES ('$date', '$Paid_up', '$payment_type','$fk')";
$sql = "INSERT INTO expen (date, Paid_up, payment_type,fkcat)
VALUES (:date, :Paid_up, :payment_type, :fkcat)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':date', $date);
$stmt->bindParam(':Paid_up', $Paid_up);
$stmt->bindParam(':payment_type', $payment_type);
$stmt->bindParam(':fkcat', $fk);
$stmt->execute();
    // استخدام الدالة exec() لإتمام العملية
   // $conn->exec($sql);
   echo "تم إدخال البيانات بنجاح";  header("Location: addex.php"); 
  
} catch(PDOException $e) {
    // عرض رسالة الخطأ في حالة فشل العملية
    echo "فشل الاتصال بقاعدة البيانات: " . $e->getMessage();
}

// إغلاق الاتصال
$conn = null;
?>

