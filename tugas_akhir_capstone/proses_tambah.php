<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_pemesan'];
    $hp = $_POST['nomor_hp'];
    $tgl = $_POST['tanggal_pesan'];
    $waktu = $_POST['waktu_perjalanan'];
    
    $layanan = $_POST['pelayanan_id']; 
    if($layanan == '1000000') $nama_layanan = "Penginapan";
    elseif($layanan == '1200000') $nama_layanan = "Transportasi";
    else $nama_layanan = "Makan";

    $peserta = $_POST['jumlah_peserta'];
    $harga = $_POST['harga_paket'];
    $tagihan = $_POST['jumlah_tagihan'];

 
    $query = "INSERT INTO pesanan VALUES (NULL, '$nama', '$hp', '$tgl', '$waktu', '$nama_layanan', '$peserta', '$harga', '$tagihan')";
    
    if (mysqli_query($conn, $query)) {
        
        echo "<script>alert('Pesanan Berhasil!'); window.location='modifikasi_pesanan.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>