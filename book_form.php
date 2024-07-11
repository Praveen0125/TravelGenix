<?php
   $connection = mysqli_connect('localhost','root','','book_db');
   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      if (empty($name) || empty($phone) || empty($email) || empty($location) || empty($guests) || empty($arrivals) || empty($leaving)) {
         echo "<script>alert('Please fill in all the required fields.');</script>";
         echo "<script>window.location.href = 'home.php';</script>";
         exit();
     }
     
     // Sanitize the form data
     $name = filter_var($name, FILTER_SANITIZE_STRING);
     $phone = filter_var($phone, FILTER_SANITIZE_STRING);
     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
     $guests = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
     $address = filter_var($gender, FILTER_SANITIZE_STRING);
     $location = filter_var($remarks, FILTER_SANITIZE_STRING);
     $arrivals = filter_var($arrivals, FILTER_SANITIZE_NUMBER_INT);
     $leaving = filter_var($leaving, FILTER_SANITIZE_NUMBER_INT);

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) 
               values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";

      if ($connection->query($request) == true) {
         echo "<script>window.location.href = 'thanks.php';</script>";
      }
      else {
         echo "Error : $request <br> $connection->error";
      }

   }else{
      echo 'something went wrong please try again!';
   }
?>