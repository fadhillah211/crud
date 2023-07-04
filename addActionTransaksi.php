<html>

<head>
    <title>Add Data</title>
</head>

<body>
    <?php
    // Include the database connection file
    require_once("dbConnection.php");

    if (isset($_POST)) {
        // Escape special characters in string for use in SQL statement	
        $id_barang = mysqli_real_escape_string($mysqli, $_POST['id_barang']);
        $id_user = mysqli_real_escape_string($mysqli, $_POST['id_user']);
        $jumlah = mysqli_real_escape_string($mysqli, $_POST['jumlah']);
        $total = mysqli_real_escape_string($mysqli, $_POST['total']);
        $date = mysqli_real_escape_string($mysqli, $_POST['date']);

        // Check for empty fields
        if (empty($id_barang) || empty($id_user) || empty($jumlah)) {
            if (empty($id_barang)) {
                echo "<font color='red'>ID Barang field is empty.</font><br/>";
            }

            if (empty($id_user)) {
                echo "<font color='red'>ID User field is empty.</font><br/>";
            }

            if (empty($jumlah)) {
                echo "<font color='red'>Jumlah field is empty.</font><br/>";
            }

            // Show link to the previous page
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else {
            // If all the fields are filled (not empty) 
            // Insert data into database
            $result = $mysqli->query("INSERT INTO transaksi(id_barang, id_user, jumlah, total, tanggal) VALUES('$id_barang', '$id_user', '$jumlah', '$total', '$date')");


            // query error
            if (!$result) {
                die("Error: " . mysqli_error($mysqli));
            }
            // Display success message
            echo "<p><font color='green'>Data added successfully!</p>";
            echo "<a href='transaksi.php'>View Result</a>";
        }
    }
    ?>
</body>

</html>