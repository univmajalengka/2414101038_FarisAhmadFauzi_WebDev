<?php
include 'koneksi.php';


$id = $_POST['id'];
$nama = $_POST['nama_pemesan'];
$hp = $_POST['nomor_hp'];
$tgl = $_POST['tanggal_pesan'];
$waktu = $_POST['waktu_perjalanan'];


$layanan_id = $_POST['pelayanan_id']; 
if($layanan_id == '1000000') $nama_layanan = "Penginapan";
elseif($layanan_id == '1200000') $nama_layanan = "Transportasi";
else $nama_layanan = "Makan";

$peserta = $_POST['jumlah_peserta'];
$harga = $_POST['harga_paket'];
$tagihan = $_POST['jumlah_tagihan'];


$query = "UPDATE pesanan SET 
            nama_pemesan='$nama', 
            nomor_hp='$hp',
            tanggal_pesan='$tgl',
            waktu_perjalanan='$waktu',
            pelayanan_id='$nama_layanan',
            jumlah_peserta='$peserta',
            harga_paket='$harga',
            jumlah_tagihan='$tagihan'
          WHERE id='$id'";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Data Pesanan Berhasil Diperbarui!'); window.location='modifikasi_pesanan.php';</script>";
} else {
    echo "Gagal update: " . mysqli_error($conn);
}
?>