<!-- <div class="GallerySection bg-[#F3ECDE]">
                <div class="gallery text-center p-10">
                
                        <h2 class="text-4xl w-48 m-auto font-extrabold dark:text-black">foods.</h2>
                        <p class="my-4 text-lg text-gray-500">photo gallery</p>
                    </div>  -->
<!-- this is pictures section            -->
            <div class="pictures flex justify-center item-center flex-wrap">
                <?php     
                    require("config/configer.php");
                        $readPicture = "SELECT * FROM `foodgallery`";  
                        $queryPicture=mysqli_query($connect,$readPicture);
                        while($data = mysqli_fetch_assoc($queryPicture)){
                            $id=$data['id'];
                            $photo=$data['photo'];

                ?>
                    
                        <div class="image-items shadow-lg rounded m-4 p-2">
                            <img class="h-80 max-w-md" src="image/<?php echo $photo; ?>" alt="image description">
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>

<!-- this is pictures section            -->

