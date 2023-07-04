<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
    // Escape special characters in a string for use in an SQL statement
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
    $harga = mysqli_real_escape_string($mysqli, $_POST['harga']);
    $stok = mysqli_real_escape_string($mysqli, $_POST['stok']);

    // Check for empty fields
    if (empty($nama) || empty($harga) || empty($stok)) {
        if (empty($nama)) {
            echo "<font color='red'>Nama field is empty.</font><br/>";
        }

        if (empty($harga)) {
            echo "<font color='red'>Harga field is empty.</font><br/>";
        }

        if (empty($stok)) {
            echo "<font color='red'>Stok field is empty.</font><br/>";
        }
    } else {
        // Update the database table
        $result = mysqli_query($mysqli, "UPDATE barang SET `nama` = '$nama', `harga` = '$harga', `stok` = '$stok' WHERE `id` = $id");

        if ($result) {
            // Display success message
            echo "<p><font color='green'>Data updated successfully!</p>";
            echo "<a href='barang.php'>View Result</a>";
        } else {
            // Display error message
            echo "Error: " . mysqli_error($mysqli);
        }
    }
}
