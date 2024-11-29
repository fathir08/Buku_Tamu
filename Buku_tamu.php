<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Buku Tamu</title>
</head>
<body>
    <h1>Daftar Buku Tamu</h1>
    <?php
    $sql = "SELECT * FROM buku_tamu";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1''>
                <tr>
                    <th>ID_BT</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>ISI</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['ID_BT'] . "</td>
                    <td>" . $row['NAMA'] . "</td>
                    <td>" . $row['EMAIL'] . "</td>
                    <td>" . $row['ISI'] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Belum ada data.</p>";
    }
    ?>

    <!-- Tombol Kembali -->
    <div style="margin-top: 20px;">
        <button type="button"><a href="index.php">Kembali ke Form</button>
    </div>

    <?php $conn->close(); ?>
</body>
</html>
