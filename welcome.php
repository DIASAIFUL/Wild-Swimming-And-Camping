<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: Home.php");
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild Swimming and camping </title>

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

    <section class="welcome-container">

        <div class="Welcome_box">
            <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>

            <h2> Thank you for login</h2><br>
            <h2> Please Visit our website and buy somthing.</h2><br>

            <h3> If you want to logout just click logout button</h3>

            <a href="logout.php" class="logout_btn"> logOut</a>
         </div>  
        
    </section>

        
    



    <!-- footer section starts  -->
    <?php include('includes/footer.php'); ?>

<!-- footer section ends -->


<!--custom js file link -->
<script src="js/script.js"></script>

</body>
</html>