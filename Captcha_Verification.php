
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild Swimming and camping</title>

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

     <section class="captcha">

     <?php
    session_start();
    $a = rand(0, 20);
    $b = rand(1, 9);
    $_SESSION['answer'] = ($a + $b);
    ?>
    <form method="POST" action="check_captcha.php">
        <div class="captcha-form">
            <p>Are You Human ?</p>
            <div class="error"> 

            <div class="captcha-madel">
                <div class=""><?php echo '<p>' . $a . '+' . $b . '= </p>' ?></div>
                <div class=""> <input class="" type="number" name="field" required> </div>
            </div>
            <div class="button-captcha"> <button class="button" name="submit" type="submit">Submit</button> </div>
        </div>
    </form>
     </section>

</body>

</html>