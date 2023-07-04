<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM barang ORDER BY id DESC");
?>

<html>

<head>
    <title>Homepage</title>
</head>

<body>
    <h2>Homepage</h2>
    <p>
        <a href="index.php">Users</a>
        <a href="barang.php">Barang</a>
        <a href="transaksi.php">Transaki</a>
    </p>
    <p>
        <a href="add_barang.php">Add New Data</a>
    </p>
    <table width='80%' border=0>
        <tr bgcolor='#DDDDDD'>
            <td><strong>Name</strong></td>
            <td><strong>Harga</strong></td>
            <td><strong>Stok</strong></td>
            <td><strong>Action</strong></td>
        </tr>
        <?php
        // Fetch the next row of a result set as an associative array
        while ($res = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $res['nama'] . "</td>";
            echo "<td>" . $res['harga'] . "</td>";
            echo "<td>" . $res['stok'] . "</td>";
            echo "<td><a href=\"editbarang.php?id=$res[id]\">Edit</a> | 
			<a href=\"deletebarang.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }
        ?>
    </table>
</body>

</html>