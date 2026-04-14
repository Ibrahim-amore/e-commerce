<?php
include '../connection/config.php';
?>
<?php
$faq_msg="";
$brand_create_msg ="";
$cat_create_msg ="";
$tender_msg="";
$cat_create_msg2 = "";
$attr_create_msg="";
//BRAND
if(isset($_POST['submit_brand'])){
$brand_name = $_POST['brand_name'];

$testimonial_image = time().'_'. $_FILES['attachment5']['name'];

$target= 'brand_image/' . $testimonial_image;
$image_upload = move_uploaded_file($_FILES['attachment5']['tmp_name'], $target);

$brand_name = mysqli_real_escape_string($db, $brand_name);

$sqlyty = "insert into brand(brand_name,image)values('$brand_name','$testimonial_image')";
$valtr = $db->query($sqlyty);

if($valtr){

$brand_create_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>Brand Logo added successfully</div> ";  



}
else{
$package_msg = "<div class='alert alert-danger' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-frown-o me-2' aria-hidden='true'></i>Error Has occured:pls try again!</div>";   

}
}
//CREATE ATTRIBUTE 

if(isset($_POST['add_attr'])){
$attr_name = $_POST['attr_name'];
$attr_name = mysqli_real_escape_string($db, $attr_name);

$sqa = "insert into attribute(attr_name)values('$attr_name')";
$va = $db->query($sqa);

if($va){

$attr_create_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>Atrribute added successfully</div> ";  
}
else{
$attr_create_msg = "<div class='alert alert-danger' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-frown-o me-2' aria-hidden='true'></i>Error Has occured:pls try again!</div>";   

}
}
//CATEGORY
if(isset($_POST['submit_cat'])){
$cat_name = $_POST['cat_name'];

$testimonial_image6 = time().'_'. $_FILES['attachment6']['name'];

$target= 'category_image/' . $testimonial_image6;
$image_upload = move_uploaded_file($_FILES['attachment6']['tmp_name'], $target);

$cat_name = mysqli_real_escape_string($db, $cat_name);

$sqlyty = "insert into category(cat_name,image)values('$cat_name','$testimonial_image6')";
$valtr = $db->query($sqlyty);

if($valtr){

$cat_create_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>Category added successfully</div> ";  



}
else{
$cat_create_msg2 = "<div class='alert alert-danger' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-frown-o me-2' aria-hidden='true'></i>Error Has occured:pls try again!</div>";   

}
}

// Testimonial
$msg="";
if(isset($_POST['submit-test'])){
$comment = $_POST['comment'];
$name_1 = $_POST['name'];
$role_1 = $_POST['role'];

$comment = mysqli_real_escape_string($db, $comment);
$name_1 = mysqli_real_escape_string($db, $name_1);
$role_1 = mysqli_real_escape_string($db, $role_1);

$testimonial_image = time().'_'. $_FILES['attachment90']['name'];
$target= 'Testimonial_image/' . $testimonial_image;
$image_upload = move_uploaded_file($_FILES['attachment90']['tmp_name'], $target);

$sql = "insert into testimonial(name,role,image,comment)values('$name_1','$role_1','$testimonial_image','$comment')";
$val = $db->query($sql);

if($val){

$faq_msg = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
          <i class='mdi mdi-check-all me-2'></i>
          Testimonial uploaded Successfully
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";


}
else{
$faq_msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          <i class='mdi mdi-block-helper me-2'></i>
          Failed to upload testimonial
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
}
}





