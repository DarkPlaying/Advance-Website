<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<div class="login-container">
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" placeholder = "Email">
  	</div>
  	<div class="input-group1">
  	  <label style="color:black;">Password</label>
		<input style="border-radius: 18px; height: 40px; border: white;" type="password" name="password_1" id="password_1" placeholder="Password">
		<button type="button" class="icon-button" id="showHideBtn" onclick="togglePasswordVisibility()">
		&#128065; <!-- Eye icon HTML entity -->
      </button>
  	</div>
  	<div class="input-group1">
  	  <label style="color:black;">Confirm password</label>
		<input style="border-radius: 18px; height: 40px; border: white;" type="password" name="password_2" id="password_2" placeholder="Password">
		<button type="button" class="icon-button" id="showHideBtn1" onclick="togglePasswordVisibility1()">
		&#128065; <!-- Eye icon HTML entity -->
      </button>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p class="p1">
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>

</dev>
<script>
  function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password_1");
    var showHideBtn = document.getElementById("showHideBtn");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      showHideBtn.innerHTML = "&#128065;"; // Change to hide icon
    } else {
      passwordInput.type = "password";
      showHideBtn.innerHTML = "&#128065;"; // Change to show icon
    }
  }
  function togglePasswordVisibility1() {
    var passwordInput = document.getElementById("password_2");
    var showHideBtn = document.getElementById("showHideBtn1");

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