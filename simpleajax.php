<HTML XMLns="http://www.w3.org/1999/xHTML">
  <head>
    <title>Login</title>
	<script type="text/javascript" src="xhr.js"></script>
    	<script type="text/javascript" src="simpleajax.js"> </script>
  </head>
  <body>
  <H1>Login Page</H1>
	<form>
	    <label>User Name:  <input type="text" name="username"> </label>
 	    <label><br>Password: <input type="text" name="password"> </label><br><br>
	    <input name="submit" type ="button" onClick = "getData('data.php','targetDiv', username.value, password.value) " value = "Login">
	</form>
        <a href="addUser.php">Sign up</a>
	<a href="index.php">Continue without login</a>
	<div id="targetDiv">
	    <p>Show here when login successful!</p>
	</div>
 </body>
</HTML>
