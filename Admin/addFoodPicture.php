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

<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
   <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<?php require_once("aside.php");?>
<div class="p-4 sm:ml-64">
   <div class="p-4  rounded-lg dark:border-gray-700">
   <div class="foods">
               <div class="add-foods">
                  <div class="title bg-blue-900 mb-5 p-5 rounded-lg shadow-2xl">
                  
                     <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">Add picture.</h1>
                  </div>
                  <div class="succes-form bg-white-50 p-5 rounded-lg shadow-2xl">

                     <?php

                      require("../config/configer.php");

                      if(!$connect){
                        echo mysqli_connect_error();
                      }

                      if(isset($_FILES["photo"])){                        
                        $photoName = $_FILES["photo"]["name"];
                        $photolocation = $_FILES["photo"]["tmp_name"];
                        $upload_photo = "../image/".$photoName;
                        move_uploaded_file($photolocation,$upload_photo);    

                        $dataSet = "INSERT INTO `foodgallery`(`photo`) VALUES ('$photoName')";
                        
                           

                         $query = mysqli_query($connect,$dataSet);

                          if($query){
                           echo "Recorded";
                          }else{
                           echo "Not Upload";
                          }                          
                      }
                      
                     ?>
                     <form class="mx-auto" action="addFoodPicture.php" method="POST" enctype="multipart/form-data"> 
                       

                        <label for="photo" class="block mb-2 mt-5 text-lg font-medium text-gray-900 dark:text-black">Photo: </label>

                        <input class="block w-full  bg-gray-50 text-sm text-gray-900 border border-gray-300 rounded-lg  cursor-pointer dark:text-gray-400 focus:outline-none " aria-describedby="user_avatar_help" name="photo" id="user_avatar" type="file" required>

                      
                        <input type="submit" value="submit" name="submit" class="mt-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"></input>
                        
                     </form>
                   </div>
                </div>
              </div>
            </div>

            <!-- this is galley showing section -->
           
            <div class="GallerySection bg-[#F3ECDE]">
              <div class="gallery text-center p-10">      
                    <h2 class="text-4xl w-48 m-auto font-extrabold dark:text-black">foods.</h2>
                    <p class="my-4 text-lg text-gray-500">photo gallery</p>
               </div> 
               <div class="pictures flex justify-center item-center flex-wrap">
               <?php
                require("../config/configer.php");
                $readPicture = "SELECT * FROM `foodgallery`";
        
                $queryPicture=mysqli_query($connect,$readPicture);

                while($data = mysqli_fetch_assoc($queryPicture)){
                    $id=$data['id'];
                    $photo=$data['photo'];
                ?>
                    
                  <div class="image-items shadow-lg rounded m-4 p-2">
                    <img class="h-80 max-w-md" src="../image/<?php echo $photo; ?>" alt="image description">
                </div>
            <?php
             }
            ?>
            </div>
</div>

            <!-- this is galley showing section -->
      
   </div>
</div>






</body>
</html>