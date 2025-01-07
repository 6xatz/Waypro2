<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>f-Bay Kuliner</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        .card {
            width: 18rem;
            margin-bottom: 20px;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .header {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            align-items: center;
            padding: 20px;
            background-color: #007bff;
            color: white;
        }
        .header h2 {
            margin: 0;
        }
        .btn-about {
            background-color: #0056b3;
            color: white;
            border: none;
            margin-left: 10px;
            padding: 8px 15px;
            font-size: 14px;
            cursor: pointer;
        }
        .btn-about:hover {
            background-color: #003f8c;
        }
        .footer {
            text-align: center;
            padding: 15px;
            background-color: #f8f9fa;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>f-Bay Kuliner</h2>
        <div>
            <a href="add.php" class="btn btn-success me-2">Tambahkan Data</a>
            <button class="btn-about" data-bs-toggle="modal" data-bs-target="#aboutModal">About</button>
        </div>
    </div>

    <div class="container mt-5">
        <h4 class="mb-4">Daftar Makanan</h4>
        <div class="row">
            <?php
            $stmt = $conn->prepare("SELECT * FROM tbl_makanan");
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                echo renderCard(
                    "makanan",
                    $row["id_makanan"],
                    $row["foto_makanan"],
                    $row["nama_makanan"],
                    $row["daerah_makanan"],
                    $row["keterangan"]
                );
            }
            ?>
        </div>

        <h4 class="mt-4 mb-4">Daftar Minuman</h4>
        <div class="row">
            <?php
            $stmt = $conn->prepare("SELECT * FROM tbl_minuman");
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                echo renderCard(
                    "minuman",
                    $row["id_minuman"],
                    $row["foto_minuman"],
                    $row["nama_minuman"],
                    $row["jenis_minuman"],
                    $row["keterangan"]
                );
            }
            ?>
        </div>

        <h4 class="mt-5">Jadwal Restock</h4>
		</br>
        <table id="restockTable" class="display">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Tanggal Restock</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Nasi Goreng</td><td>Makanan</td><td>1 Januari 2025</td></tr>
                <tr><td>Mie Goreng</td><td>Makanan</td><td>4 Januari 2025</td></tr>
                <tr><td>Kelp Shake</td><td>Minuman</td><td>5 Januari 2025</td></tr>
                <tr><td>ABC Soya Milk</td><td>Minuman</td><td>5 Januari 2025</td></tr>
            </tbody>
        </table>
    </div>

    <div class="footer">
        <p>&copy; 2024 f-Bay Kuliner. All Rights Reserved.</p>
    </div>

    <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aboutModalLabel">About f-Bay Kuliner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>f-Bay Kuliner</strong> adalah proyek sederhana untuk manajemen data makanan dan minuman berbasis web.</p>
                    <p><strong>To-Do:</strong></p>
                    <ul>
                        <li>Implementasi sistem token dan auth.</li>
                        <li>Penambahan fitur pencarian dan filter data.</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#restockTable').DataTable();
        });
    </script>
</body>
</html>

<?php function renderCard($type, $id, $image, $name, $detail, $description)
{
    $label = $type === "makanan" ? "Daerah" : "Jenis";
    return "
    <div class='col-md-4'>
        <div class='card'>
            <img src='img/{$image}' class='card-img-top' alt='{$name}'>
            <div class='card-body'>
                <h5 class='card-title'>{$name}</h5>
                <p class='card-text'>{$label}: {$detail}</p>
                <p class='card-text'>Keterangan: {$description}</p>
                <a href='edit.php?type={$type}&id={$id}' class='btn btn-warning btn-sm'>Edit</a>
                <a href='delete.php?type={$type}&id={$id}' class='btn btn-danger btn-sm'>Hapus</a>
            </div>
        </div>
    </div>";
}
?>
