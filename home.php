<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TravelGenix - Your Personalized Travel Companion</title>
   <link rel="shortcut icon" href="images/logo-bg.png" type="image/x-icon" />
    <script
      src="https://kit.fontawesome.com/6b5c9b2ffd.js"
      crossorigin="anonymous"
    ></script>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">TravelGenix</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="tips.php">travel tips</a>
      <a href="voyage.php">VoyageAI</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars" style="color:black;"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/hidden.jpg) no-repeat">
            <div class="content">
               <span>Ignite Your Journey, Discover Your World.</span>
               <h3>Unfold the Earth’s Hidden Gems</h3><br><br>
               &nbsp;&nbsp;<a href="package.php" class="btn">discover more</a>&nbsp;&nbsp;
               <a href="voyage.php" class="btn">try voyage-AI</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/rafting.jpg) no-repeat">
            <div class="content">
               <span>Ignite Your Journey, Discover Your World.</span>
               <h3>Embrace Adventures, Collect Memories</h3><br><br>
               &nbsp;&nbsp;<a href="package.php" class="btn">discover more</a>&nbsp;&nbsp;
               <a href="voyage.php" class="btn">try voyage-AI</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/forts1.jpg) no-repeat">
            <div class="content">
               <span>Ignite Your Journey, Discover Your World.</span>
               <h3>Seek Stories, Not Just Sights</h3><br><br>
               &nbsp;&nbsp;<a href="package.php" class="btn">discover more</a>&nbsp;&nbsp;
               <a href="voyage.php" class="btn">try voyage-AI</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->
<br><br><br><br>
<section class="services" style="background-image:url(images/bg4.jpg); background-position: center;
background-repeat: no-repeat;
background-size: cover;">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>sailing adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>thrilling treks</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road biking</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>serene camping </h3>
      </div>
      
      <div class="box">
         <img src="images/river.png" alt="">
         <h3>river rafting</h3>
      </div>

      <div class="box">
         <img src="images/diver.png" alt="">
         <h3>Daring Dives</h3>
      </div>

      <div class="box">
         <img src="images/cycling.png" alt="">
         <h3>Cycling Escapades</h3>
      </div>

      <div class="box">
         <img src="images/safari.png" alt="">
         <h3>Wildlife Safaris</h3>
      </div>

      <div class="box">
         <img src="images/balloon.png" alt="">
         <h3>Hot Air Ballooning</h3>
      </div>

      <div class="box">
         <img src="images/gazing.png" alt="">
         <h3>Astronomy Nights</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/logo.png" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>TravelGenix is your innovative travel partner, powered by the pioneering voyageAI technology to craft personalized journeys that resonate with your unique spirit of adventure. We’re dedicated to transforming travel into a seamless and immersive experience, where every destination is a reflection of your individuality. Our commitment to sustainable and responsible exploration ensures that we not only create unforgettable memories for you but also foster a community of mindful travelers. With TravelGenix, embark on a voyage where the world is your canvas and every trip an opportunity to ignite your story.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

   <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Adventure Quest</h3>
            <p>For thrill-seekers, featuring activities like rock climbing, zip-lining, and bungee jumping</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/beach.jpg" alt="">
         </div>
         <div class="content">
            <h3>Beach Bliss</h3>
            <p>Sun, sand, and surf await in this package, perfect for those looking to relax or enjoy water sports</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/mount.jpg" alt="">
         </div>
         <div class="content">
            <h3>Mountain Majesty</h3>
            <p>Explore the heights with hiking, mountain biking, and ski trips in the world’s most majestic ranges</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer" style="background-image:url(images/bg1.jpg); background-position: center;
background-repeat: no-repeat;
background-size: cover;">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>Embark on the adventure of a lifetime with TravelGenix and seize the moment—enjoy 50% off on our travel packages, because the world is too beautiful to see just half of it!</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> contact@travelgenix.com </a>
         <a href="#"> <i class="fas fa-map"></i> bhopal, india - 462010 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit">created with &#10084; by <span>praveen</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>