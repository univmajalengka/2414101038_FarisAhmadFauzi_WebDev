<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM pesanan WHERE id = '$id'");
$data = mysqli_fetch_array($query);


$current_layanan = 0;
if($data['pelayanan_id'] == 'Penginapan') $current_layanan = 1000000;
elseif($data['pelayanan_id'] == 'Transportasi') $current_layanan = 1200000;
elseif($data['pelayanan_id'] == 'Makan') $current_layanan = 500000;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Pesanan Lengkap</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans p-6">
    <div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-gray-100">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Data Pesanan</h2>
        
        <form action="proses_edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            
            <div class="space-y-4">
                <div>
                    <label class="block font-bold text-sm mb-1">Nama Pemesan</label>
                    <input type="text" name="nama_pemesan" value="<?php echo $data['nama_pemesan']; ?>" class="w-full border bg-gray-50 p-3 rounded-lg outline-none focus:ring-2 focus:ring-green-500" required>
                </div>
                
                <div>
                    <label class="block font-bold text-sm mb-1">Nomor HP</label>
                    <input type="text" name="nomor_hp" value="<?php echo $data['nomor_hp']; ?>" class="w-full border bg-gray-50 p-3 rounded-lg outline-none focus:ring-2 focus:ring-green-500" required>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-bold mb-1">Tanggal Wisata</label>
                        <input type="date" name="tanggal_pesan" value="<?php echo $data['tanggal_pesan']; ?>" class="w-full p-3 border rounded-lg bg-gray-50 outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold mb-1">Durasi (Hari)</label>
                        <input type="number" id="waktu" name="waktu_perjalanan" min="1" value="<?php echo $data['waktu_perjalanan']; ?>" class="w-full p-3 border rounded-lg bg-gray-50 outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold mb-1">Pilih Layanan</label>
                    <select id="layanan" name="pelayanan_id" class="w-full p-3 border rounded-lg bg-gray-50 outline-none">
                        <option value="1000000" <?php if($current_layanan == 1000000) echo 'selected'; ?>>Penginapan (Rp 1.000.000)</option>
                        <option value="1200000" <?php if($current_layanan == 1200000) echo 'selected'; ?>>Transportasi (Rp 1.200.000)</option>
                        <option value="500000" <?php if($current_layanan == 500000) echo 'selected'; ?>>Service Makan (Rp 500.000)</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-bold mb-1">Jumlah Peserta</label>
                    <input type="number" id="peserta" name="jumlah_peserta" min="1" value="<?php echo $data['jumlah_peserta']; ?>" class="w-full p-3 border rounded-lg bg-gray-50 outline-none">
                </div>

                <div class="bg-green-50 p-4 rounded-xl border border-green-100 space-y-2">
                    <div class="flex justify-between text-sm">
                        <span>Harga Paket (Per Unit):</span>
                        <span id="txt_harga" class="font-bold">Rp 0</span>
                    </div>
                    <div class="flex justify-between text-lg font-bold text-green-800 border-t pt-2 border-green-200">
                        <span>Total Tagihan Baru:</span>
                        <span id="txt_total">Rp 0</span>
                    </div>
                    <input type="hidden" name="harga_paket" id="input_harga">
                    <input type="hidden" name="jumlah_tagihan" id="input_total">
                </div>

                <div class="flex gap-2 pt-4">
                    <a href="modifikasi_pesanan.php" class="w-1/3 bg-gray-200 text-gray-700 py-3 rounded-lg font-bold text-center">Batal</a>
                    <button type="submit" class="w-2/3 bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition">Simpan Perubahan</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        const inputWaktu = document.getElementById('waktu');
        const selectLayanan = document.getElementById('layanan');
        const inputPeserta = document.getElementById('peserta');
        
        const txtHarga = document.getElementById('txt_harga');
        const txtTotal = document.getElementById('txt_total');
        const inputHargaHide = document.getElementById('input_harga');
        const inputTotalHide = document.getElementById('input_total');

        function hitung() {
            let harga = parseFloat(selectLayanan.value) || 0;
            let waktu = parseFloat(inputWaktu.value) || 0;
            let peserta = parseFloat(inputPeserta.value) || 0;

            let total = waktu * peserta * harga;

            txtHarga.innerText = "Rp " + harga.toLocaleString('id-ID');
            txtTotal.innerText = "Rp " + total.toLocaleString('id-ID');

            inputHargaHide.value = harga;
            inputTotalHide.value = total;
        }

        
        hitung();


        inputWaktu.addEventListener('input', hitung);
        selectLayanan.addEventListener('change', hitung);
        inputPeserta.addEventListener('input', hitung);
    </script>
</body>
</html>