<html>

<head>
    <title>Add Data</title>
</head>

<body>
    <?php
    // Include the database connection file
    require_once("dbConnection.php");

    if (isset($_POST['submit'])) {
        // Escape special characters in string for use in SQL statement	
        $nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
        $harga = mysqli_real_escape_string($mysqli, $_POST['harga']);
        $stok = mysqli_real_escape_string($mysqli, $_POST['stok']);

        // Check for empty fields
        if (empty($nama) || empty($harga) || empty($stok)) {
            if (empty($nama)) {
                echo "<font color='red'>nama field is empty.</font><br/>";
            }

            if (empty($harga)) {
                echo "<font color='red'>Age field is empty.</font><br/>";
            }

            if (empty($stok)) {
                echo "<font color='red'>Stok field is empty.</font><br/>";
            }

            // Show link to the previous page
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else {
            // If all the fields are filled (not empty) 
            // Insert data into database
            $result = $mysqli->query("INSERT INTO barang(nama,harga,stok) VALUES('$nama','$harga','$stok')");

            // Display success message
            echo "<p><font color='green'>Data added successfully!</p>";
            echo "<a href='barang.php'>View Result</a>";
        }
    }
    ?>
</body>

</html>