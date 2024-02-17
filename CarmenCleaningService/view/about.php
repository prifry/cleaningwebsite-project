<!DOCTYPE html>
<html>

<head>
  <title>CarmenCleaningService</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">

</head>

<body>
  <div class="topnav" id="myTopnav">
    <a href="../index.php" class="active">Home</a>
    <a href="about.php" id="#about">About</a>
    <a href="contact.php">Contact</a>
    <a href="registry.php">Register</a>
    <a href="login.php">LogIn</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  </div>
  <?php
  // Dynamic image source
  $imageSource = "../util/logo.png";
  ?>
  <img src="<?php echo $imageSource; ?>" alt="Carmen Cleaning products image" class="cleaning">

  <div style="padding-left:16px" class="cleaning-div">
    <h1 id="h1">About Us</h1>

  </div>

  <div class="txt-index">
    <p>Welcome to Carmen House Cleaning, where cleanliness meets expertise! With over two decades of dedicated service in the cleaning industry, we take pride in being a trusted name for all your cleaning needs in the Virginia and DC area.
      Our journey in the business began over 20 years ago, driven by a passion for creating a clean and inviting spaces for our valued customers. Over the years, we have honed our skills, perfected our techniques, and built a solid reputation for excellence.

      At Carmen House Cleaning, our commitment goes beyond just tidying up spaces; we are dedicated to providing the best customer service experience. We understand that a clean and organized environment is not only visually appealing but also contributes to a healthier and happier lifestyle.
      What sets us apart is our unwavering focus on delivering the highest standards of customer service. Our team consists of trained professionals who are not only experts in their field but also prioritize your satisfaction. We believe in going the extra mile to ensure that every corner of your home or office is spotless, giving you peace of mind and the luxury of a pristine space.

      Whether you are a homeowner, business owner, or property manager, Carmen House Cleaning is your reliable partner for maintaining a clean and welcoming environment. Our services are tailored to meet the unique needs of each client, ensuring a personalized touch in every cleaning session.

      Join the countless satisfied customers who have entrusted Carmen House Cleaning with the responsibility of maintaining their spaces. Experience the difference of a cleaning service that combines years of expertise, attention to detail, and a commitment to unparalleled customer service.

      For a cleaner, healthier, and happier space, choose Carmen House Cleaning - where excellence meets experience, and customer satisfaction is our top priority.</p>
  </div>

  <?php
  // Dynamic image source
  $imageSource = "../util/cleaningTools.png";
  ?>
  <div class="cleanToolimg_div">
    <img src="<?php echo $imageSource; ?>" alt="Carmen Cleaning products image" class="cleanToolimg">
  </div>



  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>
  <div class="txt-index">
    <p style="font-weight:bold;">Phone: 000-000-0000</p>
    <p style="font-weight:bold;">E-Mail: carmen@carmen.com</p>
    <p style="font-weight:bold;">Hours of operation: Monday to Friday 8am to 5pm</p>
  </div>
  <!-- Footer -->
  <footer>
    <p>&copy; 2024 Carmen Cleaning Services. All rights reserved.</p>
  </footer>
</body>

</html>