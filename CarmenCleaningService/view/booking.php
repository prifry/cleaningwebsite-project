<?php
require_once(__DIR__ . '/../model/serviceDB.php');
require_once(__DIR__ . '/../model/bookingDB.php');
require_once(__DIR__ . '/../model/database.php');
session_start();
// Check if the user is not logged in
if (!isset($_SESSION['user_id'])) {
  // Redirect to the login page
  header("Location: login.php");
  exit(); // Stop further execution
}
// If the user is logged in, set the $userId variable
$userId = $_SESSION['user_id'];




//  retrieved the user's ID and stored it in a variable $userId
$services = ServiceDB::getServices($userId);
$bookings = BookingDB::getBookings($userId);
?>
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
    <a href="about.php" id="#about">About</a>
    <a href="service.php">Services</a>
    <a href="booking.php">Booking</a>
    <a href="display_change_password.php">Change Password</a>
    <a href="contact.php">Contact</a>
    <a href="registry.php">Register</a>
    <a href="login.php">LogIn</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <?php
  // Include the database connection file


  // Retrieve service information from previous page
  if (isset($_POST['serviceId'])) {
    $serviceId = $_POST['serviceId'];
    // Retrieve service details based on $serviceId from the service table
  }

  // Dynamic image source
  $imageSource = "../util/logo.png";
  ?>
  <img src="<?php echo $imageSource; ?>" alt="Carmen Cleaning products image" class="cleaning">

  <div style="padding-left:16px" class="cleaning-div">
    <h1 id="h1"> Booking </h1>

    <form action="../view/process_booking.php" method="POST" style="border:1px solid #ccc">
      <div class="container">
        <br>
        <br>
        <label for="submitDate" style="color:blue;"><b>Choose Date:</b></label>
        <input type="date" id="submitDate" name="submitDate">
        <p>We will call you to let you know if date is available</p>

        <label for="submitTime" style="color:blue;"><b>Choose Time:</b></label>
        <input type="time" id="submitTime" name="submitTime" required>
        <p>We will call you to let you know if time is available</p>

        <br>
        <br>
        <label for="Note">Note:</label>
        <textarea type="text" id="Note" name="Note"></textarea>
        <br>
        <br>
        <div class="btn-group">
          <input type="submit" class="button" value="Book Now" style="color: white;">
          <input type="button" class="button" value="Cancel" style="color: red;" onclick="window.location.href='service.php'">
        </div>
        <br>
        <br>
      </div>
    </form>
  </div>
  <div class="container"> <!-- Display Services -->
    <h1 style="text-align: center" id="bookedService">Booked Service </a></h1>
    <br>
    <ul>
      
      <?php /*var_dump($services);*/ foreach ($services as $service) : ?>
        <h2 style="color:#0DA1D0;">Your Services</h2>
        <li>
          <strong>Regular Cleaning:</strong> <?php echo $service->getRegularCleaning(); ?><br>
          <strong>Deep Cleaning:</strong> <?php echo $service->getDeepCleaning(); ?><br>
          <strong>Bedrooms:</strong> <?php echo $service->getBedrooms(); ?><br>
          <br>
          <br>
          <h2 style="color: green;">Make changes</h2>
          <!-- Update Button -->
          <form action="update_service.php" method="POST" style="display: inline;">
            <input type="hidden" name="serviceId" value="<?php echo $service->getServiceId(); ?>">
            <input type="text" name="regularCleaning" placeholder="Update Regular Cleaning">
            <input type="text" name="deepCleaning" placeholder="Update Deep Cleaning">
            <input type="number" name="bedrooms" placeholder="Update Bedrooms">
            <input type="submit" value="Update" style="color: green;">
          </form>

          <!-- Delete Button -->
          <form action="delete_service.php" method="POST" style="display: inline;">
            <input type="hidden" name="serviceId" value="<?php echo $service->getServiceId(); ?>">
            <input type="submit" value="Delete" style="color: red;">
          </form>
        </li>
      <?php endforeach; ?>
    </ul>

    <!-- Display Bookings -->
   
    <ul>
     
      <?php foreach ($bookings as $booking) : ?>
        <h2 style="color: #0DA1D0 ;">Your dates</h2>
        <li>
          <strong>Date:</strong> <?php echo $booking->getDate(); ?><br>
          <strong>Time:</strong> <?php echo $booking->getTime(); ?><br>
          <strong>Note:</strong> <?php echo $booking->getNote(); ?><br>
          <br>
          <br>
          <h2 style="color: green;">Make changes</h2>
          <!-- Update Button -->
          <form action="update_booking.php" method="POST" style="display: inline;">
            <input type="hidden" name="bookingId" value="<?php echo $booking->getBookingId(); ?>">
            <input type="date" name="date" placeholder="Update Date">
            <input type="time" name="time" placeholder="Update Time">
            <br>
            <p>Change your notes:</p>
            <input type="text" name="note" placeholder="Update Note">
            <input type="submit" value="Update" style="color: green;">
          </form>

          <!-- Delete Button -->
          <form action="delete_booking.php" method="POST" style="display: inline;">
            <input type="hidden" name="bookingId" value="<?php echo $booking->getBookingId(); ?>">

            <input type="submit" value="Delete" style="color: red;">
          </form>
          <br>
          <br>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <br>
    <div class="container">
      <div class="clearfix">
              <a href="../view/thank_you.php" class="signupbtn" style="text-decoration: none; text-align:center;"><b>LogOut</b></a>
      </div>
    </div>


  <div class="txt-index">
    <p style="font-weight:bold;">Phone: 000-000-0000</p>
    <p style="font-weight:bold;">E-Mail: carmen@carmen.com</p>
    <p style="font-weight:bold;">Hours of operation: Monday to Friday 8am to 5pm</p>
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
  <!-- Footer -->
  <footer>
    <p>&copy; 2024 Carmen Cleaning Services. All rights reserved.</p>
  </footer>
</body>

</html>
