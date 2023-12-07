<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="path-to-font-awesome/css/all.min.css">
 
</head>
<body>
<h1>Login to Your Account</h1>
<div class="login-container">
  <!-- Your login form goes here -->

  <div class="header">
  	<h3>Have an Account ?</h3>
  </div>
	
  <form method="post" action="login.php" id="login-form">

  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="Username">
  	</div>
  	<div class="input-group1">
  		<label style="color: black;">Password</label>
         <input style="border-radius: 18px; height: 40px; border: white; " type="password" name="password" id="password" placeholder="Password" class="pass">
		  <button type="button" class="icon-button" id="showHideBtn3" onclick="togglePasswordVisibility()">
        &#128065; <!-- Eye icon HTML entity -->
      </button>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p id="p1" class="p1">
  		Not yet a member ?   <a href="register.php">Sign up</a>
  	</p>
	
  </form></dev></div>
  <div class="sign"><br>
<h2>------ Or Login with ------</h2><br>

<dev class="buttons">
	<button type="submit" class = "btn1" >Google</button>
	<button type="submit" class = "btn2">Facebook</button>
	<script>
  function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var showHideBtn = document.getElementById("showHideBtn3");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      showHideBtn.innerHTML = "&#128065;"; // Change to hide icon
    } else {
      passwordInput.type = "password";
      showHideBtn.innerHTML = "&#128065;"; // Change to show icon
    }
  }
</script>
</body>
</html>
