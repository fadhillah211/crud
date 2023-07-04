<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (latest entry first)
$result = mysqli_query($mysqli, "
SELECT * 
FROM transaksi
JOIN barang ON transaksi.id_barang = barang.id
JOIN users ON transaksi.id_user = users.id
ORDER BY transaksi.id DESC");

// Check for query execution error
if (!$result) {
    die("Error: " . mysqli_error($mysqli));
}
?>

<html>

<head>
    <title>Transaksi List</title>
</head>

<body>

    <h2>Transaksi List</h2>
    <p>
        <a href="index.php">Users</a>
        <a href="barang.php">Barang</a>
        <a href="transaksi.php">Transaki</a>
    </p>
    <p>
        <a href="add_transaksi.php">Add New Data</a>
    </p>
    <table width='80%' border=0>
        <tr bgcolor='#DDDDDD'>
            <td><strong>Name</strong></td>
            <td><strong>User Name</strong></td>
            <td><strong>Price</strong></td>
            <td><strong>Stock</strong></td>
        </tr>
        <?php
        // Fetch the next row of a result set as an associative array
        while ($res = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $res['nama'] . "</td>";
            echo "<td>" . $res['name'] . "</td>";
            echo "<td>" . $res['harga'] . "</td>";
            echo "<td>" . $res['stok'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>