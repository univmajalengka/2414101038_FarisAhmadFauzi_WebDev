<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM pesanan WHERE id = '$id'";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='modifikasi_pesanan.php';</script>";
} else {
    echo "Gagal menghapus: " . mysqli_error($conn);
}
?>