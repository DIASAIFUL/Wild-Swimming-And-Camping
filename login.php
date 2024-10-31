<?php
session_start();
require 'config.php';

error_reporting(0);

$msg='';

if (isset($_SESSION["locked"]))
{
    $difference = time() - $_SESSION["locked"];
    if ($difference > 30)
    {
        unset($_SESSION["locked"]);
        unset($_SESSION["login_attempts"]);
    }
}

if (isset($_SESSION['username'])) {
   header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
   $time=time()-600;
	$ip_address=getIpAddr();
	$check_login_row=mysqli_fetch_assoc(mysqli_query($conn,"select count(*) as total_count from login_attempt where try_time>$time and ip_address='$ip_address'"));
	$total_count=$check_login_row['total_count'];
	if($total_count==3){
		$msg="To many failed login attempts.Login locked for 10 minutes";

	}else{
      $em = $_POST['email'];
      $pass = md5($_POST['password']);
      $login_check= "SELECT * FROM users WHERE email='$em' AND password='$pass'";
      $result=mysqli_query($conn,$login_check);
      //echo $num;
         if ($result->num_rows > 0) {

            $row = mysqli_fetch_assoc($result);
            mysqli_query($conn,"delete from login_attempt where ip_address='$ip_address'");

            $_SESSION['username'] = $row['username'];
            header("Location: welcome.php");

         }else{
            $total_count++;
			$rem_attm=3-$total_count;
			if($rem_attm==0){
				$msg="To many failed login attempts. Please login after 10 minutes";
			}else{
				$msg="Please enter valid login details.<br/>$rem_attm attempts remaining";
			}
			$try_time=time();
			mysqli_query($conn,"insert into login_attempt(ip_address,try_time) values('$ip_address','$try_time')");
			
            
         }
      }  

}

function getIpAddr(){
   if (!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ipAddr=$_SERVER['HTTP_CLIENT_IP'];
   }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ipAddr=$_SERVER['HTTP_X_FORWARDED_FOR'];
   }else{
      $ipAddr=$_SERVER['REMOTE_ADDR'];
   }
  return $ipAddr;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild Swimming and camping  </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<?php include('includes/header.php'); ?>

<!-- header section ends -->

<section class="form-container">

   <div>

      <form action="" method="post">
         <h3>Login Now</h3><br><br>

         <div class="error"> 
         <?php 
            echo $msg;
         ?>
         
         </div><br>
         <input type="email" name="email" required placeholder="Enter your email"  class="box"  >
         <input type="password" name="password" required placeholder="Enter your password"  class="box" >

         <?php
         
         if ($_SESSION["login_attempts"] > 2)
         {
            $_SESSION["locked"] = time();
            echo "Please wait login after 10 minutes";
         }
         else
         {
         ?>
         <input type="submit" value="Login now" class="btn" name="submit">
         <?php
         }
         ?>
         <p>don't have an account?</p>
         <a href="Captcha_Verification.php" class="register_btn" >Register Now</a>
         
      </form>
   </div>

</section>

<!-- footer section starts  -->
<?php include('includes/footer.php'); ?>

<!-- footer section ends -->


<!--custom js file link -->
<script src="js/script.js"></script>

</body>
</html>