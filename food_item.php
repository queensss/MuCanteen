<div class="container bg-[#BAE5F4] p-10 mx-auto px-4  foodItems flex justify-center items-center">
    <?php

    require("config/configer.php");
    $readData = "SELECT * FROM `foods`";

    $query=mysqli_query($connect,$readData);
    $count=0;
    while($data = mysqli_fetch_assoc($query)){
        $id=$data['id'];
        $foodName=$data['foodName'];
        $photo=$data['photo'];
        $tk=$data['tk'];
        
        if($count==3){
            break;
        }else{
            $count++;
        }

    ?>
         <div class=" m-2 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-2 h-80 w-full rounded-t-lg" src="./image/<?php echo $photo; ?>" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                 <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white"><?php echo $foodName; ?></h5>

                    <div class="flex items-center justify-between">
                        <span class="text-normal  text-gray-300 dark:text-gray-300"><?php echo $tk; ?></span>
                        <a href="#">
                            <?php require("modalBtn.php") ?>
                        </a>
                        
                    </div>
                 </a>
            </div>
    </div>
     
   <?php
    }
   ?>
</div>