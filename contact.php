<?php

session_start();
require 'config.php';

error_reporting(0);

if(isset($_POST["submit"]))
{
    
    $nam = $_POST["name"];
    $eml = $_POST["email"];
    $num = $_POST["number"];
    $mg = $_POST["message"];
    
    $sql = "INSERT INTO contact ( `name`, `email`, `number`, `message`) VALUES ('$nam','$eml','$num','$mg' )";
    $result = mysqli_query($conn, $sql) or die("Query Failed!");
    
    
        if($result)
				{
				echo "Thanks you are getting touch";
				}
				else
				{
				echo "Fill all the table first please....";
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

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading">get in touch</h1>

<div class="row">

<iframe class="map"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2438928.2820760976!2d-4.548721739761792!3d53.34744665056764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487d039904e8d5f9%3A0x13da1301f1e12f58!2sDrybeck%20Farm!5e0!3m2!1sen!2sbd!4v1682891277357!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <form action="" method="post">

        <div class="inputBox">
            <input name="name" type="text" required>
            <label>name</label>
        </div>
        <div class="inputBox">
            <input name="email" type="email" required>
            <label>email</label>
        </div>
        <div class="inputBox">
            <input name="number" type="number"  required>
            <label>Phone number</label>
        </div>
        <div class="inputBox">
            <textarea name="message" required  cols="30" rows="10"></textarea>
            <label>message</label>
        </div>

        <div class="inputBox">
                            <input class="checkbox" type="checkbox" required>
                            <label> <a href="https://www.privacypolicygenerator.info/live.php?token=HPoliDEOseGkyxP1jFfstZxsjORwH3FH"
                            class="privacy">Privacy policy</a></label>
                        </div>

        <input type="submit" name="submit" value="send message" class="btn">
       
    </form>

</div>

</section>

<!-- contact section ends -->
<!-- footer section starts  -->
<?php include('includes/footer.php'); ?>

<!-- footer section ends -->


<!--custom js file link -->
<script src="js/script.js"></script>

</body>
</html>