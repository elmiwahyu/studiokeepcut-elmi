<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <!-- CSS atau styling lainnya -->
</head>
<body>
    <h1>Customer Data</h1>

    <?php
    include 'koneksi.php';

    // Memanggil fungsi untuk mengambil data dari database
    $customerData = getDataFromDatabase();

    if (!empty($customerData)) {
        echo "<table><tr><th>Service</th><th>Artist</th><th>Price</th><th>Date</th><th>Time</th><th>Name</th><th>Gender</th><th>Phone</th></tr>";
        foreach ($customerData as $data) {
            echo "<tr><td>".$data["service"]."</td><td>".$data["artist"]."</td><td>".$data["price"]."</td><td>".$data["date"]."</td><td>".$data["time"]."</td><td>".$data["name"]."</td><td>".$data["gender"]."</td><td>".$data["phone"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No customer data available.";
    }
    ?>
</body>
</html>