//faq
if(isset($_POST['submit-faq'])){
$question = $_POST['question'];
$answer = $_POST['answer'];


$question = mysqli_real_escape_string($db, $question);
$answer = mysqli_real_escape_string($db, $answer);


$sql = "insert into faq(answer,question)values('$answer','$question')";
$val1 = $db->query($sql);

if($val1){

$faq_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>Your response has been saved successfully</div> ";  



}
else{
$faq_msg = "<div class='alert alert-danger' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-frown-o me-2' aria-hidden='true'></i>Error Has occured:pls try again!</div>";   

}
}
//COUPON
$v_create_msg ="";
$v_create_msg1 ="";
if(isset($_POST['submit_coupon'])){
$code = $_POST['code'];
$value = $_POST['value'];


$code = mysqli_real_escape_string($db, $code);
$value = mysqli_real_escape_string($db, $value);
$sql = "insert into voucher(code,value)values('$code','$value')";
$val1 = $db->query($sql);

if($val1){

$v_create_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>Coupon Created successfully</div> ";  



}
else{
$v_create_msg1 = "<div class='alert alert-danger' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-frown-o me-2' aria-hidden='true'></i>Error Has occured:pls try again!</div>";   

}
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['testimonial-image'])){

$testimonial_image = time().'_'. $_FILES['attachment']['name'];

$target= 'testimonial_image/' . $testimonial_image;
$image_upload = move_uploaded_file($_FILES['attachment']['tmp_name'], $target);

$sql = "insert into testimonial(image)values('$testimonial_image')";
$val7 = $db->query($sql);

if($val7){

$msg = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
          <i class='mdi mdi-check-all me-2'></i>
          TESTIMONIAL IMAGE added successfully
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";


}
else{
$msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          <i class='mdi mdi-block-helper me-2'></i>
          Failed to add Image
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";

}
}
// Coin
if(isset($_POST['submit-tender'])){
$name = $_POST['name'];
$category = $_POST['category'];
$message = $_POST['message'];
$deadline = $_POST['deadline'];
$company = $_POST['company'];
$sector = $_POST['sector'];
$document_image = time().'_'. $_FILES['attachment2']['name'];
$target= 'tender_document/' . $document_image;
$image_upload = move_uploaded_file($_FILES['attachment2']['tmp_name'], $target);
$name = mysqli_real_escape_string($db, $name);
$category = mysqli_real_escape_string($db, $category);
$message = mysqli_real_escape_string($db, $message);
$company = mysqli_real_escape_string($db, $company);
$deadline = mysqli_real_escape_string($db, $deadline);
$sector = mysqli_real_escape_string($db, $sector);
$sql87 = "insert into tender(name,category,message,deadline,company,document,sector)values('$name','$category','$message','$deadline','$company','$document_image','$sector')";
$val87 = $db->query($sql87);

if($val87){

$tender_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>Your response has been saved successfully</div>";


}
else{
$tender_msg = "<div class='alert alert-danger' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-frown-o me-2' aria-hidden='true'></i>Error Has occured:pls try again!</div>";
}
}
// PRODUCT CREATION
$p_msg = "";
$p_msg2="";
$d_msg ="";
if(isset($_POST['submit_product'])){
   $pn_ =$_POST['pn'];
 $des_ =$_POST['des'];
 $mt_ =$_POST['mt'];
 $pt_ =$_POST['pt'];
 $kw_ =$_POST['kw'];
 $m_ =$_POST['m'];
 $price_ =$_POST['price'];
 $category_ =$_POST['category'];
 $qty_ =$_POST['qty'];
 $w_ =$_POST['w'];
 $brand_ =$_POST['brand'];
 $status_ =$_POST['status'];
 $discount_ =$_POST['discount'];
 $condition =$_POST['condition'];
 $dimension_ =$_POST['dimension'];
 $v_link =$_POST['v_link'];
 //$color =$_POST['color'];
 //$length =$_POST['length'];
   
 
 $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$pcode = substr( str_shuffle( $chars ), 0, 10 );
 
 $pn_ = mysqli_real_escape_string($db, $pn_);
 $des_ = mysqli_real_escape_string($db, $des_);
 $mt_ = mysqli_real_escape_string($db, $mt_);
 $pt_ = mysqli_real_escape_string($db, $pt_);
 $kw_ = mysqli_real_escape_string($db, $kw_);
 $m_ = mysqli_real_escape_string($db, $m_);
 $price_ = mysqli_real_escape_string($db, $price_);
 $category_ = mysqli_real_escape_string($db, $category_);
 $qty_ = mysqli_real_escape_string($db, $qty_);
 $w_ = mysqli_real_escape_string($db, $w_);
 $brand_ = mysqli_real_escape_string($db, $brand_);
 $status_ = mysqli_real_escape_string($db, $status_);
 $discount_ = mysqli_real_escape_string($db, $discount_);
 $dimension_ = mysqli_real_escape_string($db, $dimension_);
 $condition = mysqli_real_escape_string($db, $condition);
 $v_link = mysqli_real_escape_string($db, $v_link);
 //$color = mysqli_real_escape_string($db, $color);
 //$length = mysqli_real_escape_string($db, $length);
$p_image = time().'_'. $_FILES['attachment11']['name'];
$target= 'product_image/' . $p_image;
$image_upload = move_uploaded_file($_FILES['attachment11']['tmp_name'], $target);
//image2
$p_image1 = time().'_'. $_FILES['attachment12']['name'];
$target= 'product_image1/' . $p_image1;
$image_upload = move_uploaded_file($_FILES['attachment12']['tmp_name'], $target);
//image3
$p_image2 = time().'_'. $_FILES['attachment13']['name'];
$target= 'product_image2/' . $p_image2;
$image_upload = move_uploaded_file($_FILES['attachment13']['tmp_name'], $target);
//image4
$p_image3 = time().'_'. $_FILES['attachment14']['name'];
$target= 'product_image3/' . $p_image3;
$image_upload = move_uploaded_file($_FILES['attachment14']['tmp_name'], $target);
  
$sql871 = "insert into products(pn,des,mt,pt,kw,m,price,qty,w,brand,category,img,img1,img2,img3,status,discount,dimension,product_code,cond,video_link)values('$pn_','$des_','$mt_','$pt_','$kw_','$m_','$price_','$qty_','$w_','$brand_','$category_','$p_image','$p_image1','$p_image2','$p_image3','$status_','$discount_','$dimension_','$pcode','$condition','$v_link')";
$val871 = $db->query($sql871);

if($val871){

$p_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>Product added successfully</div>";


}
else{
$p_msg2 = "<div class='alert alert-danger' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-frown-o me-2' aria-hidden='true'></i>Error Has occured:pls try again!</div>";
}   

 



}
/// WHOLESALE






