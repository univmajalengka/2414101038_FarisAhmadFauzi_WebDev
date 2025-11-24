// Ambil elemen tombol hamburger dan menu navigasi
const btnMenu = document.getElementById("btn-menu");
const navMenu = document.getElementById("nav-menu");

// Tambahkan pendengar acara (Event Listener) saat tombol diklik
btnMenu.addEventListener("click", () => {
  // Cek apakah menu sedang tersembunyi (ada class 'hidden')
  if (navMenu.classList.contains("hidden")) {
    // JIKA TERSEMBUNYI -> TAMPILKAN
    navMenu.classList.remove("hidden");
    // Tambahkan class styling untuk tampilan mobile
    navMenu.classList.add(
      "absolute",
      "top-full",
      "left-0",
      "w-full",
      "bg-white",
      "p-6",
      "shadow-xl",
      "border-t",
      "border-gray-100"
    );
  } else {
    // JIKA TAMPIL -> SEMBUNYIKAN
    navMenu.classList.add("hidden");
    // Hapus class styling mobile biar bersih saat kembali ke desktop
    navMenu.classList.remove(
      "absolute",
      "top-full",
      "left-0",
      "w-full",
      "bg-white",
      "p-6",
      "shadow-xl",
      "border-t",
      "border-gray-100"
    );
  }
});
