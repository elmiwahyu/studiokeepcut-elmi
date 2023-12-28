<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details Table</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>
<body>
    <div class="container">
        <h1>Booking Details Table</h1>
        <hr>

        <!-- Table to display booking details -->
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Service</th>
                    <th>Artist</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    
                    <!-- Add other necessary columns here -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fetch and display booking details dynamically here -->
                <?php
                // Lakukan kueri untuk mengambil data dari database
                // Gantilah dengan kueri yang sesuai untuk mendapatkan data booking details dari database
                // Lakukan iterasi melalui hasil kueri dan tampilkan dalam baris tabel
                ?>
                <tr>
                    <td>1</td>
                    <td>Service</td>
                    <td> Artist</td>
                    <td>Price</td>
                    <td>Date</td>
                    <td> Time</td>
                    <td>Name</td>
                    <td>Gender</td>
                    <td>Phone</td>
                    <!-- Add other necessary columns here -->
                    <td>
                        <!-- Tombol Edit -->
                        <a href="menusatu.php?id=1" class="btn btn-primary">Edit</a>
                        <!-- Tombol Hapus -->
                        <a href="delete_booking.php?id=1" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <!-- Ulangi baris di atas untuk setiap data booking details -->
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