if(isset($_POST['submit_wholesale'])){
   $n =$_POST['n'];
 $c =$_POST['c'];
 $d =$_POST['d'];
 $q =$_POST['q'];
 $p =$_POST['p'];

 
//$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
//$pcode = substr( str_shuffle( $chars ), 0, 10 );
 
 $n = mysqli_real_escape_string($db, $n);
 $c = mysqli_real_escape_string($db, $c);
 $d = mysqli_real_escape_string($db, $d);
 $q = mysqli_real_escape_string($db, $q);
 $p = mysqli_real_escape_string($db, $p);
// $i = mysqli_real_escape_string($db, $i);
 
 
$i = time().'_'. $_FILES['i']['name'];
$target= 'wholesale_image/' . $i;
$image_upload = move_uploaded_file($_FILES['i']['tmp_name'], $target);

  
$sql871 = "insert into wholesale(n,c,d,q,p,i)values('$n','$c','$d','$q','$p','$i')";
$val871 = $db->query($sql871);

if($val871){
$p_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>Delivery fee added successfully</div>";
}
else{
$p_msg2 = "<div class='alert alert-danger' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-frown-o me-2' aria-hidden='true'></i>Error Has occured:pls try again!</div>";
}   

}

if(isset($_POST['btn_delivery'])){
 $state =$_POST['state'];
 $fees =$_POST['fees'];
 
//$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
//$pcode = substr( str_shuffle( $chars ), 0, 10 );
 
 $state = mysqli_real_escape_string($db, $state);
 $fees = mysqli_real_escape_string($db, $fees);
 

$sql871 = "insert into delivery(state,fees)values('$state','$fees')";
$val871 = $db->query($sql871);

if($val871){
$d_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>Product added successfully</div>";
}
else{
$d_msg = "<div class='alert alert-danger' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-frown-o me-2' aria-hidden='true'></i>Error Has occured:pls try again!</div>";
}   

}









?>

