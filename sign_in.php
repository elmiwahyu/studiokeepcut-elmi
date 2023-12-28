<!DOCTYPE html>
<html>
  <head>
    <title>Sign In Page</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
  </head>
  <body>
    <img class="bgsign_up" src="img/bg.png" alt="background" />
    <div class="signupbox">
      <a href="Index.html"><img src="./img/logokeepcut.png" class="logosignup" /></a>
      <h1 class="signup">Sign In</h1>
      <form id="signinForm" action="signin.php" method="POST">
        <p class="textsignup">Username</p>
        <input type="text" name="username" id="username" placeholder="Enter your username" />
        <p class="textsignuptwo">Password</p>
        <input type="password" name="password" id="password" placeholder="Enter your password" />
        <button type="submit">Login</button>
        <a href="sign_up.php">Don't have an account?</a>
      </form>
    </div>
  </body>
</html>
