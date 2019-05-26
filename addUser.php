<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
    <H1>Sign Up</H1>
  <body>
    <form class="form" action="addUser.php" method="post">
      <label>Name: <input type="text" name="username"></label>
      <label><br>Password: <input type="text" name="password"></label>
      <input type="submit" value="Submit">
      <input type="hidden" name="sub">
      <?php
        if(isset($_POST["username"])&&isset($_POST["sub"])) {
          include 'connectDB.php';
          $username = $_POST['username'];
          $password = $_POST['password'];          
          $conn = OpenCon();

          $exist = $conn->query("SELECT 1 FROM plant_the_tree");
          if ($exist!==false) {
              //table checked! do nothing, continues to insert into database.
          } else {
              echo"table not exit."
          }

          $sql_insert = "INSERT INTO plant_the_tree VALUES ('$username','$password')";

          if($conn->query($sql_insert)===TRUE) {
            echo "<strong><p>Sign Up Successful!";
          }else {
            echo "Error: ".$sql_insert."<br>".$conn->error;
          }
        }
       ?>
      <br><a href="index.php">Back to Home Page</a>
  </form>
  </body>
</html>
