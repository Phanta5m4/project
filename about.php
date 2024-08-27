<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/CookieFusionFactoryLogo.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Our pastry chefs are culinary artists, constantly experimenting and pushing boundaries to create cookies that are not just delicious, but unforgettable. From classic chocolate chip with a twist to exotic flavors that transport you to far-off lands, each cookie is a masterpiece of flavor fusion. But it's not just about the taste. At CookieFusionFactory, we take pride in using only the finest ingredients, ensuring that every cookie is made with love and care. Whether you're indulging in a treat for yourself or looking for the perfect gift, CookieFusionFactory promises a cookie experience like no other. Come taste the magic at CookieFusionFactory, where every cookie tells a story and every bite is a moment of pure joy.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p><i>"I couldn't resist trying the almond croissant, and it was pure bliss! The pastry was incredibly flaky, and the almond filling was just the right amount of sweet. Pairing it with a cappuccino made for the perfect morning treat."</i></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p><i>"The chocolate éclair at this bakery is simply divine! The pastry shell was light and airy, while the chocolate cream inside was rich and velvety. It's definitely a must-try for any chocolate lover."</i></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lucia</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p><i>"I ordered a box of assorted pastries for a family gathering, and they were a hit! Each pastry, from the fruit tarts to the custard-filled puffs, tasted so fresh and delicious. Everyone asked where they were from!"</i></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Adam</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p><i>"The lemon tart here strikes the perfect balance between tangy and sweet. The crust was crisp, and the lemon curd was refreshingly citrusy without being overpowering. It's now my go-to treat whenever I visit."</i></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Helen</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p><i>"Having lived in Paris for several years, I'm always skeptical about finding good pastries elsewhere. This bakery, however, surprised me with its authenticity. The pain au chocolat transported me back to the streets of Paris — it was that good!"</i></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Peter</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p><i>"I'm a pastry aficionado, and I have to say, the quality at this bakery is exceptional. The pastries are always fresh, beautifully presented, and each bite is filled with layers of flavor. It's clear they take pride in their craft."</i></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Auriel</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">grand chiefs</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Chief - Nicolas Zaccagni</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Master Chief - Zhan Pierre</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Chief - Nicollo Lloris</h3>
      </div>

   </div>

</section>
<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>