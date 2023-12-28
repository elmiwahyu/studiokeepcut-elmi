<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>menu empat</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
  </head>
  <body style="background-image: url('img/bg_menu.png'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed">
    <img src="img/logokeepcut.png" alt="Logo" class="logo" />

    <div class="logout-button">
      <!-- Added onclick event to redirect to index.html -->
      <button class="btn btn-danger" onclick="logout()">Logout</button>
    </div>

    <p class="gender-text">Please fill in the form</p>

    <form action="bookingdetail.html" method="post" class="appointment-form" onsubmit="submitForm(); return false;">
      <div class="form-group">
        <label for="inputName">Your Name:</label>
        <input type="text" id="inputName" name="inputName" class="form-control" placeholder="Enter your name" required />
      </div>

      <div class="form-group">
        <label for="inputnohp">Number Phone:</label>
        <input type="text" id="inputnohp" name="inputnohp" class="form-control" placeholder="Enter your number phone" required />
      </div>

      <div class="form-group">
        <label for="available-date">Choose Date:</label>
        <input type="date" id="available-date" name="available-date" class="form-control" required />
      </div>

      <div class="form-group">
        <label for="available-time">Choose Time:</label>
        <select id="available-time" name="available-time" class="form-control" required>
          <option value="08:00">8:00 AM</option>
          <option value="09:00">9:00 AM</option>
          <option value="10:00">10:00 AM</option>
          <option value="01:00">01:00 PM</option>
          <option value="02:00">02:00 PM</option>
          <option value="03:00">03:00 PM</option>
          <option value="04:00">04:00 PM</option>
          <!-- Add more time options here -->
        </select>
      </div>
      <button type="submit" class="custom-button">Submit</button>
    </form>
    <footer>
      <p>&copy; 2023 KeepCut Studio Customer</p>
    </footer>

    <!-- Script JavaScript -->
    <script>
      function submitForm() {
        // Dapatkan data dari formulir
        const inputName = document.getElementById("inputName").value;
        const inputnohp = document.getElementById("inputnohp").value;
        const availableDate = document.getElementById("available-date").value;
        const availableTime = document.getElementById("available-time").value;

        // Dapatkan data dari URL parameter
        const service = new URLSearchParams(window.location.search).get("service");
        const artist = new URLSearchParams(window.location.search).get("artist");
        const price = new URLSearchParams(window.location.search).get("price");

        // Konstruksi URL
        const url = `bookingdetail.php?service=${service}&artist=${artist}&price=${price}&inputName=${inputName}&inputnohp=${inputnohp}&available-date=${availableDate}&available-time=${availableTime}`;

        // Redirect ke halaman booking dengan parameter yang diisi
        window.location.href = url;
      }
      function logout() {
        window.location.href = "index.php";
      }
    </script>
    </script>
  </body>
</html>
