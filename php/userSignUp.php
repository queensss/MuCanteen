<?php
require("../config/configer.php");
 if(isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['password'])){
    $fullname=$_POST['fullname'];
    $email=$_POST["email"];
    $password=$_POST["password"];

    $sql="INSERT INTO `c_login` (`fullname`, `email`, `password`) VALUE('$fullname', '$email', '$password');";

    $query=mysqli_query($connect,$sql);

    if($query){
        header("location:../login.php");
    }else{
        header("location: ../ragistration.php");
    }



 } 


?>