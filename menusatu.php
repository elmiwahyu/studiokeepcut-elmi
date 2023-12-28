<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>menu satu</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <script src="all.js"></script>
  </head>
  <body style="background-image: url('img/bg_menu.png'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed">
    <img src="img/logokeepcut.png" alt="Logo" class="logo" />

    <div class="logout-button">
      <!-- Added onclick event to redirect to index.html -->
      <button class="btn btn-danger" onclick="logout()">Logout</button>
    </div>

    <p class="gender-text">Please Select Your Gender</p>
    <div class="image_menusatu">
      <a href="menudua.php" onclick="setGender('Male'); return true;"><img src="img/male.png" alt="Gambar 1" width="200" height="200" /></a>
      <a href="menudua.php" onclick="setGender('Female'); return true;"><img src="img/female.png" alt="Gambar 2" width="200" height="200" /></a>
    </div>

    <footer>
      <p>&copy; 2023 KeepCut Studio Customer</p>
    </footer>

    <script>
      function setGender(gender) {
        sessionStorage.setItem("selectedGender", gender);
      }

      function logout() {
        window.location.href = "index.php";
      }
    </script>
  </body>
</html>
