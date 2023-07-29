<!DOCTYPE html>
<html>
<head>
  <title>اختيار المادة</title>
</head>
<body>
  <h1>اختيار المادة</h1>
<?php
 session_start();
include 'db.php';
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من نجاح الاتصال بقاعدة البيانات
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// استعلام قاعدة البيانات لاسترداد البيانات
$sql = "SELECT * FROM cours";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '
        <table>
        <thead>
            <tr>
                <th>Course-id</th>
                <th>Course name</th>
                <th>Instructor Name</th>
                <th>Time</th>
                <th>Select</th>
            </tr>
        </thead>
        <tbody>';
    
    // طباعة بيانات كل صف في الجدول
    while ($row = $result->fetch_assoc()) {
        $_SESSION['id'] = $row['id'];
        echo "
            <tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['c_name'] . "</td>
                <td>" . $row['dr'] . "</td>
                <td>" . $row['time'] . "</td>
                
                <td><a href ='add.php?id=".$row['id']."'><input type ='submit' value='اختيار'></a></td>
    
            </tr>";
           

    }
    
    echo 'تم التحميل';
} else {
    echo "لا توجد نتائج";
}

$conn->close();
?>


</body>
</html>