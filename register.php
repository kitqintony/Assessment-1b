<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container {
            width: 80%;
            max-width: 80% !important;
        }

        .form {
            min-height: calc(100vh - 233px);
        }

        input{
            max-width: 500px;
        }
    </style>
</head>
<body>
<header>

</header>
<section class="container content-section">
<?php
require('settings.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    $fname = stripslashes($_REQUEST['fname']);
    $fname = mysqli_real_escape_string($con, $fname);
    $lname = stripslashes($_REQUEST['lname']);
    $lname = mysqli_real_escape_string($con, $lname);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    //here should encrypt the password
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $trn_date = date("Y-m-d H:i:s");
    $querycreatetable = "CREATE TABLE IF NOT EXISTS userlist( id int(11) NOT NULL AUTO_INCREMENT, username varchar(50) NOT NULL, fname varchar(50) NOT NULL, lname varchar(50) NOT NULL, email varchar(50) NOT NULL,
		password varchar(60) NOT NULL, trn_date datetime NOT NULL, PRIMARY KEY (id) )";
    mysqli_query($con, $querycreatetable);
    //check duplicates before add new username
    $check = "SELECT username FROM `userlist` WHERE username='$username'";
    if(mysqli_num_rows(mysqli_query($con, $check))<1){
      $query = "INSERT into `userlist` (username, password, fname, lname, email, trn_date)
      VALUES ('$username', '$hash', '$fname', '$lname', '$email', '$trn_date') ON DUPLICATE KEY UPDATE username=VALUES(username)";
      $result = mysqli_query($con, $query);
      if ($result) {
              echo "<div class='form'>
            <h3>You are registered successfully.</h3>
            <br/>Click here to <a href='index.php'>Login</a></div>";
          }
    }else{
      //dulicates, do nothing...
      echo "Username already registered.";
    }
    //add admin only once...
   $check = "SELECT username FROM `userlist` WHERE username='admin'";
    if(mysqli_num_rows(mysqli_query($con, $check))<1){
      $hash0 = password_hash("adminpass", PASSWORD_DEFAULT);
      $query0 = "INSERT into `userlist` (username, password, fname, lname, email, trn_date)
      VALUES ('admin', '$hash0', 'admin', 'admin', 'admin@test.com', '$trn_date') ON DUPLICATE KEY UPDATE username=VALUES(username)"; //admin
      mysqli_query($con, $query0);
    }else{
      //do nothing.
    }
} else {
?>
<div class="">
    <div class="container form">
        <br>
        <h1>Registration</h1>
        <form name="registration" action="" method="post">
            First Name: <input class="form-control" type="text" name="fname" placeholder="First Name" required/><br/>
            Last Name: <input class="form-control" type="text" name="lname" placeholder="Last Name" required/><br/>
            Username: <input class="form-control" type="text" name="username" placeholder="Username" required/><br/>
            Email: <input class="form-control" type="email" name="email" placeholder="Email" required/><br/>
            Password: <input class="form-control" type="password" name="password" placeholder="Password" required/><br/>
            <input class="btn btn-success" type="submit" name="submit" value="Register"/><br/>


        </form>
        <br>
        <p>Already have an account? <a href="index.php">Go To Login Page</a>.</p>
        <b>
            <a href="index.php">
                <button class="btn btn-success">Go Back to the Home Page</button>
            </a>
        </b>
    </div>
    <?php
    }
    ?>
</div>


</body>
</html>
