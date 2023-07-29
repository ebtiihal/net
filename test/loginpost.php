
<?php
 session_start();//اتصال
 include 'db.php';
 
if(isset($_POST['name']) && isset($_POST['password']))//شرط وجود اسم ورقم سري متطابق
 {
     function validate($data)
     {
        $data=trim( $data);
        $data=stripslashes( $data);
        $data= htmlspecialchars( $data);
        return  $data;
     }
     
    $var_username=validate($_POST['name']) ;
    $var_Password =validate ($_POST['password']);
    if(empty($var_username))//في حالة عدم وجود الاسم يبقى في صفحة تسجيل الدخول
    {
       header("Location: login.php?error= name error");
       exit();
    }
    else if(empty($var_Password))//في حالة عدم وجود للرقم السري يبقى في الصفحة
    {
      header("Location: login.php?error= password error"); 
      exit();
    }
    else
    {
      $conn = mysqli_connect('localhost','root' , '' ,'test');//اتصال بقاعدة البيانات
     
       $sql = "SELECT * FROM user WHERE name='$var_username' AND password='$var_Password'";
       $result = mysqli_query($conn,$sql);
         
      
        if(mysqli_num_rows($result) === 1)
         {
          $row= mysqli_fetch_assoc($result);
          if( $row['name']===$var_username && $row['password']===$var_Password)
          {
            $_SESSION['name']=$row['name'];
            $_SESSION['id']=$row['id'];
            echo"welcom";
          
            header("Location: home.php"); 
             exit();     
          } 
          else{ header("Location:login.php");  exit(); }//
        }
        else{ header("Location:login.php");  exit(); }//

      }
    }      
   
   else{  header("Location:login.php");  exit(); }//
   
?>


