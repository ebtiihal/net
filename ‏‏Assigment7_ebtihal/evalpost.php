<?php
 session_start();
// اتصال بقاعدة البيانات
$hn = 'localhost';
$un = 'root';
$pw = '';
$db = 'expenses tracker';

try {
  $conn = new PDO("mysql:host=$hn;dbname=$db", $un, $pw);
  // تعيين وضع التقييم والتعليق
  $rating = $_POST["eval"];
  $comment = $_POST["comment"];
  $user_id= $_SESSION['user_id'];
  // استخدام استعلام SQL لإدخال البيانات في قاعدة البيانات
  $stmt = $conn->prepare("INSERT INTO evaluation (eval, comment,fkuser) VALUES (:eval, :comment, :fkuser)");
  $stmt->bindParam(':eval', $rating);
  $stmt->bindParam(':comment', $comment);
  $stmt->bindParam(':fkuser', $user_id);
  $stmt->execute();
  echo "تم حفظ التقييم والتعليق بنجاح";
} catch(PDOException $e) {
  echo "فشل في الاتصال بقاعدة البيانات: " . $e->getMessage();
}
$conn = null;
?>