<?php
// session_start();

$ip_address=$_SERVER['REMOTE_ADDR'];


include 'config.php';
mysqli_query($conn, "INSERT INTO view_counter VALUES (NULL, '".$ip_address."')");
$Counter_sql=mysqli_query($conn, "SELECT COUNT(Id) as total FROM view_counter");
$Counter=mysqli_fetch_object($Counter_sql);

?>

<section class="footer">

<div class="box-container">

    <div class="box">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo hic eum veniam aut nisi. Libero autem nemo amet recusandae eveniet?</p>
    </div>
    <div class="box">
        <h3>Contact Us</h3>
        <a href="#">Email: 123@gmail.com</a>
        <a href="#">CAll Us: +4407919191791</a>
        <a href="#">Address: 152-160 City Road, London</a>
        
    </div>
    <div class="box">
        <h3>quick links</h3>
        <a href="Home.php">home</a>
        <a href="workshop.php">information</a>
        <a href="product_gallery.php">contact</a>
        <a href="contact.php">contact</a>
    
    </div>
    <div class="box">
        <h3>follow us</h3>
        <a href="https://workspace.google.com/marketplace/app/url_shortener/640322864632"><i class="fab fa-facebook-f"></i> facebook</a>
         <a href="#"><i class="fab fa-twitter"></i> twitter</a>
         <a href="#"><i class="fab fa-instagram"></i>instagram</a>
         <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
         
    </div>

</div>


<h1 class="credit"><b>Number of Visiters : <?php echo $Counter->total;?></b>
<br><br>
<div><b>RSS FEED :  </b><a href="rss.app" class="rss"><i class="fa fa-rss"></i></a></div>
<br><br>
<p>You Are on - <?php echo ucwords( str_ireplace(array('-', '.php'), array(' ', ''), basename($_SERVER['PHP_SELF']) ) ); ?> Page</p><br><br>
<p> created by <span> Md Saiful Islam </span> | all rights reserved! </p>
</h1>


</section>