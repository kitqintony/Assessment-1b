<!DOCTYPE html>
<html>
<head>
    <title>Plant A Tree</title>
    <meta name="description" content="This is the description">
    <link rel="stylesheet" href="styles.css" />
    <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
max-width: 1000px;
position: relative;
margin: auto;
}

/* Caption text */
.text {
color: #f2f2f2;
font-size: 15px;
padding: 8px 12px;
position: absolute;
bottom: 8px;
width: 100%;
text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
color: #f2f2f2;
font-size: 12px;
padding: 8px 12px;
position: absolute;
top: 0;
}

/* The dots/bullets/indicators */
.dot {
height: 15px;
width: 15px;
margin: 0 2px;
background-color: #bbb;
border-radius: 50%;
display: inline-block;
transition: background-color 0.6s ease;
}

.active {
background-color: #717171;
}

/* Fading animation */
.fade {
-webkit-animation-name: fade;
-webkit-animation-duration: 1.5s;
animation-name: fade;
animation-duration: 1.5s;
}

@-webkit-keyframes fade {
from {opacity: .4}
to {opacity: 1}
}

@keyframes fade {
from {opacity: .4}
to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
.text {font-size: 11px}
}
</style>
</head>
<body>
    <header class="main-header">
        <nav class="nav main-nav">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="category.php">CATEGORY</a></li>
                <li><a href="tool.php">Gardening tools</a></li>
                <li><a href="service.php">Extra Service</a></li>
                <li><a href="about.php">ABOUT US</a></li>
            </ul>
        </nav>

        <h1 class="band-name band-name-large">TreeCo</h1>
    </header>

    <section class="content-section container">
        <h2 class="section-header">HOME</h2>

        <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./Images/001.jpg" style="width:100%" width="300px" height="300px">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="./Images/002.jpg" style="width:100%" width="300px" height="300px">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="./Images/003.jpg" style="width:100%" width="300px" height="300px">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

        <?php
        require('settings.php');
        session_start();
        // If form submitted, insert values into the database.
        if (isset($_POST['username'])) {
            // removes backslashes
            $username = stripslashes($_REQUEST['username']);
            //escapes special characters in a string
            $username = mysqli_real_escape_string($con, $username);
            $inputpass = stripslashes($_REQUEST['password']);
            $inputpass = mysqli_real_escape_string($con, $inputpass);
            //auth
            $authquery = "SELECT `password` from `userlist` WHERE username='$username'";
            $authquery0 = "SELECT `password` from `userlist` WHERE username='admin'";
            $authresult = mysqli_query($con, $authquery);
            $authresult0 = mysqli_query($con, $authquery0);
            $password = "";
            $password0="";
            if(!$authresult0){
                echo "admin not found.";
            }else{
                $row = mysqli_fetch_row($authresult0);
                $password0 = $row[0];
            }
            if(!$authresult){
                echo "Cannot run this query!";
            }else{
                $row = mysqli_fetch_row($authresult);
                $password = $row[0];
            }
            $auth0 = password_verify($inputpass, $password0);
            $auth = password_verify($inputpass, $password);
            // for admin login
            if($auth0){
                $_SESSION['username'] = $username;
                $_SESSION['isadmin'] = true; // is admin loggedin
                // Redirect user to Home.php
                header("Location: index.php");
            }
            else {
                if($auth){
                    //Checking is user existing in the database or not
                    $query = "SELECT * FROM `userlist` WHERE username='$username'";
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        $rows = mysqli_num_rows($result);
                        if ($rows > 0) {
                            $_SESSION['username'] = $username;
                            $_SESSION['isadmin'] = false; // not admin loggedin
                            // Redirect user to Home.php
                            header("Location: category.php");
                        }
                }else{
                    echo "<div class='form'>
        <h3>Username/password is incorrect.</h3>
        <br/>Click here to <a href='index.php'>Login</a></div>";
                }
            }

        } else {
            ?>
            <div class="form container">
                <br>
                <h1>Log In</h1>
                <form class="" action="" method="post" name="login">
                    Username: <input class="form-control" type="text" name="username" placeholder="Username" required/><br/>
                    Password: <input class="form-control" type="password" name="password" placeholder="Password" required/><br/>
                    <input class="btn btn-success" name="submit" type="submit" value="Login"/><br/>
                </form>
                <br>
                <p>Not registered yet? <a href='register.php'>Register Here</a></p>
                <div class="">
                    <a href="category.php" class="btn btn-success">
                        Continue without login
                    </a>
                </div>
            </div>


        <?php } ?>

    </section>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <footer class="main-footer">
        <div class="container main-footer-container">
            <h3 class="band-name">TreeCo</h3>
        </div>
    </footer>
</body>
</html>
