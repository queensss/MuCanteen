<?php
require("../config/configer.php");
 if(isset($_GET['del']) && isset($_GET['user_id'])){
   echo $del = $_GET['del'];
   echo $user_id=$_GET['user_id'];
    $delData="DELETE FROM `order` WHERE id=$del";
         mysqli_query($connect,$delData);
        header("location:../User/myorder.php?user_id=$user_id");
   
 }
?>