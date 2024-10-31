<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])){
   $username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

   if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration successfully Completed.')</script>";
				header("Location: login.php");
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
    
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

   <form action="" method="post">
      <h3>Register Now</h3>
      <input type="text" name="username" required placeholder="Enter your username"  class="box" value="<?php echo $username; ?>" >

      <input type="email" name="email" required placeholder="Enter your email"   class="box" value="<?php echo $email; ?>" >

      <input type="password" name="password" required placeholder="Enter your password"   class="box" value="<?php echo $_POST['password']; ?>" >

      <input type="password" name="cpassword" required placeholder="Confirm your password"   class="box" value="<?php echo $_POST['cpassword']; ?>" >
      
      <input type="submit" value="Register Now" class="btn" name="submit">
      <p>Already have an account?</p>
      <a href="login.php" class="register_btn">Login Now</a>

		<br>
	  <a href="https://www.privacypolicygenerator.info/live.php?token=HPoliDEOseGkyxP1jFfstZxsjORwH3FH" class="reg_privacy">Privacy policy</a>
   </form>

</section>



<!-- footer section starts  -->
<?php include('includes/footer.php'); ?>

<!-- footer section ends -->

<!--custom js file link -->
<script src="js/script.js"></script>

</body>
</html>