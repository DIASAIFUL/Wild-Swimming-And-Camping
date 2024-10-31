
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

    <!-- Reviews section starts -->



    <div class="testimonials">
        <div class="inner">


            <button class="btn" onclick="openModal()">GIVE YOUR REVIEW</button>
            <br><br>

            <div class="border"></div>
            <h1>Customer Reviews</h1>
            <br><br>

            <div class="row">
                <div class="col">
                    <div class="testimonial">
                        <img src="images/r1.jpg" alt="">
                        <div class="name">Full name</div>
                        <div class="email">email</div>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="testimonial">
                        <img src="images/r2.jpg" alt="">
                        <div class="name">Full name</div>
                        <div class="email">email</div>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="testimonial">
                        <img src="images/r3.jpg" alt="">
                        <div class="name">Full name</div>
                        <div class="email">email</div>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="testimonial">
                        <img src="images/r1.jpg" alt="">
                        <div class="name">Full name</div>
                        <div class="email">email</div>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>



    <div class="review_popup" id="review_popup">

        <span onclick="closeModal()">&times;</span>
        <form action="#" method="POST">

            <div>
                <label>Name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email">
            </div>

            <div>
                <label>Image</label>
                <input type="file" name="image" accept="image/jpg, image/jpeg, image/png">
            </div>
            <div>
                <label>Review</label>
                <textarea name="review" id="review" cols="30" rows="10"></textarea>
            </div>
            <div>
                <input type="submit" value="Submit" class="review_btn">
            </div>
            
        </form>
    </div>

    <!-- Reviews section end -->


    <script>
    function openModal() {
        const list = document.getElementById("review_popup").classList;
        list.add("show_review");
    }

    function closeModal() {
        const list = document.getElementById("review_popup").classList;
        list.remove("show_review");
    }

    // var c = document.querySelector("span");
    // c.addEventlistener("click", closeModal)
    </script>


    <!-- footer section starts  -->
    <?php include('includes/footer.php'); ?>

    <!-- footer section ends -->


    <!--custom js file link -->
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



</body>

</html>