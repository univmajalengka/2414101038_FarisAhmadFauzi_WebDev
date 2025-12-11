<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan - Curug Ibun</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-700">

    <nav class="bg-white shadow-sm p-4 mb-8">
        <div class="container mx-auto">
            <a href="index.php" class="font-bold text-green-700">← Kembali ke Beranda</a>
        </div>
    </nav>

    <div class="container mx-auto px-6 max-w-2xl pb-20">
        <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Form Pemesanan Paket</h2>

            <form action="proses_tambah.php" method="POST" id="formPesan">
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-bold mb-1">Nama Pemesan</label>
                        <input type="text" name="nama_pemesan" required class="w-full p-3 border rounded-xl bg-gray-50 focus:ring-2 focus:ring-green-500 outline-none">
                    </div>

                    <div>
                        <label class="block text-sm font-bold mb-1">Nomor HP / WhatsApp</label>
                        <input type="number" name="nomor_hp" required class="w-full p-3 border rounded-xl bg-gray-50 focus:ring-2 focus:ring-green-500 outline-none">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-bold mb-1">Tanggal Wisata</label>
                            <input type="date" name="tanggal_pesan" required class="w-full p-3 border rounded-xl bg-gray-50 outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-bold mb-1">Durasi (Hari)</label>
                            <input type="number" id="waktu" name="waktu_perjalanan" min="1" value="1" required class="w-full p-3 border rounded-xl bg-gray-50 outline-none">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold mb-1">Pilih Layanan Tambahan</label>
                        <select id="layanan" name="pelayanan_id" class="w-full p-3 border rounded-xl bg-gray-50 outline-none">
                            <option value="0">-- Pilih Paket --</option>
                            <option value="1000000">Penginapan (Rp 1.000.000)</option>
                            <option value="1200000">Transportasi (Rp 1.200.000)</option>
                            <option value="500000">Service Makan (Rp 500.000)</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-bold mb-1">Jumlah Peserta</label>
                        <input type="number" id="peserta" name="jumlah_peserta" min="1" value="1" required class="w-full p-3 border rounded-xl bg-gray-50 outline-none">
                    </div>

                    <div class="bg-green-50 p-4 rounded-xl border border-green-100 space-y-2">
                        <div class="flex justify-between text-sm">
                            <span>Harga Paket:</span>
                            <span id="txt_harga" class="font-bold">Rp 0</span>
                        </div>
                        <div class="flex justify-between text-lg font-bold text-green-800 border-t pt-2 border-green-200">
                            <span>Total Tagihan:</span>
                            <span id="txt_total">Rp 0</span>
                        </div>
                        <input type="hidden" name="harga_paket" id="input_harga">
                        <input type="hidden" name="jumlah_tagihan" id="input_total">
                    </div>

                    <button type="submit" name="simpan" class="w-full bg-green-700 text-white font-bold py-4 rounded-xl hover:bg-green-800 transition shadow-lg shadow-green-200">
                        Konfirmasi Pesanan
                    </button>
                </div>
            </form>
        </div>
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

        
        inputWaktu.addEventListener('input', hitung);
        selectLayanan.addEventListener('change', hitung);
        inputPeserta.addEventListener('input', hitung);
    </script>
</body>
</html>