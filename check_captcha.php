<?php 
session_start();
$ans= $_POST['field'];
if( $ans==$_SESSION['answer'])
{header('location: register.php');}
else{
    
    header('location: captcha_Verification.php');
    $_SESSION['msg2']="Wrong Answer";
}

?>
