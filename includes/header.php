 <header>
   <!-- header-message -->
            <div class="header-message-wrap">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="top-notify-message">
                                <p><marquee><?php echo $welcome_msg;?></marquee></p>
                                <span class="message-remove">X</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-message-end -->

            <!-- header-top-start -->
            <div class="header-top-wrap">
                <div class="container custom-container">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="header-top-left">
                                <ul>
                                    <li class="header-top-lang">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">English</button>
                                            
                                        </div>
                                    </li>
                                    <li class="header-top-currency">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">NGN - Naira</button>
                                            
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-top-right">
                                <ul>
                                    
                                    <li><a href="about">About Us</a></li>
                                    <li><a href="contact">Contact</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top-end -->

            <!-- header-search-area -->
            <div class="header-search-area">
                <div class="container custom-container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-3 d-none d-lg-block">
                            
                            <div class="logo">
                                <a href="index"><img src="meAdmin/logo/<?php echo $page_logo;?>" alt="Logo"></a>
                            </div>
                            
                           
                        </div>
                        <div class="col-xl-10 col-lg-9">
                            <div class="d-block d-sm-flex align-items-center justify-content-end">
                                <div class="header-search-wrap">
                                    <form action="#" class="ggt">
                                        <select class="custom-select" id="cat_search">
                                           <option selected="">All Categories</option>
                                           <?php 
                                     $cat= "select * from `category`";
                                     $cat1_result = $db->query($cat);
                                     while($row_cat = $cat1_result->fetch_assoc()) {
                                     //$cat_img=$row_cat['image'];
                                     $cat_name =$row_cat['cat_name'];
                                     //$cat_id=$row_cat['id'];
                                                                                          
                                      ?>
                                    <option value="<?php echo $cat_name;?>"> <?php echo $cat_name;?></option> 
                                            <?php
                                            }
                                           ?>    
                                        </select>
                                        <input type="text" placeholder="Search Product,brand,category..." id="live_search1">
                                        <button><i class="flaticon-loupe-1"></i></button>
                                    </form>
                                </div>
                                <div class="header-action">
                                    <ul>
                                        <li class="header-phone">
                                            <div class="icon"><i class="flaticon-telephone"></i></div>
                                            <a href="tel:<?php echo $phone_number;?>"><span>Call Us Now</span><?php echo $phone_number;?></a>
                                        </li>
                                       
                                        
                                        <li class="header-cart-action">
                                            <div class="header-cart-wrap">
                                                <a href="cart"><i class="flaticon-shopping-basket"></i></a>
                                                <span class="item-count" id="cart-item"></span>
                                                <ul class="minicart" id="cart_item3">
                                                    
                                                </ul>
                                                
                                                
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-search-area-end -->

            <div id="sticky-header" class="menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                           
                            
                           
                            
                            <div class="menu-wrap">
                                <nav class="menu-nav">
                                     
                                    <div class="logo d-block d-lg-none">
                                        <a href="index"><img src="meAdmin/logo/<?php echo $page_logo;?>" alt=""></a>
                                    </div>
                                    <div class="header-category d-none d-lg-block">
                                        <a href="#" class="cat-toggle"><i class="fas fa-bars"></i>ALL Category<i class="fas fa-angle-down"></i></a>
                                        <ul class="category-menu">
                                            <?php 
                                     $cat= "select * from `category`";
                                     $cat1_result = $db->query($cat);
                                     while($row_cat = $cat1_result->fetch_assoc()) {
                                     //$cat_img=$row_cat['image'];
                                     $cat_name =$row_cat['cat_name'];
                                     //$cat_id=$row_cat['id'];
                                                                                          
                                      ?>
                                            <li class=""><a href="shop?cat=<?php echo $cat_name;?>"><i class="flaticon-groceries"></i> <?php echo $cat_name;?></a>
                                                
                                            </li>
                                            <?php
                                     }
                                            ?>
                                         </ul>
                                          </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active"><a href="index">Home</a>
                                               
                                            </li>
                                            <li><a href="about">About Us</a></li>
                                            <li><a href="shop">Shop</a></li>
                                            <li><a href="contact">contact us</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-super-store d-none d-xl-block d-lg-none d-md-block">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><i class="flaticon-shop"></i> Visit Store</button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                                <a class="dropdown-item" href="shop">Shop Now</a>
                                           </div>
                                        </div>
                                    </div>
                                    
                                    <div style="display: flex; align-items: flex-start; justify-content:flex-end">
                                        <div class="header-action d-lg-none d-md-none">
                                    <ul>
                                      <li class="header-cart-action">
                                            <div class="header-cart-wrap">
                                                <a href="cart"><i class="flaticon-shopping-basket"></i></a>
                                                <span class="item-count" id="cart_item2"></span>
                                                
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="mobile-nav-toggler">
                                <i class="fas fa-bars"></i>
                            </div>
                                
                            </div>
                                    
                                    
                                    
                                    
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo"><a href="index"><img src="meAdmin/logo/<?php echo $page_logo;?>" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="<?php echo $twitter;?>"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="<?php echo $facebook;?>"><span class="fab fa-facebook-f"></span></a></li>
                                            
                                            <li><a href="<?php echo $instagram;?>"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="<?php echo $whatsapp;?>"><span class="fab fa-whatsapp"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header>