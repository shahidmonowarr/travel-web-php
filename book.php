<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<!-- booking section starts  -->

<section class="booking">

   <div class="section-intro">
      <p>Book Now</p>
      <h2>Book Your Trip!</h2>
  </div>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>
<!-- booking section ends -->
<footer class="container footer">
        <div class="footer-content">
            <div class="logo">
                <img src="assets/Logo.jpg" style="width: 380px;" alt="" />
                
            </div>
            <div>
                <p>Company</p>
                <p>About</p>
                <p>Careers</p>
                <p>Mobile</p>
            </div>
            <div class="footer-link">
                <a href="index.html">home</p>
                <a href="about.html">About</p>
                <a href="packages.html">Packages</p>
                <a href="book.php">Book</p>
            </div>
            <div>
                <div class="social-icon">
                    <div><img src="assets/facebook.png" alt="">
                    </div>
                    <div><img src="assets/instagram.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <p>All rights reserved@travel-heaven.com</p>
    </footer>
</body>
</html>