<?php
require("../config/configer.php");
 if(isset($_GET['del'])){
    $id = $_GET['del'];
    $delData="DELETE FROM `foods` WHERE id=$id";
         mysqli_query($connect,$delData);
        header("location:../Admin/foodList.php");
   
 }
?>