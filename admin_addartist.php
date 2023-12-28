<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Tambahkan tag meta, stylesheet, dan link lainnya yang diperlukan -->
    <title>Upload Hair Artist</title>
  </head>
  <body>
    <h1>Upload Hair Artist</h1>
    <style>
      /* style.css */

      /* Reset default margin and padding */
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      /* Body styles */
      body {
        font-family: Arial, sans-serif;
        background-image: url("img/bg_menu.png");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }

      /* Header styles */
      h1 {
        text-align: center;
        margin: 20px 0;
      }

      /* Form styles */
      form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      form label {
        display: block;
        margin-bottom: 5px;
      }

      form input[type="text"],
      form input[type="file"],
      form button {
        width: 100%;
        margin-bottom: 15px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
      }

      form button {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
      }

      form button:hover {
        background-color: #0056b3;
      }

      /* Footer styles */
      footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        text-align: center;
        padding: 10px 0;
        background: #333;
        color: #fff;
      }

      /* Tombol "Back" */
      .back-button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #ff0000;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-left: 40px;
      }

      .back-button:hover {
        background-color: #0056b3;
      }
    </style>

   
    <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
      <label for="artistImage">Pilih Gambar Artist:</label>
      <input type="file" id="artistImage" name="artistImage" accept="image/*" required />

      <label for="artistName">Nama Artist:</label>
      <input type="text" id="artistName" name="artistName" required />

      <label for="priceRange">Rentang Harga:</label>
      <input type="text" id="priceRange" name="priceRange" required />

      <!-- Tombol untuk mengirim data -->
      <button type="submit">Upload</button>
    </form>
    <button class="back-button" onclick="goBack()">Back</button>

    

    <!-- Script JavaScript -->
    <!--<script>
      document.getElementById("uploadForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Mencegah form untuk submit secara normal

        // Mengambil data dari form
        const formData = new FormData(this);

        // Lakukan permintaan AJAX (menggunakan fetch atau metode lain) untuk mengirim data ke server
        // Ganti 'URL_TO_SERVER_ENDPOINT' dengan endpoint server untuk mengunggah hair artist
        fetch("URL_TO_SERVER_ENDPOINT", {
          method: "POST",
          body: formData,
        })
          .then((response) => {
            if (response.ok) {
              // Jika unggahan berhasil, lakukan tindakan sesuai kebutuhan
              // Contoh: memberikan notifikasi kepada pengguna
              alert("Unggahan berhasil!");
              window.location.href = "admin_page.php";
            } else {
              // Jika terjadi kesalahan, tampilkan pesan kesalahan
              window.location.href = "admin_page.php";
              alert("Unggahan gagal. Silakan coba lagi.");
            }
          })
          .catch((error) => console.error("Error:", error));
      });
    </script> -->

    <script>
      document.getElementById("uploadForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Mencegah form untuk submit secara normal

        // Mengambil data dari form
        const formData = new FormData(this);

        // Lakukan permintaan AJAX (menggunakan fetch atau metode lain) untuk mengirim data ke server
        // Ganti 'URL_TO_SERVER_ENDPOINT' dengan endpoint server untuk mengunggah hair artist
        fetch("URL_TO_SERVER_ENDPOINT", {
          method: "POST",
          body: formData,
        })
          .then((response) => {
            if (response.ok) {
              // Jika unggahan berhasil, arahkan pengguna ke halaman admin_page.php
              window.location.href = "admin_showartist.php";
            } else {
              // Jika terjadi kesalahan, arahkan pengguna ke halaman admin_page.php juga
              window.location.href = "admin_page.php";
            }
          })
          .catch((error) => {
            // Jika terjadi kesalahan saat proses fetch, arahkan pengguna ke halaman admin_page.php juga
            console.error("Error:", error);
            window.location.href = "admin_page.php";
          });
      });

      function goBack() {
        window.history.back(); // Fungsi untuk kembali ke halaman sebelumnya dalam riwayat browser
      }
    </script>
  </body>
</html>
