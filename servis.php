<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
    <title>menu dua</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css"/>
    <script src="all.js"></script>
</head>
<body
    style="background-image: url('img/bg_menu.png'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed">
<img src="img/logokeepcut.png" alt="Logo" class="logo"/>

<div class="logout-button">
    <!-- Added onclick event to redirect to index.html -->
    <button class="btn btn-danger" onclick="logout()">Logout</button>
</div>

<p class="gender-text">Please Choose Your Service</p>

<div class="image-links">
    <a href="artis.php" onclick="setService('Haircut'); return true;"><img src="img/haircut.png" alt="Gambar 1"
                                                                             width="200" height="200"/></a>
    <a href="artis.php" onclick="setService('Coloring'); return true;"><img src="img/coloring.png" alt="Gambar 1"
                                                                               width="200" height="200"/></a>
</div>

<div class="image-links">
    <a href="artis.php" onclick="setService('Smoothing'); return true;"><img src="img/smoothing.png" alt="Gambar 1"
                                                                                width="200" height="200"/></a>
    <a href="artis.php" onclick="setService('Perm'); return true;"><img src="img/perm.png" alt="Gambar 1"
                                                                          width="200" height="200"/></a>
    <a href="artis.php" onclick="setService('other'); return true;"><img src="img/others.png" alt="Gambar 1"
                                                                            width="200" height="200"/></a>
</div>

<button class="back-button" onclick="goBack()">Back</button>

<footer>
    <p>&copy; 2023 KeepCut Studio Customer</p>
</footer>
<script>
    function setService(service) {
        sessionStorage.setItem("selectedService", service);
    }

    function logout() {
        window.location.href = "index.php";
    }

    function goBack() {
        window.history.back(); // Fungsi untuk kembali ke halaman sebelumnya dalam riwayat browser
    }
</script>
</body>
</html>
