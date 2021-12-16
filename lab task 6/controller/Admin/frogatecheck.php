<?php
if($_POST['EnterEmail']){
  
  $email = $_POST['email'];
 
  $emailCheck = "@gmail.com";
  
  
  if(strchr( $email,"@gmail.com")!="@gmail.com"){
    echo 'email formate should be: info@gmail.com <br><a href="../../View/Admin/adminForgatePass.php">try again</a>';
  }
  
  
  
 
  else{
   
    
    header('location: ../../View/index.php');
  }
}

?>