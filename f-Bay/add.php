<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kuliner</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Data Kuliner</h2>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis</label>
            <select name="jenis" class="form-control" required>
                <option value="makanan">Makanan</option>
                <option value="minuman">Minuman</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="daerah" class="form-label">Daerah / Jenis</label>
            <input type="text" name="daerah" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?php if (isset($_POST["submit"])) {
    $jenis = $_POST["jenis"];
    $nama = htmlspecialchars($_POST["nama"]);
    $daerah = htmlspecialchars($_POST["daerah"]);
    $keterangan = htmlspecialchars($_POST["keterangan"]);

    if ($jenis === "makanan") {
        $sql =
            "INSERT INTO tbl_makanan (nama_makanan, daerah_makanan, keterangan) VALUES (?, ?, ?)";
    } else {
        $sql =
            "INSERT INTO tbl_minuman (nama_minuman, jenis_minuman, keterangan) VALUES (?, ?, ?)";
    }

    $stmt = executeQuery($conn, $sql, ["sss", $nama, $daerah, $keterangan]);

    if ($stmt) {
        echo "<script>alert('Data berhasil disimpan!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Error menyimpan data!');</script>";
    }
} ?>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
