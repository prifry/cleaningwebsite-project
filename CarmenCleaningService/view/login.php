
<!DOCTYPE html>
<html>

<head>
  <title>CarmenCleaningService</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="registestyle.css">
</head>

<body>
  <div class="topnav" id="myTopnav">
    <a href="../index.php" class="active">Home</a>
    <a href="about.php" id="about">About</a>
    <a href="contact.php">Contact</a>
    <a href="registry.php">Register</a>
    <a href="login.php">LogIn</a>
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
  $imageSource = "../util/logo.png";
  ?>
  <img src="<?php echo $imageSource; ?>" alt="Carmen Cleaning products image" class="cleaning">
  <div style="padding-left:16px" class="cleaning-div">


    <form action="authenticate.php" method="POST" style="border:1px solid #ccc">
      <div class="container">
        <h1 class="signuph1">LogIn</h1>
        <hr>
        <?php if(isset($loginError)) { ?>
        <p><?php echo $loginError; ?></p>
      <?php } ?>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="password"><b>Password</b>
        </label>
        <input type="password" placeholder="Enter Password" name="password">

        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <div class="clearfix">
          <button type="submit" class="signupbtn">LogIn</button>
        </div>
      </div>
    </form>

    <!-- Footer -->
    <footer>
      <p>&copy; 2024 Carmen Cleaning Services. All rights reserved.</p>
    </footer>
</body>

</html>