<!DOCTYPE html>
<html>
<head>
<title> login</title>
<link rel="stylesheet" href="up.css">
<div style='background-color:darkgray'>
<center><h1>تسجيل دخول </h1></center>
</head>


<header>
</header>
 



<body>
<form action='loginpost.php' method='POST' align='center'>
<?php if(isset($_GET['error'])) {echo $_GET['error'];}?>
<div class='r'>
<div class='box'>
المستخدم :<br><input type='text' name ='name'placeholder="ادخل اسم المستخدم"required="required"><br></div>

<div class='box'>
الرقم السري : <br><input type='password' name ='password' placeholder=" الرقم السري"required="required"><br></div>

<br><br><br><input type='submit' value ='submit'>

    </div>
</form>
</body>

</div>
</html>