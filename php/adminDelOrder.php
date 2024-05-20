<?php
require("../config/configer.php");
 if(isset($_GET['del'])){
   $del = $_GET['del'];
    $delData="DELETE FROM `order` WHERE id=$del";
         mysqli_query($connect,$delData);
        header("location:../Admin/orderFoods.php");
   
 }
?>