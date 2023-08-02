
<!DOCTYPE html>
<html>
<!-- صفحة تعديل بيانات الفئات 
     ابتهال محمد الشريدي .. 10 / 7 / 2023 -->

<head>
    <meta charset="UTF-8">
    <title>تعديل فئة</title>
    <style>
        body {
            background-color: hsla(199, 39%, 50%, 0.945);
            font-family: Arial, sans-serif;
            color: white;
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

        input[type="text"] {
            display: block;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 20px;
            font-size: 16px;
        }

        input[type="submit"],
        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
        }

        input[type="submit"]:hover,
        button[type="submit"]:hover {
            background-color: #45a049;
        }

        button[type="submit"] {
            background-color: #f44336;
        }
    </style>
</head>

<body>
    <h1>تعديل البيانات المدخلة للنفقة</h1>

    <form method="post" action="update_c_post.php">
        <label for="namecate">اسم الفئة:</label>
        <input type="text" id="namecate" name="namecate" value="<?php echo $row['namecate']; ?>" required>

        <label for="Budget">الميزانية:</label>
        <input type="text" id="Budget" name="Budget" value="<?php echo $row['Budget']; ?>" required>

        <input type="hidden" name="id_cat" value="<?php echo $row['id_cat']; ?>">

        <button type="submit">حفظ التعديلات</button>
        <button type="button" onclick="window.location.href='displaycate.php'">إلغاء</button>
    </form>
</body>

</html>