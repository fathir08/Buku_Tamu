<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
</head>
<body>
    <h1>Buku Tamu</h1>
    <form action="proses.php" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" required><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br>

        <label for="isi">Isi:</label><br>
        <textarea name="pesan" required></textarea><br><br>

        <button type="submit">Kirim</button>
        <button type="button"><a href="Buku_tamu.php">Tampilkan Data</button>
    </form>
</body>
</html>

