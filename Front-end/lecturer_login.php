<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CHANDIGARH UNIVERSITY</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'><link rel="stylesheet" href="LoginCSS/AdminLogin.css">
</head>
<body>
<!-- partial:index.partial.html -->
<p class="tip"></p>
<div class="cont">
  <div class="form sign-in">
      <form method="post" id="admin_login" action="lecturer_login.php">
        <h2>Lecturer Login </h2>
        <label>
        <span>Email</span>
          <input type="email" name="email" id="admin_signin_email" placeholder="abc@gmail.com" required 
          title="Please enter the correct email "><br>
      </label>
      <label>
          <span>Password</span>
          <input type="password" name="password" id="admin_signin_password" pattern=".{5,15}" required title="5 to 15 characters" placeholder="**********" > <br>
      </label>
    <button class="submit" name="login_lecturer">Sign In</button>
    </form>
    <a href = "login.php"><button class="fb-btn"><span>Continue as student</span></button></a>
  </div>
</div>

<a class="icon-link">
  <img src="https://www.medipol.edu.tr/medium/GalleryImage-Image-41.vsf">
</a>
<!-- partial -->
  

</body>
</html>
