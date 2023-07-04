<html>

<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (latest entry first)
$barang = mysqli_query($mysqli, "
SELECT * 
FROM barang
");

// Check for query execution error
if (!$barang) {
    die("Error: " . mysqli_error($mysqli));
}

$users = mysqli_query($mysqli, "
SELECT *
FROM users
");
?>

<head>
    <title>Add Data</title>
</head>

<body>
    <h2>Add Data</h2>
    <p>
        <a href="transaksi.php">Home</a>
    </p>

    <form action="addActionTransaksi.php" method="post" name="add">
        <table width="25%" border="0">
            <tr>
                <td>Jumlah</td>
                <td><input type="number" name="jumlah"></td>
            </tr>
            <tr>
                <td>Total</td>
                <td><input type="number" name="total"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>Barang</td>
                <td>
                    <select name="id_barang">
                        <?php
                        while ($res = mysqli_fetch_assoc($barang)) {
                            echo "<option value='" . $res['id'] . "'>" . $res['nama'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>User</td>
                <td>
                    <select name="id_user">
                        <?php
                        while ($res = mysqli_fetch_assoc($users)) {
                            echo "<option value='" . $res['id'] . "'>" . $res['name'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>

</html>