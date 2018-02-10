<?php

include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HouseFindr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">

    <body class="w3-white">

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>



        <!-- Avatar image in top left corner -->
        <center><a href="dashboard.php"><img src="img\logo1.jpg" style="width:50%"></a></center>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>

        <div class="w3-bar-block">
            <a href="profile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red"><i class="fa fa-user"></i>  Your Profile</a>
            <a href="enter-details.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red"><i class="fa fa-edit"></i> edit profie</a>

            <a href="dashboard.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red"><i class="fa fa-picture-o"></i> doesnt work -  Liked Houses</a>
            <a href="dashboard.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red"><i class="fa fa-question-circle"></i> doesnt work -  Passed Houses</a>
            <a href="dashboard.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red"><i class="fa fa-user"></i>  Back to Dash</a>

        </div>
    </nav>


    <!-- Top menu on small screens -->
    <header class="w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding">
        <a href="javascript:void(0)" class="w3-button w3-black w3-margin-right" onclick="w3_open()">☰</a>
        <span>HouseFindr</span>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


			<script>
            // Script to open and close sidebar
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }

            // Modal Image Gallery
            function onClick(element) {
                document.getElementById("img01").src = element.src;
                document.getElementById("modal01").style.display = "block";
                var captionText = document.getElementById("caption");
                captionText.innerHTML = element.alt;
            }
        </script>
        </body>

</html>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
  <p>Welcome <?php echo $_SESSION['username']; ?>!</p>

  <br>
  <p><a href="enter-details.php">edit your profile</a></p>

  <br>
  <p><a href="swiping.php">Back to Swiping</a></p>
  <p><a href="dashboard.php">Dashboard</a></p>
  <a href="logout.php">Logout</a>

</div>
</body>
</html>
