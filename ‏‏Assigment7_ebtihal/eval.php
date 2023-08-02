
<!DOCTYPE html>
<html>
<head>
	<title>تقييم التطبيق</title>
    <div style="background-color: hsla(199, 39%, 50%, 0.945); width: 100%; height: 200px;">
    <?php //ارجاع بيانات المستخدم لعرضها في الصفحة
 session_start();
 if(isset($_SESSION['user_id'])&& isset($_SESSION['user_name'])){?>
<font color="white"> <h2>&emsp;&emsp; *USER : <?php echo $_SESSION['user_name']; ?></h2></font>
<?php } else{header("Location: addcategory.php"); 
             exit();  } ?>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
		}
		form {
			margin: 0 auto;
			max-width: 500px;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}
		select,
		textarea {
			display: block;
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-bottom: 20px;
			font-size: 16px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			margin-right: 10px;
		}
		input[type="submit"]:hover {
			background-color: #45a049;
		}
		button[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
		}
		button[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>

		<h1 style="color: white; text-align: center; margin-top: 50px;">تقييم التطبيق</h1>
		<form method="post" action="evalpost.php" style="margin-top: 50px;">
			<label style="color: black;">التقييم:</label>
			<select name="eval">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<label style="color: black;">التعليق:</label>
			<textarea name="comment" size="100"></textarea>
			<input type="submit" value="حفظ">
			<button type="submit"><a href="home.php" style="text-decoration: none; color: white;">إلغاء</a></button></div>
		</form>
	
</body>
</html>