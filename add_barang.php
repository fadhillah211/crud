<html>

<head>
    <title>Add Data</title>
</head>

<body>
    <h2>Add Data</h2>
    <p>
        <a href="barang.php">Home</a>
    </p>

    <form action="addActionBarang.php" method="post" name="add">
        <table width="25%" border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>

</html>