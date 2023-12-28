<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Barber Shop Dashboard</title>
    <style>
        body {
            background-image: url('img/bg_menu.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: white;
        }

        .logo {
            width: 150px;
            height: auto;
            margin-top: 15px;
            margin-left: 20px;
        }

        .logout-button {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color:black;
            margin-top: -100px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav ul li {
            font-size: 20px;
        }

        nav ul li a {
            color: black;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        nav ul li a:hover {
            color: blue;
        }

        table {
        margin: auto;
        margin-top: 30px;
        border-collapse: collapse;
        width: 90%;
    }

    th, td {
        border: 1px solid black; /* Menambahkan garis pada batas sel */
        padding: 8px;
        text-align: left;
        color: black;
    }

    th {
        background-color: #333;
        color: white;
    }
    /* CSS untuk tag <h2> */
h2 {
  font-size: 24px; /* Ukuran font */
  color: #333; /* Warna teks */
  margin-bottom: 10px; /* Jarak bawah */
  text-align: center; /* Membuat teks menjadi berada di tengah */
  /* tambahkan properti lain sesuai kebutuhan */
}
/* CSS untuk tombol logout */
.logout-button {
  text-align: center; /* Menyusun tombol ke tengah */
  margin-top: 45px; /* Jarak dari atas */
  margin-left: 20px;
}

/* Gaya untuk tombol logout */
.logout-button button {
  padding: 8px 16px; /* Padding tombol */
  font-size: 16px; /* Ukuran font */
  background-color: #dc3545; /* Warna latar belakang */
  color: #fff; /* Warna teks */
  border: none; /* Tanpa border */
  border-radius: 4px; /* Sudut tombol */
  cursor: pointer; /* Mengubah kursor saat diarahkan ke tombol */
}

/* Hover state untuk tombol logout */
.logout-button button:hover {
  background-color: #c82333; /* Warna latar belakang saat dihover */
}


    </style>
</head>

<body>
    <img src="img/logokeepcut.png" alt="Logo" class="logo" />

    <div class="logout-button">
        <button class="btn btn-danger" onclick="logout()">Logout</button>
    </div>

    <h1>Admin Barber Shop Dashboard</h1>

    <nav>
        <ul>
            <li><a href="#schedule">Appointment Schedule</a></li>
            <li><a href="admin_addartist.php">Hair Artist</a></li>
        </ul>
    </nav>

    <div class="section" id="schedule">
   <h2>Appointment Schedule</h2>
    <?php
    require 'function_admin.php';
    $data = query("SELECT * FROM tb_booking");
    ?>

    <table>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Service</th>
                <th scope="col">Artist</th>
                <th scope="col">Price</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php $counter = 1 ?>
            <?php foreach ($data as $item) : ?>
                <tr>
                    <th scope="row"><?= $counter++ ?></th>
                    <td><?= $item['service'] ?></td>
                    <td><?= $item['artist'] ?></td>
                    <td><?= $item['price'] ?></td>
                    <td><?= $item['date'] ?></td>
                    <td><?= $item['time'] ?></td>
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['gender'] ?></td>
                    <td><?= $item['phone'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
  </form>

    
</body>

<script>
    function addService() {
      var newService = document.getElementById("newService").value;
      var existingServices = JSON.parse(localStorage.getItem("services")) || [];
      existingServices.push(newService);
      localStorage.setItem("services", JSON.stringify(existingServices));
      updateServices();
    }

    function updateServices() {
      var imageLinksDiv = document.getElementById("imageLinks");
      imageLinksDiv.innerHTML = "";
      var services = JSON.parse(localStorage.getItem("services")) || [];
      services.forEach(function(service) {
        var link = document.createElement("a");
        link.setAttribute("href", "menutiga.html");
        link.setAttribute("onclick", "setService('" + service + "'); return true;");

        var image = document.createElement("img");
        image.setAttribute("src", "img/" + service.toLowerCase() + ".png");
        image.setAttribute("alt", "Gambar " + service);
        image.setAttribute("width", "200");
        image.setAttribute("height", "200");

        link.appendChild(image);
        imageLinksDiv.appendChild(link);
      });
    }

    function setService(service) {
      sessionStorage.setItem("selectedService", service);
    }

    function logout() {
      window.location.href = "index.php";
    }

    // Panggil fungsi updateServices() saat halaman dimuat agar layanan-layanan ditampilkan
    window.onload = function() {
      updateServices();
    };
  </script>
</html>
