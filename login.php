<!DOCTYPE html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    .container {
        width: 80%;
        max-width: 80% !important;
    }

    .form{
        min-height: calc(100vh - 230px);
    }

    input{
        max-width: 500px;
    }
</style>

<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<header>
    <div class="container">
        <div id="branding">
            <img src="./img/nztri-logo-2016.png" alt="logo" width="300" height="100">

        </div>
        <nav>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Tourist Attractions.html">Attractions</a></li>
                <li><a href="Newsletter.php">Newsletter</a></li>
                <li><a href="topics.php">Discussion</a></li>
                <li><a href="about.html">About</a></li>
                <li class="current"><a href="Login.php">Login</a></li>
            </ul>
        </nav>
    </div>
</header>
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
        header("Location: Home.php");
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
                    header("Location: Home.php");
                }
        }else{
            echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
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
            <a href="Home.php" class="btn btn-success">
                Go Back to the Home Page
            </a>
        </div>
    </div>


<?php } ?>
<footer>
    <p>NZTRI, Copyright &copy; 2019</p>
</footer>
</body>
</html>
