<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up Page</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
  </head>
  <body>
    <img class="bgsign_up" src="img/bg.png" alt="background" />
    <div class="signupbox">
      <a href="Index.html"><img src="./img/logokeepcut.png" class="logosignup" /></a>
      <h1 class="signup">Sign Up</h1>

      <form id="signupForm" action="signup.php" method="POST">
        <p class="textsignup">Username</p>
        <input type="text" name="username" id="username" placeholder="Enter your username" />

        <p class="textsignupone">Email</p>
        <input type="email" name="email" id="email" placeholder="Enter your email" />

        <p class="textsignuptwo">Password</p>
        <input type="password" name="password" id="password" placeholder="Create a password" />

        <button type="submit">Sign Up</button>
        <a href="sign_in.html">Already have an account?</a>
      </form>
    </div>

    <script>
      document.getElementById("signupForm").addEventListener("submit", function (event) {
        event.preventDefault();
        const email = document.getElementById("email").value;
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        // Kirim data ke server untuk diproses (disimpan ke database)
        fetch("signup.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: `username=${username}&email=${email}&password=${password}`,
        })
          .then((response) => {
            if (response.ok) {
              alert("Sign up successful! Proceed to Sign In.");
              window.location.href = "sign_in.php";
            } else {
              throw new Error("Network response was not ok.");
            }
          })
          .catch((error) => {
            console.error("There has been a problem with your fetch operation:", error);
          });
      });
    </script>
  </body>
</html>
