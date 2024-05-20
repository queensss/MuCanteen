<?php

require("../config/configer.php");
$error= "invalid Student ID or password";

if(isset($_POST['email']) && isset($_POST['password']) ){

    $email=$_POST['email'];
    $password=$_POST['password'];
  

   if(!empty($email) && !empty($password)){
         
     $sql="SELECT * FROM `admin` WHERE email='$email' and password='$password'";
    //  $sql="SELECT * FROM `c_login` WHERE id='$s_id'";

     $sql_query=mysqli_query($connect,$sql);

      $num=mysqli_num_rows($sql_query);

     if($num==1){
      
        while($data=mysqli_fetch_assoc($sql_query)){

         $s_id=$data['id'];          
         header("Location:../Admin/admin.php");

        }   
      }else{
        header("Location:../Admin/adminLogin.php");
    } 

   }else{
      echo "Invalid Id or Password";
   }
  }


?>








