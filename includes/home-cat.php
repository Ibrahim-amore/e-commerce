 <?php
 $cat= "select * from `category`";
 $cat1_result = $db->query($cat);
 ?>
<?php
$blog_result ="";
      if(mysqli_num_rows($cat1_result)< 1){
      $blog_result ="No Products Found";
        }
      else{
      ?>
<div class="container custom-container">
                    <div class="slider-category-wrap">
                        <div class="row category-active">
                            <?php 
                                     
                                     while($row_cat = $cat1_result->fetch_assoc()) {
                                     $cat_img=$row_cat['image'];
                                     $cat_name =$row_cat['cat_name'];
                                     //$cat_id=$row_cat['id'];
                                                                                          
                                      ?>
                            <div class="col-lg-2 col-6">
                                <div class="category-item active">
                                    <a href="shop?cat=<?php echo $cat_name;?>" class="category-link"></a>
                                    <div class="category-thumb">
                                        <img src="meAdmin/category_image/<?php echo $cat_img;?>" alt="">
                                    </div>
                                    <div class="category-content">
                                        <h6 class="title"><?php echo $cat_name;?></h6>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                           
                        </div>
                    </div>
                </div>
              <?php
              }
              ?>