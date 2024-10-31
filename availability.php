<!DOCTYPE html>
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

    <!-- form section starts  -->

    <section class="form-container">

        <div>

            <form action="" method="post">
                <h3>check Availablity</h3><br><br>

                <label class="availavle_lable">Arrival date</label>
                <input type="date" name="arrival_date" required class="box">
                <label class="availavle_lable">Departure date</label>
                <input type="date" name="Departure_date" required class="box">
                <label class="availavle_lable">Pitch Type</label><br>
                <select id="pitch-type" name="pitch-type">
                    <option value="tent">Tent Pitch</option>
                    <option value="caravan">Touring Caravan Pitch</option>
                    <option value="motorhome">Motorhome Pitch</option>
                </select>

                <br><br>
                <input type="submit" value="Check Availability" class="btn" name="submit">


            </form>
        </div>

    </section>





    <!-- form section ends -->




    <section class="post" id="Post">

        <h1 class="heading"> Upcomming camping </h1>

        <div class="box-container">
<?php
        include 'config.php';

$sel= "SELECT * FROM upcomming_camping";
$query=$conn-> query($sel);

while($row=$query->fetch_assoc()){

?>

            <div class="box">

                <img src="uploaded_img/<?php echo $row['image']; ?>" alt="">
                <h3><?php echo $row['title']; ?></h3>


                <p><?php echo $row['details']; ?></p>


                <br><br>

                <div class="icon">
                    <p><i class="fas fa-clock"></i><?php echo $row['date_time'];?></p>

                    <a href="#" class="btn">BOOK NOW</a>

                </div>
            </div>
     <?php
         }
     ?>
        </div>
    </section>


    <!-- footer section starts  -->
    <?php include('includes/footer.php'); ?>

    <!-- footer section ends -->


    <!--custom js file link -->
    <script src="js/script.js"></script>


</body>

</html>