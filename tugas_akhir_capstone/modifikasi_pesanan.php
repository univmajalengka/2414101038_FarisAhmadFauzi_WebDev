<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-700">

    <nav class="bg-white shadow-sm p-4 mb-8">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="font-bold text-xl text-green-700">Admin Dashboard</h1>
            <a href="index.php" class="text-sm bg-green-100 text-green-700 px-4 py-2 rounded-full hover:bg-green-200 transition">Ke Beranda</a>
        </div>
    </nav>

    <div class="container mx-auto px-6 pb-20">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Daftar Pesanan Masuk</h2>
            <a href="pemesanan.php" class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-green-700 transition">+ Tambah Pesanan</a>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-green-700 text-white">
                        <tr>
                            <th class="p-4 text-sm font-semibold">No</th>
                            <th class="p-4 text-sm font-semibold">Nama Pemesan</th>
                            <th class="p-4 text-sm font-semibold">Tanggal Wisata</th>
                            <th class="p-4 text-sm font-semibold">Layanan</th>
                            <th class="p-4 text-sm font-semibold">Jml Peserta</th>
                            <th class="p-4 text-sm font-semibold">Total Tagihan</th>
                            <th class="p-4 text-sm font-semibold text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        
                        $query = mysqli_query($conn, "SELECT * FROM pesanan ORDER BY id DESC");
                        
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="p-4 text-sm text-gray-500"><?php echo $no++; ?></td>
                            <td class="p-4 font-medium text-gray-800"><?php echo $data['nama_pemesan']; ?>
                                <div class="text-xs text-gray-400"><?php echo $data['nomor_hp']; ?></div>
                            </td>
                            <td class="p-4 text-sm"><?php echo $data['tanggal_pesan']; ?></td>
                            <td class="p-4 text-sm">
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-md text-xs font-bold">
                                    <?php echo $data['pelayanan_id']; ?>
                                </span>
                            </td>
                            <td class="p-4 text-sm text-center"><?php echo $data['jumlah_peserta']; ?></td>
                            <td class="p-4 text-sm font-bold text-green-600">
                                Rp <?php echo number_format($data['jumlah_tagihan'], 0, ',', '.'); ?>
                            </td>
                            <td class="p-4 text-center space-x-2">
                                <a href="form_edit.php?id=<?php echo $data['id']; ?>" 
                                   class="inline-block bg-yellow-400 text-white p-2 rounded-lg hover:bg-yellow-500 transition" title="Edit">
                                   ✏️
                                </a>
                                
                                <a href="proses_hapus.php?id=<?php echo $data['id']; ?>" 
                                   onclick="return confirm('Yakin ingin menghapus data pesanan atas nama <?php echo $data['nama_pemesan']; ?>?')"
                                   class="inline-block bg-red-500 text-white p-2 rounded-lg hover:bg-red-600 transition" title="Hapus">
                                   🗑️
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            
            <?php if(mysqli_num_rows($query) == 0) { ?>
                <div class="p-8 text-center text-gray-400">Belum ada data pesanan.</div>
            <?php } ?>
        </div>
    </div>

</body>
</html>