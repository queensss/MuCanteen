<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MU canteen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.css" integrity="sha512-ttaKI7P6G+denBpzGujwqjguFDsmxcxfVY+KovsyIpQ3vWbVdilbohqij8ewk16HN3vLghlCAXUWsl0KYQo6pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.js" integrity="sha512-bUju8VkXhCQgW7zCHSdiIDpECo/lqzChkKrKoc1v2PL2XqO/0Q2Y8dhu07+q6Rk+1c1xr6cfE0VZnumgwy93Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../Style/style.css">
</head>
<body>

      
<?php

 
?>
<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
   <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>
<?php require_once("aside.php");?>


<div class="p-4 sm:ml-64">
   <div class="p-4  rounded-lg dark:border-gray-700">

   <?php
  require("../config/configer.php");
  if(isset($_GET['user_id']) && isset($_GET['foodId']) ){
    $s_id=$_GET['user_id'];
    $foodId=$_GET['foodId'];

  $userOrder="SELECT * FROM `c_login` WHERE id=$s_id";
  $userQuery=mysqli_query($connect,$userOrder);
  $data=mysqli_fetch_assoc($userQuery);
  $userName= $data['fullname'];
  $userId= $data['id'];

//   this is food ordering section
  $foodOrder="SELECT * FROM `foods` WHERE id=$foodId";
  $foodQuery=mysqli_query($connect,$foodOrder);
  $dataOrder=mysqli_fetch_assoc($foodQuery);
    $dataOrder['id'];
    $foodName= $dataOrder['foodName'];
    $price= $dataOrder['tk'];
    $photo =$dataOrder['photo']; 
  
  $OderSql="INSERT INTO `order`(`c_id`, `foodname`, `price`, `username`,`photo`) VALUES ('$userId','$foodName','$price','$userName','$photo')";
  $orderQuery=mysqli_query($connect,$OderSql);
}
?>
<!-- THIS IS MY ORDER SECTION  -->
<div class="food-list">
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-16 py-3">
                                                Sl No.
                                            </th>
                                            <th scope="col" class="px-16 py-3">
                                                Image
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Foods Name
                                            </th>
                                           
                                            <th scope="col" class="px-6 py-3">
                                                Price
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Date
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
 require("../config/configer.php");
 if( (isset($_GET['user_id']) && isset($_GET['foodId']) ) || isset($_GET['user_id']) ){
    $s_id=$_GET['user_id'];
    if(isset($_GET['foodId'])){
        $foodId=$_GET['foodId'];
    }
   

  $userOrder="SELECT * FROM `c_login` WHERE id=$s_id";
  $userQuery=mysqli_query($connect,$userOrder);
  $data=mysqli_fetch_assoc($userQuery);
  $userName= $data['fullname'];
  $userId= $data['id'];
 $readData = "SELECT * FROM `order` WHERE c_id=$userId";
 
 $query=mysqli_query($connect,$readData);
 while($data = mysqli_fetch_assoc($query)){
     $foodIdOr=$data['id'];
     $foodNameOr=$data['foodname'];
     $photoOr=$data['photo'];
     $tkOr=$data['price'];
     $date=$data['date'];


 ?>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="p-4">
                                                <?php echo $foodIdOr; ?>
                                            </td>
                                            <td class="p-4">
                                                <img src="../image/<?php echo $photoOr?>" class="w-16 md:w-32 max-w-full max-h-full" alt="Food Not Found">
                                            </td>
                                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                                <?php echo $foodNameOr; ?>
                                            </td>
                                            
                                                
                                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                               <?php echo $tkOr; ?>
                                            </td>
                                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                               <?php echo $date; ?>
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="../php/delOrder.php?user_id=<?php echo $s_id ?>&del=<?php echo $foodIdOr; ?>" class="font-medium bg-blue-700 p-4 rounded-lg text-white dark:text-white hover:underline">Delete</a>
                                            </td>
                                        </tr>
<?php
 }
}
 ?>
                                    </tbody>
                                </table>
                            </div>

             </div>
<!-- THIS IS MY ORDER SECTION  -->
    
   </div>
</div>

</body>
</html>