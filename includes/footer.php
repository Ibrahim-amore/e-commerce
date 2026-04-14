<a href="<?php echo $whatsapp;?>"><div class="whatsapp" title="send us a message"> <img src="img/wa.png"></div></a>
<footer>
            <div class="footer-area gray-bg pt-30 pb-30">
                <div class="container"style="max-width: 800px; margin: 0 auto; text-align: center">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="footer-widget mb-50">
                            <div style="max-width: 800px; margin: 0 auto; text-align: center">
                                <div class="footer-logo mb-25">
                                    <a href="index"><img src="meAdmin/logo/<?php echo $page_logo;?>" alt="" style="max-width: 180px;"></a>
                                </div>
                                <div class="footer-contact-list align-items-center" >
                                    <ul style="display: flex; flex-direction: column; justify-content: center;align-items: center;">
                                        <li>
                                            <div class="icon mr-1"><i class="flaticon-place"></i></div>
                                            <p><?php echo $shop_address_1;?></p>
                                            
                                        </li>
                                        <li>
                                            
                                            <div class="icon mr-1"><i class="flaticon-telephone-1"></i></div>
                                            <h5 class="number"><a href="tel:<?php echo $phone_number;?>"><?php echo $phone_number;?>:</a></h5>
                                           
                                        </li>
                                        <li>
                                            <div class="icon mr-1"><i class="flaticon-mail"></i></div>
                                            <p><a href="mailto:<?php echo $email_address;?>"><?php echo $email_address;?></a></p>
                                        </li>
                                      </ul>
                                </div>
                                <div class="footer-social" style="margin-top: 15px;">
                                    <ul style="display: flex; justify-content: center;align-items: center;">
                                        <li><a href="<?php echo $facebook;?>" class="pt-3"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?php echo $twitter;?>" class="pt-3"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?php echo $instagram;?>" class="pt-3"><i class="fab fa-instagram"></i></a></li>
                                       
                                    </ul>
                                </div>
                                
                                <div class="footer-widget footer-box-widget mt-50">
                                <div class="f-newsletter">
                                    <div class="fw-title">
                                        <h5 class="title">Newsletter</h5>
                                    </div>
                                    <form id="sub" method="POST">
                                        <input type="email" placeholder="Email Address" name="email" required="">
                                        <button type="submit"><i class="flaticon-send"></i></button>
                                    </form>
                                    <p class="text-center" id="sub_msg"></p>
                                    <p>Subscribe our newsletter for promotion notifications</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        
                       
                        <div class="col-xl-12 col-lg-12 col-md-12 d-none">
                            <div class="footer-widget footer-box-widget mb-50">
                                <div class="f-newsletter">
                                    <div class="fw-title">
                                        <h5 class="title">Newsletter</h5>
                                    </div>
                                    <form >
                                        <input type="email" placeholder="Email Address" name="email" required="">
                                        <button type="submit" ><i class="flaticon-send"></i></button>
                                    </form>
                                    
                                    <p>Do Not Show Your Mail</p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
     
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2022 <?php echo $page_name;?> All Rights Reserved</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="payment-accepted text-center text-md-right">
                                <img src="img/images/card.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>