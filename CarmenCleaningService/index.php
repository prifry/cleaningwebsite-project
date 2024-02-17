<!DOCTYPE html>
<html>

<head>
  <title>CarmenCleaningService</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="view/styles.css">

</head>

<body>

  <div class="topnav" id="myTopnav">
    <a href="../index.php" class="active">Home</a>
    <a href="view/about.php">About</a>
    <a href="view/contact.php">Contact</a>
    <a href="view/registry.php">Register</a>
    <a href="view/login.php">LogIn</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
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
  <!-- Hero Section -->
  <?php
  // Dynamic image source
  $imageSource = "./util/logo.png";
  ?>
  <img src="<?php echo $imageSource; ?>" alt="logo" class="logo">

  <div style="padding-left:16px" class="cleaning-div">
    <h1 id="h1">Welcome </h1>


    <div class="txt-index">
      <p>A clean home provides a sense of tranquility and order that extends beyond just
        the physical environment. Walking into a tidy space, free from clutter and chaos, can evoke
        a profound sense of calmness and well-being. The crisp, fresh air, the polished surfaces,
        and the organized layout contribute to an atmosphere of harmony. We are here to help you. <a href="view/registry.php"><em Style="color: red;"> Register and Book Now!</em></a></p>
    </div>
    <?php
    // Dynamic image source
    $imageSource = "util/menu.png";
    ?>
    <img src="<?php echo $imageSource; ?>" alt="cleaning tools" class="cleaning">
  </div>

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