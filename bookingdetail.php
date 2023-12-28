<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Your custom CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
  </head>
  <body style="background-image: url('img/bg_menu.png'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed">
    <div class="container">
      <h1>Booking Details</h1>
      <hr />

      <div class="row">
        <div class="col-md-6">
          <h3>Service Information</h3>
          <p><strong>Service:</strong> <span id="serviceInfo"></span></p>
          <p><strong>Artist:</strong> <span id="artistInfo"></span></p>
          <p><strong>Price Range:</strong> <span id="priceInfo"></span></p>
          <p><strong>Date:</strong> <span id="dateInfo"></span></p>
          <p><strong>Time:</strong> <span id="timeInfo"></span></p>
        </div>
        <div class="col-md-6">
          <h3>Your Information</h3>
          <p><strong>Name:</strong> <span id="nameInfo"></span></p>
          <p><strong>Gender:</strong> <span id="genderInfo"></span></p>
          <p><strong>Phone Number:</strong> <span id="phoneInfo"></span></p>
        </div>
      </div>
      <div class="mt-4">
    <button class="btn btn-primary" onclick="handleEdit()">Edit</button>
    <button class="btn btn-danger" onclick="handleDelete()">Delete</button>
    <button class="btn btn-success" onclick="handleDone()">Done</button>
  </div>
    </div>

    
  
</div>

    <!-- Bootstrap JS and other scripts -->
    <footer>
      <p>&copy; 2023 KeepCut Studio Customer</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Your custom script -->
    <script>
      // Ambil data dari URL parameters
      const params = new URLSearchParams(window.location.search);

      const selectedGender = sessionStorage.getItem("selectedGender");
      const selectedService = sessionStorage.getItem("selectedService");

      // Isi informasi dari parameter ke dalam elemen HTML
      document.getElementById("genderInfo").innerText = selectedGender || "Not provided";
      document.getElementById("serviceInfo").innerText = selectedService || "Not provided";
      document.getElementById("artistInfo").innerText = params.get("artist") || "Not provided";
      document.getElementById("priceInfo").innerText = params.get("price") || "Not provided";
      document.getElementById("nameInfo").innerText = params.get("inputName") || "Not provided";
      document.getElementById("phoneInfo").innerText = params.get("inputnohp") || "Not provided";
      document.getElementById("dateInfo").innerText = params.get("available-date") || "Not provided";
      document.getElementById("timeInfo").innerText = params.get("available-time") || "Not provided";

      function handleDone() {
        const detailPemesanan = {
          service: document.getElementById("serviceInfo").innerText,
          artist: document.getElementById("artistInfo").innerText,
          price: document.getElementById("priceInfo").innerText,
          date: document.getElementById("dateInfo").innerText,
          time: document.getElementById("timeInfo").innerText,
          name: document.getElementById("nameInfo").innerText,
          gender: document.getElementById("genderInfo").innerText,
          phone: document.getElementById("phoneInfo").innerText,
        };

        fetch("process_booking.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(detailPemesanan),
        })
          .then((response) => response.text())
          .then((data) => {
            alert(data); // Tampilkan respons dari server
            window.location.href = "index.php";
          })
          .catch((error) => console.error("Error:", error));
      }

      function handleEdit() {
    // Redirect to a specific page for editing (menusatu.php in this example)
    window.location.href = "menusatu.php";
  }

  function handleDelete() {
    const detailPemesanan = {
      service: document.getElementById("serviceInfo").innerText,
      artist: document.getElementById("artistInfo").innerText,
      price: document.getElementById("priceInfo").innerText,
      date: document.getElementById("dateInfo").innerText,
      time: document.getElementById("timeInfo").innerText,
      name: document.getElementById("nameInfo").innerText,
      gender: document.getElementById("genderInfo").innerText,
      phone: document.getElementById("phoneInfo").innerText,
    };

    // Perform a fetch request to delete from the database
    fetch("delete_booking.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(detailPemesanan),
    })
      .then((response) => response.text())
      .then((data) => {
        alert(data); // Display the server response
        // Redirect to index.php after deletion
        window.location.href = "index.php";
      })
      .catch((error) => console.error("Error:", error));
  }
    </script>
  </body>
</html>
