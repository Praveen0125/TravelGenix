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

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<div class="heading" style="background:url(images/voyage.png) no-repeat">
   <h1>Voyage-AI</h1>
</div>

<section class="voyage">

   <div class="content">
      <h2 style="font-size:50px; text-align: center;">Wanderwise - Let AI plan your dream vacation!</h2><br><br>
      <p class="journey">Journeys are the midwives of thought. Few places are more conducive to internal conversations than a moving plane, ship, or train. There’s something about the landscape changing, the rhythmic clack of the wheels, and the very fact of motion that stimulates the mind and gives birth to new perspectives and dreams. Travel with TravelGenix, where every journey is a conversation with the soul.
      </p><br><br>

      <!-- index.html -->
      <form class="book-form"> 
      <div class="flex">
         <div class="inputBox">
            <span style="font-size:20px">Enter a place you like, or a place you have visited earlier :</span><br><br><br>
            <input type="text" id="inputData" placeholder="Enter here" style="font-size:17px; border-style: solid; padding:5px 250px 5px 10px; border-radius:15px">
         </div>
         <br><button id="predictButton" class="btn" style="border-radius:18px">Predict</button><br><br>
      </form>
      <div id="result">
         <p style="padding:20px; font-size:1.5rem">
         TTop 5 similar travel places like Angkor Wat are:<br><br>


Name: Hampi Virupaksha Temple<br>
Place: Hampi, Karnataka<br>
Duration: Half Day<br>
Amount: Rs 1000<br><br>


Name: Baramura Caves (Temple Caves)<br>
Place: Meghalaya<br>
Duration: Half Day<br>
Amount: Rs 1000<br><br>


Name: Igatpuri Caves (Maharashtra)<br>
Place: Igatpuri, Maharashtra<br>
Duration: Half Day<br>
Amount: Rs 1000<br><br>


Name: Golden Temple<br>
Place: Amritsar, Punjab<br>
Duration: 1 Day<br>
Amount: Rs 2000<br><br>
         </p>
      </div>

   </div>
</section>

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

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>