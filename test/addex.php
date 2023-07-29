

<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<div  style="background-color:   hsla(199, 39%, 50%, 0.945); width: 200cap; height:200cap;"> <br><br><br><br>    
<!----------------------------------------------------------------------------------------------------->
<head>
<link rel="stylesheet" href="Css/cate.css">

<center>
<title>category </title>

<h1>البيانات</h1>
</center>
</head>

<style>
    .w{
        border: 5px solid white;
        border-radius:15px;
       padding: 20px;
        width: 300px;
       background: #dfbfbf;
    }
</style>
<center>

</center><br><br><br><br>



<body>
<center> 
<form action="ad.php" method ="POST"> 
<?php if(isset($_GET['error'])) {echo $_GET['error'];}?>  
<div class="w" >
<div  >التاريخ  <br>  
<input type='date' placeholder="أدخل التاريخ" name='date'  required="required" style="width:100px ; height:30px;"></div>
<br><br><br><br>
<table>
  <tr>
<td><div  align="right">القيمة المدفوعة &thinsp; &thinsp;<br>
<input type='text' placeholder="أدخل القيمة" name='Paid_up' required="required" style="width:100px ; height:30px;"></div></td>
<td><div align="left"> &thinsp; &thinsp; &thinsp; &thinsp; &thinsp;نوع الدفع <br>&thinsp; &thinsp;
<input  type='text' placeholder="نوع الدفع" name='payment_type'  required="required" style="width:100px ; height:30px;">  </div>
</td>
</table><br><br><br>
<input type="submit" name ='submit'></center>
<center><button type="submit" >  <a href="cate.php">  إلغاء   </a></button><br><br><center>
</div></from><br><br><br>
<br><br><br><br></body></div>
</html>
