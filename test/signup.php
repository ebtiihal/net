<!DOCTYPE html>
<html>
<head>
<title>sign up</title>
<link rel="stylesheet" href="up.css">
<div style='background-color:rgb(248, 224, 224)'>
<center><h1>تسجيل بيانات</h1></center>
</head>


<header>
<center><p>ادخل بياناتك هنا : </p></center>
</header>

<body>
<form action='signuppost.php' method='POST' align='center' onsubmit="return validateForm()">
  <div class='r'>
  <div class='box'>
 <h3>المستخدم:</h3><input type='text' name ='name'placeholder="ادخل اسم المستخدم"required="required"><br></div>
<div class='box'>
<h3>E-mail :</h3><input type='text' name ='email' id="email"placeholder="ادخل الاميل"required="required"><br></div>
<div class='box'>
<h3>رقم الهاتف : </h3><input type='text' name ='phone'placeholder="ادخل رقم "required="required"><br></div>
<div class='box'>
<h3>الرقم السري :</h3><input type='password' name ='password' placeholder=" الرقم السري"required="required"><br></div>
<br><br><br><input type='submit' value ='submit'>
<button type='submit'><a href='login.php'>تسجيل دخول </a></button>

    </div>
</form>
<script>

function validateEmail(email) {
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regex.test(email);
}

const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
  const emailInput = document.getElementById('email');
  if (!validateEmail(emailInput.value)) {
    event.preventDefault();
    alert('Please enter a valid email address');
  }
});

</script>
</body>







</div>
</html>