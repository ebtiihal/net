<!DOCTYPE html>
<html>
<head>
	<title>نقل الأموال</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
		}
		form {
			width: 500px;
			margin: 50px auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 0 0 10px #ccc;
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="number"], textarea {
			display: block;
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
			float: right;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
		.clearfix::after {
			content: "";
			clear: both;
			display: table;
		}
		.category {
			width: 50%;
			float: left;
		}
		.transfer {
			width: 50%;
			float: right;
		}
	</style>
</head>
<body>
	<h1>نقل الأموال</h1>
	<form action="transferpost.php" method="post">
		
		<div class="category">
			<label for="from_category">من فئة:</label>
			<select name="from_category" id="from_category">
				<?php
					// إنشاء اتصال بقاعدة البيانات
					$conn = mysqli_connect('localhost','root' , '' ,'expenses tracker');

					// استعلام SQL لجلب الفئات
					$sql = "SELECT id_cat, namecate, budget FROM categorys";
					$result = mysqli_query($conn, $sql);

					// عرض الفئات كخيارات داخل عنصر الـ select
					while ($row = mysqli_fetch_assoc($result)) {
						echo '<option value="' . $row['id_cat'] . '" data-budget="' . $row['budget'] . '">' . $row['namecate'] . '</option>';
					}

					// إغلاق اتصال قاعدة البيانات
					mysqli_close($conn);
				?>
			</select>
			<label for="from_budget">الميزانية:</label>
			<input type="number" name="from_budget" id="from_budget" min="0" value="0">
		</div>
		
		<div class="transfer">
			<label for="to_category">إلى فئة:</label>
			<select name="to_category" id="to_category">
				<?php
					// إنشاء اتصال بقاعدة البيانات
					$conn = mysqli_connect('localhost','root' , '' ,'expenses tracker');

					//استعلام SQL لجلب الفئات
					$sql = "SELECT id_cat, namecate, budget FROM categorys";
					$result = mysqli_query($conn, $sql);

					// عرض الفئات كخيارات داخل عنصر الـ select
					while ($row = mysqli_fetch_assoc($result)) {
						echo '<option value="' . $row['id_cat'] . '" data-budget="' . $row['budget'] . '">' . $row['namecate'] . '</option>';
					}

					// إغلاق اتصال قاعدة البيانات
					mysqli_close($conn);
				?>
			</select>
			<label for="to_budget">الميزانية:</label>
			<input type="number" name="to_budget" id="to_budget" min="0" value="0">
			<label for="transfer_amount">المبلغ:</label>
			<input type="number" name="transfer_amount" id="transfer_amount" min="0" value="0">
			<label for="transfer_reason">الأسباب/التعليقات:</label>
			<textarea name="transfer_reason" id="transfer_reason" rows="4"></textarea>
			<label for="transfer_date">تاريخ النقل:</label>
			<input type="date" name="transfer_date" id="transfer_date" value="<?php echo date('Y-m-d'); ?>">
			<input type="submit" value="نقل">
		</div>
		<div class="clearfix"></div>
	</form>
	<script>
		// التأكد من تحديث قيمة الميزانية الخاصة بالفئة المحددة عند تغيير الفئة
		document.getElementById('from_category').addEventListener('change', function() {
			var budget = this.options[this.selectedIndex].getAttribute('data-budget');
			document.getElementById('from_budget').value = budget;
		});
		document.getElementById('to_category').addEventListener('change', function() {
			var budget = this.options[this.selectedIndex].getAttribute('data-budget');
			document.getElementById('to_budget').value = budget;
		});
	</script>
</body>
</html>