<?php
include("auth.php"); //include auth.php file on all secure pages
include ("db.php");
if (isset($_SESSION['username'])) {
   $username = $_SESSION['username'];
   $get_user = $mysqli->query("SELECT * FROM users WHERE username = '".$_SESSION['username']."' "); 
   $user_data = $get_user->fetch_assoc();
  } else {
            header("Location: index.php");
}?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Here is where you enter your details</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<div class="form">
  <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
  <p>This is where u enter your details <?php echo $_SESSION['username']; ?>!</p>


  <!-- FORM -->
  <!-- POPULATE FORM WITH DATA FROM SESSION -->
  <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>">
  <!-- SUBMIT BUTTON -->
  <!-- PHP CODE TO UPDATE SQL DATABASE -->

  <p><a href="swiping.php">Back to Swiping</a></p>
  <p><a href="dashboard.php">Dashboard</a></p>
  <a href="logout.php">Logout</a>

</div>
</body>
</html>
