
		<!-- JS here -->
        <script src="js/vendor/jquery-3.6.0.min.js"></script>
        <script data-cfasync="false" src="cloudflare-static/email-decode.min.js">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script>
        $(document).ready(function(){
             $('#show_state').load('state.php').show(); 
        $('#state').change(function(){
           // $('#show_me').append('a');
             var state = $('#state').val();
              //var debit = $('#description').val();
           // $.post('action.php', {phone: form.phone.value }, function(result){
                 $.post('state.php', {state: state }, function(result){
                $('#show_state').html(result).show();
            });
        });
         $(document).on('change','#file',function(){
          var property = document.getElementById("file").files[0]
          var image_name = property.name;
          var image_size = property.size;
          var image_extension = image_name.split('.').pop().toLowerCase();
          if(jQuery.inArray(image_extension,['pdf','jpg','png','gif'])== -1){
              alert('invalid File type');
          }
          else if(image_size > 5000000){
              alert('image size is too large');
              
          }else{
              var form_data = new FormData();
              form_data.append("file", property);
              
              $.ajax({
                  url:"output.php",
                  method:"POST",
                  data:form_data,
                  contentType:false,
                  cache:false,
                  processData:false,
                  beforeSend:function(){
                      $('#show_output').html("<label class='alert alert-success' role='alert'><i class='fa fa-upload me-2' aria-hidden='true'></i> File uplading...</label>");
                     //$('#show_output').html("<img src'assets/images/icon/33.gif'>");
                  },
                  success:function(data){
                      $('#show_output').html(data);
                      setTimeout(function () {
                            $('#show_output').fadeOut('slow');
                        },5000);
                      //location.reload(true);
                  }
              })
          }
          
      });        
       $("#form_1").attr("action","pay.php");
        $("input[name=p]").click(function (){
        if($('input[name="p"]:checked').val()=="delivery"){
            $("#form_1").attr("action","free-delivery.php");
            
          //var a=  $("input[name=p]").val();
        }else if($('input[name="p"]:checked').val()=="transfer"){
            $("#form_1").attr("action","transfer.php");
            
        }
        else{
           $("#form_1").attr("action","pay.php"); 
           
        }
        
        });
        
        
        
          
        ///  VERIFY PASSWARD FOR MATCH
            $("#con_pass").on('keyup',function(){    
            var $el = $(this).closest('.ec-login-form');
            var password = $el.find("#password").val();
             var con_pass = $el.find("#con_pass").val();
              if(password !== con_pass){
               $('.invalid-feedback_2').html("<p class='text-danger'>password do not match</p>"); 
               
              }
              else{
                $('.invalid-feedback_2').html("<p class='text-success'>password match!</p>");  
                setTimeout(function () {
                            $('.invalid-feedback_2').fadeOut('slow');
                        },3000);
              }
              
             
            });
            $(".addItemBtn").click(function(e){
               e.preventDefault();
               var $form = $(this).closest(".gt");
               var pid = $form.find(".pid").val();
               var pname = $form.find(".pname").val();
               var pprice = $form.find(".pprice").val();
               var pw = $form.find(".pw").val();
               var s_id = $form.find(".s_id").val();
               var pimg = $form.find(".pimg").val();
               var pcode = $form.find(".pcode").val();
               var qty = $form.find(".qty-input").val();
               //var color = $form.find(".color").val();
               //var size = $form.find(".size").val();
               $.ajax({
                   url:'action.php',
                   method:'post',
                   data:{pid:pid,pname:pname,pprice:pprice,pw:pw,s_id:s_id,pimg:pimg,pcode:pcode,qty:qty},
                  beforeSend:function(){
                      $('#btn_cart').html("<span class='spinner-border spinner-border-sm me-2' role='status' aria-hidden='true'></span> Processing...");
                 }, 
                   success:function(response){
                       $("#message").fadeIn().html(response);
                        $('#btn_cart').html("Add To Cart");
                       setTimeout(function () {
                            $('#message').fadeOut('slow');
                        },5000);
                        //window.scrollTo(0,0)
                        load_cart_item_number();
                        load_cart_item_number_1();
                        load_cart_item_number_2();
                        load_cart_item_number_3();
                   }
                   
               });
           });
          
           load_cart_item_number();
           function load_cart_item_number(){
               
               $.ajax({
                   url:'action.php',
                   method:'get',
                   data:{cartItem:"cart_item"},
                   success:function(response){
                       $("#cart-item").html(response);
                   }
                   
               });
           }
           load_cart_item_number_1();
           function load_cart_item_number_1(){
               
               $.ajax({
                   url:'action.php',
                   method:'get',
                   data:{cartItem:"cart_item"},
                   success:function(response){
                       $("#cart_item").html(response);
                   }
                   
               });
           }
           load_cart_item_number_2();
           function load_cart_item_number_2(){
               
               $.ajax({
                   url:'action.php',
                   method:'get',
                   data:{cartItem:"cart_item"},
                   success:function(response){
                       $("#cart_item2").html(response);
                   }
                   
               });
           }
           load_cart_item_number_3();
           function load_cart_item_number_3(){
               
               $.ajax({
                   url:'cart_api.php',
                   method:'get',
                   data:{cartItem_1:"cart_item"},
                   success:function(response){
                       $("#cart_item3").html(response);
                   }
                   
               });
           }
           //update price
           $(".itemQty").on('change',function(){    
            var $el = $(this).closest('.num-block');
            var idc = $el.find(".idc").val();
             var pprice = $el.find(".pprice").val();
             var s_id = $el.find(".ssn_id").val();
              var qtyy = $el.find(".itemQty").val();
              //var size = $el.find(".size").val();
              //console.log(qty);
              location.reload(true);
              
              $.ajax({
                  url:'action.php',
                  method:'post',
                  cache:false,
                  data:{qtyy:qtyy,idc:idc,pprice:pprice,s_id:s_id},
                  success:function(response){
                     console.log(response);
                  }
              });
            });
            
            
            
        //FORM REGISTRATION
    $('form#form_reg').submit(function(e){
        e.preventDefault();
      var formData = new FormData(this);

    $.ajax({
        type: 'POST',
        url:'reg_api.php',
        data:formData,
        cache:false,
        processData:false,
        contentType:false,
        beforeSend:function(){
        $('#btn1').html("<span class='spinner-border spinner-border-sm me-2' role='status' aria-hidden='true'></span> Processing...");
                     
                  },
       success:function(response){
                       $("#msg_form_reg").fadeIn().html(response);
                       $('#btn1').html("Register");
                     
                       setTimeout(function () {
                            $('#msg_form_reg').fadeOut('slow');
                        },15000);
                       $("form#form_reg").trigger('reset');  
                       //location.reload(true);
                   }
       
                      });
             }); 
             /// PRICE FILTER 
             
             $('form#form_filter').submit(function(e){
        e.preventDefault();
      var formData = new FormData(this);

    $.ajax({
        type: 'POST',
        url:'price-filter.php',
        data:formData,
        cache:false,
        processData:false,
        contentType:false,
        beforeSend:function(){
        $('#btn_f').html("<span class='spinner-border spinner-border-sm me-2' role='status' aria-hidden='true'></span> fetching...");
                     
                  },
       success:function(response){
                       $(".product_f").fadeIn().html(response);
                       $('#btn_f').html("Filter");
                     
                       
                       //$("form#form_reg").trigger('reset');  
                       //location.reload(true);
                   }
       
                      });
             }); 
             ///filter Ends Here
             
             ///PASSWORD RESET
             
       $('form#form_rec').submit(function(e){
       e.preventDefault();
      var formData = new FormData(this);

    $.ajax({
        type: 'POST',
        url:'reset_api.php',
        data:formData,
        cache:false,
        processData:false,
        contentType:false,
        beforeSend:function(){
                      $('#btn2').html("<span class='spinner-border spinner-border-sm me-2' role='status' aria-hidden='true'></span> Loading...");
                     
                  },
       success:function(response){
                       $("#msg_form_rec").fadeIn().html(response);
                       $('#btn2').html("Send");
                     
                       setTimeout(function () {
                            $('#msg_form_rec').fadeOut('slow');
                        },5000);
                      $("form#form_rec").trigger('reset');  
                       //location.reload(true);
                   }
       
                      });
             }); 
             ///LIVE SEARCH
            /* $('#live_search').keyup(function(){
             var input = $this.val();
             alert(input);
             });*/

           $("#live_search").on('keyup',function(){    
            var $el = $(this).closest('.product__view--search__form');
            var input = $el.find("#live_search").val();
            
            if(input != ""){
               $.ajax({
                   url:'search_api.php',
                   method:'post',
                   data:{input:input},
                   success:function(response){
                       $("#product_grid").html(response);
                       
                   }
                   
                   
               }); 
                
            }
            
            });
            
             $("#live_search1").on('keyup',function(){    
            var $el = $(this).closest('.ggt');
            var input = $el.find("#live_search1").val();
            
            if(input != ""){
               $.ajax({
                   url:'search_api.php',
                   method:'post',
                   data:{input:input},
                   success:function(response){
                       $(".search_result1").html(response);
                        
                   }
                   
               }); 
                
            }
            
            });
            $("#search").on('keyup',function(){    
            var $el = $(this).closest('.kdf');
            var input = $el.find("#search").val();
            
            if(input != ""){
               $.ajax({
                   url:'search_api.php',
                   method:'post',
                   data:{input:input},
                   success:function(response){
                       $(".search_result2").html(response);
                        
                   }
                   
               }); 
                
            }
            
            });
            $("#cat_search").on('change',function(){    
            var $el = $(this).closest('.ggt');
            var input = $el.find("#cat_search").val();
            
            if(input != ""){
               $.ajax({
                   url:'filter_api2.php',
                   method:'post',
                   data:{input:input},
                   success:function(response){
                       $(".cat_search").html(response);
                        
                   }
                   
               }); 
                
            }
            
            });
            $("#cat_search1").on('change',function(){    
            var $el = $(this).closest('.kdf');
            var input = $el.find("#cat_search1").val();
            
            if(input != ""){
               $.ajax({
                   url:'filter_api2.php',
                   method:'post',
                   data:{input:input},
                   success:function(response){
                       $(".cat_search1").html(response);
                        
                   }
                   
               }); 
                
            }
            
            });
            
            
            $("#perpage").on('change',function(){    
            var $el = $(this).closest('.kkk');
            var input = $el.find("#perpage").val();
            
            if(input != ""){
               $.ajax({
                   url:'filter_api3.php',
                   method:'post',
                   data:{input:input},
                   success:function(response){
                       $(".perpage_search").html(response);
                        
                   }
                   
               }); 
                
            }
            
            });
            
            
            ///SUBSCRIBERS
             $('form#sub').submit(function(e){
        e.preventDefault();
         var formData = new FormData(this);
         $.ajax({
        type: 'POST',
        url:'sub_1.php',
        data:formData,
        cache:false,
        processData:false,
        contentType:false,
        beforeSend:function(){
                      $('#btn_subz').html("<span class='spinner-border spinner-border-sm me-2' role='status' aria-hidden='true'></span> Processing...");
                     
                  },
       success:function(response){
                       $("#sub_msg").fadeIn().html(response);
                       $('#btn_subz').html("Subscribe");
                      
                     setTimeout(function () {
                            $('#sub_msg').fadeOut('slow');
                        },7000);
                       
                   }
       
                 });
             }); 
            
         $('form#news').submit(function(e){
        e.preventDefault();
         var formData = new FormData(this);
         $.ajax({
        type: 'POST',
        url:'sub.php',
        data:formData,
        cache:false,
        processData:false,
        contentType:false,
       beforeSend:function(){
                      $('#btn_news').html("<span class='spinner-border spinner-border-sm me-2' role='status' aria-hidden='true'></span> Processing...");
                     
                  },
       success:function(response){
                       $("#msg_sub").fadeIn().html(response);
                       $('#btn_news').html("Subscribe");
                      
                     setTimeout(function () {
                            $('#msg_sub').fadeOut('slow');
                        },7000);
                       
                   }
       
                 });
             }); 
             
             
             
             
            
            /// CONTACT
            $('form#contactform').submit(function(e){
        e.preventDefault();
         var formData = new FormData(this);
         $.ajax({
        type: 'POST',
        url:'m.php',
        data:formData,
        cache:false,
        processData:false,
        contentType:false,
        beforeSend:function(){
        $('#btnc').html("<span class='spinner-border spinner-border-sm me-1' role='status' aria-hidden='true'></span>Sending...");
                     
                  },
       success:function(response){
                       $("#msg_c").fadeIn().html(response);
                       $('#btnc').html("Send");
                     setTimeout(function () {
                            $('#msg_c').fadeOut('slow');
                        },3000);
                       
                   }
       
                 });
             }); 
             
            ////REVIEWS
        $('form#reviews').submit(function(e){
        e.preventDefault();
         var formData = new FormData(this);
         $.ajax({
        type: 'POST',
        url:'review_api.php',
        data:formData,
        cache:false,
        processData:false,
        contentType:false,
        beforeSend:function(){
        $('#btnr').html("<span class='spinner-border spinner-border-sm me-1' role='status' aria-hidden='true'></span>loading...");
                     
                  },
       success:function(response){
                       $("#msg_r").fadeIn().html(response);
                       $('#btnr').html("Submit");
                     setTimeout(function () {
                            $('#msg_r').fadeOut('slow');
                        },3000);
                       
                   }
       
                 });
             }); 
             
    
    });
    </script>
  
 <script 
  src="https://cdn2.woxo.tech/a.js#6374da79c18515e8ff2f98dd" 
  async data-usrc>
</script>
 <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-62d963bf09e6715a"></script>

    </body>
</html>
