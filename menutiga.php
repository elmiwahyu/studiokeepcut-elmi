<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>menu tiga</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
  </head>
  <body style="background-image: url('img/bg_menu.png'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed">
    <img src="img/logokeepcut.png" alt="Logo" class="logo" />

    <div class="logout-button">
      <!-- Added onclick event to redirect to index.html -->
      <button class="btn btn-danger" onclick="logout()">Logout</button>
    </div>

    <p class="gender-text">Please Choose Hair Artist</p>

    <div class="image-links">
      <!-- Gambar 1 -->
      <a href="menujadwal.php?artist=Aksa&price=Rp 40.000 - 200.000">
        <img src="img/aksa.png" alt="Gambar 1" width="200" height="200" />
        <p class="price-caption">Rp 40.000 - 200.000</p>
      </a>
      <!-- Gambar 2 -->
      <a href="menujadwal.php?artist=Laras&price=Rp 50.000 - 200.000">
        <img src="img/laras.png" alt="Gambar 2" width="200" height="200" />
        <p class="price-caption">Rp 50.000 - 200.000</p>
      </a>
    </div>

    <div class="image-links">
      <!-- Gambar 3 -->
      <a href="menujadwal.php?artist=Aksa&price=Rp 40.000 - 200.000">
        <img src="img/mia.png" alt="Gambar 3" width="200" height="200" />
        <p class="price-caption">Rp 10.000 - 200.000</p>
      </a>
      <!-- Gambar 4 -->
      <a href="menujadwal.php?artist=Laras&price=Rp 50.000 - 200.000">
        <img src="img/rusli.png" alt="Gambar 4" width="200" height="200" />
        <p class="price-caption">Rp 70.000 - 200.000</p>
      </a>
    </div>
    <footer>
      <p>&copy; 2023 KeepCut Studio Customer</p>
    </footer>
    <!-- Script JavaScript -->
    <script>
      function showBookingDetails(artistName, priceRange) {
        const service = new URLSearchParams(window.location.search).get("service");
        window.location.href = `menujadwal.html?service=${service}&artist=${artistName}&price=${encodeURIComponent(priceRange)}`;
      }
      function logout() {
        window.location.href = "index.php";
      }
    </script>
    </script>
  </body>
</html>
