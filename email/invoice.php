<?php
include '../connection/config.php';
include '../connection/connection.php';
include '../common/page-info.php';
session_start();
$sssn_id = session_id();
?>
<?php
$stmt=$conn->prepare("SELECT * FROM cart WHERE s_id ='$sssn_id'");
$stmt->execute();
$result =$stmt->get_result();
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
<!--[if (gte mso 9)|(IE)]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- So that mobile will display zoomed in -->
<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- enable media queries for windows phone 8 -->
<meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS -->
<meta name="format-detection" content="date=no"> <!-- disable auto date linking in iOS -->
<meta name="format-detection" content="address=no"> <!-- disable auto address linking in iOS -->
<meta name="format-detection" content="email=no"> <!-- disable auto email linking in iOS -->
<title>Invoice</title>

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

<!-- CSS - you can't modify or add anything of it, as the StampReady Editor uses a copy of these styles. -->
<style type="text/css">

    /* basics */
    body { margin: 0px !important; padding: 0px !important; display: block !important; min-width: 100% !important; width: 100% !important; -webkit-text-size-adjust: none; }
    table { border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
    table td { border-collapse: collapse; }
    strong { font-weight: bold !important; }
    td img { -ms-interpolation-mode: bicubic; display: block; width: auto; max-width: auto; height: auto; margin: auto; display: block !important; border: 0px!important; }
    td p { margin: 0 !important; padding: 0 !important; display: inline-block !important; font-family: inherit !important; }
    td a { text-decoration: none !important; }

    /* outlook */
    .ExternalClass { width: 100%; }
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: inherit; }
    .ReadMsgBody { width:100%; background-color: #ffffff; }

    /* iOS blue links */
    a[x-apple-data-detectors] { color: inherit !important; text-decoration: none !important; font-size: inherit !important; font-family: inherit !important; font-weight: inherit !important; line-height: inherit !important; }

    /* gmail blue links */
    u + #body a { color: inherit; text-decoration: none; font-size: inherit; font-family: inherit; font-weight: inherit; line-height: inherit; }

    /* buttons fix */
    .undoreset a, .undoreset a:hover { text-decoration: none !important; }
    .yshortcuts a { border-bottom: none !important; }
    .ios-footer a { color: #aaaaaa !important; text-decoration: none; }

    /* responsive */
    @media screen and (max-width: 640px) {

        td.img-responsive img { width: 100% !important; max-width: 100%!important; height: auto!important; margin: auto; }
        table.row { width: 100%!important; max-width: 100%!important; }
        table.center-float, td.center-float { float: none!important; } /* stops floating modules next to each other */
        td.center-text { text-align: center!important; }
        td.container-padding { width: 100%!important; padding-left: 15px!important; padding-right: 15px!important; }
        table.hide-mobile, tr.hide-mobile, td.hide-mobile, br.hide-mobile { display: none!important; }
        td.menu-container { text-align: center !important; }
        td.autoheight { height: auto!important; }
        table.mobile-padding { margin: 15px 0!important; }
        table.br-mobile-true td br { display: initial!important; } 

    }

</style>
</head>
    <body>
  <!--module-->
<table  style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tr>
               <td bgcolor="#F4F4F4" align="center">
             
                   <!--container-->
                    <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tr><td align="center">
                            
                            <!--wrapper-->
                            <table class="row" style="width:540px;max-width:540px;" width="540" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tr><td class="container-padding" align="center">
                                
                              
                                
                                <!-- content container -->
                                <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="row" style="width:540px;max-width:540px;">
                                    <tr><td align="center">
                                        
                                    <!-- content -->    
                                      <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:100%;">
                                          <tr><td height="25">&nbsp;</td></tr> 
                              <tr><td>
                                  
                                  
                                  <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:100%;">
                                 
                                  </table>
                                  
                                  
                                  
                                  </td></tr>
                                          <tr><td height="25">&nbsp;</td></tr> 
                                        </table>
                                        
                                        </td></tr>
                                </table>
                                
                              
                                
                                </td></tr>
                            </table>
                            
                            </td></tr>
               </table>
             
             </td>
               </tr>
        </table>
  <!--module-->
<table  style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                         
            <tr>
               <td bgcolor="#F4F4F4" align="center">
             
                   <!--container-->
                    <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tr><td bgcolor="#282828" align="center">
                            
                            <!--wrapper-->
                            <table class="row" style="width:540px;max-width:540px;" width="540" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tr><td class="container-padding" align="center">
                                
                              
                                
                                <!-- content container -->
                                <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="row" style="width:540px;max-width:540px;">
                                    <tr><td align="center">
                                        
                                    <!-- content -->    
                                      <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:100%;">
                                          <tr><td height="25">&nbsp;</td></tr> 
                                     <tr><td>
                                         <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
                                         <tr>
                                             <td width="80" align="left">
                                             <img width="80" style="display:block;width:100%;max-width:80px;" alt="img" src="{IMAGE}">
                                             </td>
                                             <td>&nbsp;</td>
                                             <td align="right" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #ffffff;"><a href="{SITE_ADDRESS}" target="_blank" style="color: #ffffff">Invoice</a></td>
                                             </tr>
                                         </table>
                                         </td></tr>
                                          <tr><td height="25">&nbsp;</td></tr> 
                                        </table>
                                        
                                        </td></tr>
                                </table>
                                
                              
                                
                                </td></tr>
                            </table>
                            
                            </td></tr>
               </table>
             
             </td>
               </tr>
               
        </table>
        <!--module-->
<table  style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tr>
               <td bgcolor="#F4F4F4" align="center">
             
                   <!--container-->
                    <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tr><td bgcolor="#ffffff" align="center">
                            
                            <!--wrapper-->
                            <table class="row" style="width:540px;max-width:540px;" width="540" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tr><td class="container-padding" align="center">
                                
                              
                                
                                <!-- content container -->
                                <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="row" style="width:540px;max-width:540px;">
                                    <tr><td align="center">
                                        
                                    <!-- content -->    
                                      <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:100%;">
                                          <tr><td height="40">&nbsp;</td></tr> 
                                     <tr><td align="center"><img width="100" style="display:block;width:100%;max-width:100px;" alt="img" src="{IMAGE}"></td></tr>
                                     <tr><td height="20">&nbsp;</td></tr>
                             <tr><td align="center" style="font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 30px;color: #282828;">
{SITE_NAME}</td></tr>
                                          <tr><td height="18">&nbsp;</td></tr>
                           
                         
                                        
                                          <tr><td height="18">&nbsp;</td></tr>
                                          <tr><td align="center" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #282828;text-decoration: underline"><a href="{SITE_ADDRESS}" target="_blank" style="color: #282828">VISIT SITE</a></td></tr>
                                              <tr><td height="18">&nbsp;</td></tr>
                             <tr><td align="center" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 15px;color: #282828;">If you have any question. Please feel free to contact us.</td></tr>
                       
                                        </table>
                                        
                                        </td></tr>
                                </table>
                                
                              
                                
                                </td></tr>
                            </table>
                            
                            </td></tr>
               </table>
             
             </td>
               </tr>
        </table>
        <!--module-->
<table  style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tr>
               <td bgcolor="#F4F4F4" align="center">
             
                   <!--container-->
                    <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tr><td bgcolor="#FFFFFF" align="center">
                            
                            <!--wrapper-->
                            <table class="row" style="width:540px;max-width:540px;" width="540" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tr><td class="container-padding" align="center">
                                
                              
                                
                                <!-- content container -->
                                <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="row" style="width:540px;max-width:540px;">
                                    <tr><td align="center">
                                        
                                    <!-- content -->    
                                      <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:100%;">
                                          <tr><td height="30">&nbsp;</td></tr> 
                                     
                             
                                          <tr><td align="center" bgcolor="#F5F5F3">
                                        
                                        <!--[if (gte mso 9)|(IE)]><table border="0" cellpadding="0" cellspacing="0"><tr><td><![endif]-->
                                        
                                    <!-- column -->    
                                        <table class="row" style="width:260px;max-width:260px;" width="260" cellspacing="0" cellpadding="0" border="0" align="left">
                                        <tr><td align="center">
                                            
                                            <!-- content -->
                                            <table width="260" style="width:260px;max-width:260px;" cellspacing="0" cellpadding="0" border="0" align="center">
                                                
                                                <tr><td align="center">
                                                    
                                                    <table border="0" width="200" cellpadding="0" cellspacing="0" align="center">
                                                    <tr><td height="30">&nbsp;</td></tr>
                                                        
                                                        
                                                    <tr><td style="font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #282828;">Billing Address</td></tr>
                                                    <tr><td height="18">&nbsp;</td></tr>
                                                     <tr><td>
                                                        
                                                        <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
                                                            <tr>
                                                            <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #282828;line-height: 22px;">Order ID:</td>
                                                            <td width="20">&nbsp;</td>
                                                            <td  style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #282828;">{ORDER_ID}</td>
                                                            </tr>
                                                              
                                                             <tr>
                                                            <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #282828;line-height: 22px;">Tel:</td>
                                                            <td width="20">&nbsp;</td>
                                                            <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #282828;">{PHONE}</td>
                                                            </tr>
                                                            <tr>
                                                            <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #282828;line-height: 22px;">Email:</td>
                                                            <td width="20">&nbsp;</td>
                                                            <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #282828;">{YOUR_EMAIL}</td>
                                                            </tr>
                                                              <tr>
                                                            <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #282828;line-height: 22px;">Order Total :</td>
                                                            <td width="20">&nbsp;</td>
                                                                  <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #282828;"><strong>&#8358;{SUB_TOTAL}</strong></td>
                                                            </tr>
                                                        </table>
                                                        
                                                        </td></tr>
                                           
                                                        
                                                        
                                                    <tr><td height="30">&nbsp;</td></tr>
                                                    </table>
                                                    
                                                    </td></tr>
                                                
                                               
                                              
                                            </table>
                                            
                                            </td></tr>
                                        </table>
                                        
                                        <!--[if (gte mso 9)|(IE)]></td><td><![endif]-->
                                        
                                        <!-- gap -->
                                        <table class="row" style="width:20px;max-width:20px;" width="20" cellspacing="0" cellpadding="0" border="0" align="left"><tr><td height="30"></td></tr></table>
                                        
                                         <!--[if (gte mso 9)|(IE)]></td><td><![endif]-->
                                        
                                         <!-- column -->    
                                        <table class="row" style="width:260px;max-width:260px;" width="260" cellspacing="0" cellpadding="0" border="0" align="right">
                                        <tr><td align="center">
                                            
                                            <!-- content -->
                                       <table width="260" style="width:260px;max-width:260px;" cellspacing="0" cellpadding="0" border="0" align="center">
                                                
                                                <tr><td align="center">
                                                    
                                                    <table border="0" width="200" cellpadding="0" cellspacing="0" align="center">
                                                    <tr><td height="30">&nbsp;</td></tr>
                                                        
                                                        
                                                    <tr><td style="font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #282828;">Shipping Address</td></tr>
                                                    <tr><td height="18">&nbsp;</td></tr>
                                                    <tr><td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #282828;line-height: 22px;">{ADDRESS}<br>{COUNTRY} <br>{STATE} <br>{YOUR-NAME}</td></tr>
                                                    <tr><td height="30">&nbsp;</td></tr>
                                                </table>
                                                 </td></tr>
                                                
                                            </table>    
                                            </td></tr>
                                        </table>
                                    </td></tr>
                                          <tr><td height="3=20">&nbsp;</td></tr> 
                                        </table>
                                        
                                        </td></tr>
                                </table>
                                
                              
                                
                                </td></tr>
                            </table>
                            
                            </td></tr>
               </table>
             
             </td>
               </tr>
        </table>
                <!--module-->
<table  style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tr>
               <td bgcolor="#F4F4F4" align="center">
             
                   <!--container-->
                    <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tr><td bgcolor="#FFFFFF" align="center">
                            
                            <!--wrapper-->
                            <table class="row" style="width:540px;max-width:540px;" width="540" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tr><td class="container-padding" align="center">
                                
                              
                                
                                <!-- content container -->
                                <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="row" style="width:540px;max-width:540px;">
                                    <tr><td align="center">
                                        
                                    <!-- content -->    
                                      <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:100%;">
                                          <tr><td style="line-height: 15px;height: 15px;font-size: 0px;">&nbsp;</td></tr> 
                                     
                             <tr><td>
                                 <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
                                 <tr>
                                     <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #282828;">Order Number: {ORDER_ID}</td>
                                     <td width="30">&nbsp;</td>
                                     <td align="right" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #282828;">Items Price</td>
                                     </tr>
                                 </table>
                                 </td></tr>
                           <tr><td height="20" style="border-bottom: 1px solid #e0e0e0">&nbsp;</td></tr> 
                             <tr><td height="20">&nbsp;</td></tr>
                             <?php
                           $grand_total = 0;
                           $total_price =0;
                           while($row = $result->fetch_assoc()){
                             ?>
                             <tr><td>
                                 <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
                                     <tr>
                                     <td width="130"><img width="130" style="display:block;width:100%;max-width:130px;" alt="img" src="{SITE_ADDRESS}/meAdmin/product_image/<?= $row['pimag']?>"></td>
                                     <td width="20">&nbsp;</td>
                                     <td width="250">
                                         <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                         <tr><td style="font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #282828;line-height: 21px;"><?= $row['pname']?></td></tr>
                                         <tr><td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 21px;">Quantity : <?= $row['qty']?></td></tr>
                                        
                                         </table>
                                         </td>
                                     <td>&nbsp;</td>
                                     <td align="right" width="60">
                                             <table border="0" width="60" cellpadding="0" cellspacing="0">
                                         <tr><td align="right" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #282828;">&#8358;<?= number_format($row['total_price'],2)?></td></tr>
                                        
                                         </table>
                                         </td>
                                     </tr>
                                 </table>
                                 </td></tr>
                                          <tr><td height="20" style="border-bottom: 1px solid #e0e0e0">&nbsp;</td></tr> 
                                          <tr><td height="20">&nbsp;</td></tr>
                                             <tr><td>
                           <?php } ?>       
                                 </td></tr>
                                 <tr><td height="20" style="border-bottom: 1px solid #e0e0e0">&nbsp;</td></tr> 
                                          <tr><td height="30">&nbsp;</td></tr>
                                          <tr><td align="right">
                                              
                                              <table border="0" width="280" cellpadding="0" cellspacing="0">
                                                  <tr>
                                                      <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 24px;">Subtotal</td>
                                                      <td>&nbsp;</td>
                                                      <td align="right" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;">&#8358;{GRAND-TOTAL}</td>
                                                  </tr>
                                                  <tr>
                                                      <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 24px;">Delivery Fee</td>
                                                      <td>&nbsp;</td>
                                                     <td align="right" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;text-decoration: ">&#8358;{DELIVERY}</td>
                                                  </tr>
                                                  
                                                  <tr>
                                                      <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 24px;">Discount</td>
                                                      <td>&nbsp;</td>
                                                     <td align="right" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;text-decoration: ">-&#8358;{DISCOUNT}</td>
                                                  </tr>
                                                  <tr>
                                                      <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #282828;font-weight: 600;line-height: 24px;">Total Due</td>
                                                      <td>&nbsp;</td>
                                                      <td align="right" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #282828;"><strong>&#8358;{SUB_TOTAL}</strong></td>
                                                  </tr>
                                                   
                                              </table>
                                              </td></tr>
                                            <tr><td height="30" style="border-bottom: 1px solid #e0e0e0">&nbsp;</td></tr> 
                                          <tr><td height="20">&nbsp;</td></tr>
                                        </table>
                                        
                                        </td></tr>
                                </table>
                                
                              
                                
                                </td></tr>
                            </table>
                            
                            </td></tr>
               </table>
             
             </td>
               </tr>
        </table>
       
         <!--module-->
<table  style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tr>
               <td bgcolor="#F4F4F4" align="center">
             
                   <!--container-->
                    <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tr><td bgcolor="#ffffff" align="center">
                            
                            <!--wrapper-->
                            <table class="row" style="width:540px;max-width:540px;" width="540" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tr><td class="container-padding" align="center">
                                
                              
                                
                                <!-- content container -->
                                <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="row" style="width:540px;max-width:540px;">
                                    <tr><td align="center">
                                        
                                    <!-- content -->    
                                      <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:100%;">
                                          <tr><td height="20">&nbsp;</td></tr> 
                                   
                             
                                 <tr><td height="25">&nbsp;</td></tr>
                             <tr><td align="center">
                                 
                                      <!--button-->
                                              <table height="30" border="0" bgcolor="#F3825D" cellpadding="0" cellspacing="0"><tr>
                           
                            <td  align="center" height="40" width="170" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #ffffff;font-weight: 600;letter-spacing: 0.5px;">
                            
                            
                                <a href="{SITE_ADDRESS}" target="_blank" style="color: #ffffff">GO TO SITE</a>
                            </td>
                           
                            </tr></table>
                                 
                                 </td></tr>
                                         
                                          <tr><td height="40">&nbsp;</td></tr> 
                                        </table>
                                        
                                        </td></tr>
                                </table>
                                
                              
                                
                                </td></tr>
                            </table>
                            
                            </td></tr>
               </table>
             
             </td>
               </tr>
        </table>  
          <!--module-->
<table  style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tr>
               <td bgcolor="#F4F4F4" align="center">
             
                   <!--container-->
                    <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tr><td bgcolor="#282828" align="center">
                            
                            <!--wrapper-->
                            <table class="row" style="width:540px;max-width:540px;" width="540" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tr><td class="container-padding" align="center">
                                
                              
                                
                                <!-- content container -->
                                <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="row" style="width:540px;max-width:540px;">
                                    <tr><td align="center">
                                        
                                    <!-- content -->    
                                      <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:100%;">
                                          <tr><td height="40">&nbsp;</td></tr> 
                                     
                              <tr><td align="center" style="font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #dadada;font-weight: 400;">Get in Touch</td></tr>
                           
                                        <tr><td height="20">&nbsp;</td></tr>
                                           <tr><td>
                                              
                                              <table cellspacing="0" cellpadding="0" border="0" align="center">
                                              <tr>
                                                  <td width="25">
                                                    <a href="{FB}"> <img width="25" style="display:block;width:100%;max-width:25px;" src="http://emailmug.com/premium-template/emailpaws/notif/fb.png"></a>
                                                  </td>
                                                  <td width="10">&nbsp;</td>
                                                  <td width="25">
                                                      <a href="TW"><img width="25" style="display:block;width:100%;max-width:25px;" src="http://emailmug.com/premium-template/emailpaws/notif/tw.png"></a>
                                                  </td>
                                                  <td width="10">&nbsp;</td>
                                                  <td width="25">
                                                      <a href="IN"> <img width="25" style="display:block;width:100%;max-width:25px;" src="http://emailmug.com/premium-template/emailpaws/notif/in.png"></a>
                                                  </td>
                                                  <td width="10">&nbsp;</td>
                                                  
                                                  </tr>
                                              </table>
                                              
                                              </td></tr>
                                        <tr><td height="20">&nbsp;</td></tr>
                                        <tr><td align="center" style="font-family:'Roboto', Arial, Helvetica, sans-serif;font-size: 13px;color: #dadada;line-height: 19px;">This email was sent to : {YOUR_EMAIL}<br>
                                            You are receiving this email because you purchased an Item from {SITE_NAME}.<br>
                                            For any questions please send to {EMAIL_ADDRESS}
                                               </td></tr>
                                          <tr><td>&nbsp;</td></tr>
                                          <tr><td align="center">
                                              
                                              <table cellspacing="0" cellpadding="0" border="0">
                                              <tr>
                                                  <td align="center" style="font-family:'Roboto', Arial, Helvetica, sans-serif;font-size: 13px;color: #dadada;line-height: 20px;text-decoration: underline"><a href="{SITE_ADDRESS}/shop" target="_blank" style="color: #dadada">Shop</a></td>
                                                  <td width="20" align="center" style="font-family:'Roboto', Arial, Helvetica, sans-serif;font-size: 13px;color: #dadada;line-height: 20px;">|</td>
                                                  <td align="center" style="font-family:'Roboto', Arial, Helvetica, sans-serif;font-size: 13px;color: #dadada;line-height: 20px;text-decoration: underline"><a href="{SITE_ADDRESS}" target="_blank" style="color: #dadada">Home</a></td>
                                                  <td width="20" align="center" style="font-family:'Roboto', Arial, Helvetica, sans-serif;font-size: 13px;color: #dadada;line-height: 20px;">|</td>
                                                  <td align="center" style="font-family:'Roboto', Arial, Helvetica, sans-serif;font-size: 13px;color: #dadada;line-height: 20px;text-decoration: underline"><a href="{SITE_ADDRESS}/contact" target="_blank" style="color: #dadada">Contact Us</a></td>
                                                  </tr>
                                              </table>
                                              
                                              </td></tr>
                                          <tr><td height="40">&nbsp;</td></tr> 
                                        </table>
                                        
                                        </td></tr>
                                </table>
                                
                              
                                
                                </td></tr>
                            </table>
                            
                            </td></tr>
               </table>
             
             </td>
               </tr>
        </table>
    </body></html>
