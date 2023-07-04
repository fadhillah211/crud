<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM barang WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$nama = $resultData['nama'];
$harga = $resultData['harga'];
$stok = $resultData['stok'];
?>
<html>

<head>
    <title>Edit Data</title>
</head>

<body>
    <h2>Edit Data</h2>
    <p>
        <a href="index.php">Home</a>
    </p>

    <form name="edit" method="post" action="editActionBarang.php">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $harga; ?>"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" value="<?php echo $stok; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>