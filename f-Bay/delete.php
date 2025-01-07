<?php
include "config.php";

// field ID (nanti implement TOKEN kalau tidak malas :3
$type = $_GET["type"];
$id = (int) $_GET["id"];

$table = $type === "makanan" ? "tbl_makanan" : "tbl_minuman";
$id_field = $type === "makanan" ? "id_makanan" : "id_minuman";

$sql = "DELETE FROM $table WHERE $id_field = ?";
$stmt = executeQuery($conn, $sql, ["i", $id]);

if ($stmt) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Error deleting data!');</script>";
}
?>
