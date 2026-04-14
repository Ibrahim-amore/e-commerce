<?php
include 'config.php';
$faq_id=$_GET['id'];
$sql=" select * from faq where id ='$faq_id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$question = $row['question'];
$answer = $row['answer'];
$list = $row['list'];

if(isset($_POST['update-faq'])){
$list_u =$_POST['list'];
 $question_u =$_POST['question'];
 $answer_u =$_POST['answer'];
 $list_u = mysqli_real_escape_string($db, $list_u);
 $question_u = mysqli_real_escape_string($db, $question_u);
 $answer_u = mysqli_real_escape_string($db, $answer_u);
    $sql91= "UPDATE `faq` SET  question ='$question_u',answer='$answer_u',list='$list_u' WHERE id='$faq_id'";
    $result91= $db->query($sql91);
    
    if($result91){
       header('location:faq?faq_status=Updated');
    } else {
        echo "<script> alert('error')</script>";
    }

}
?>



