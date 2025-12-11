<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curug Ibun Pelangi</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              sans: ["Poppins", "sans-serif"],
            },
            colors: {
              "alam-gelap": "#166534",
              "alam-terang": "#22c55e",
              aksen: "#f97316",
            },
          },
        },
      };
    </script>

    <style>
      .scrollbar-hide::-webkit-scrollbar {
        display: none;
      }
      .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
      html {
        scroll-behavior: smooth;
      }
    </style>
  </head>
  <body
    class="bg-gray-50 text-gray-700 selection:bg-alam-terang selection:text-white"
  >
    <header
      class="bg-white/80 backdrop-blur-md fixed w-full top-0 z-50 shadow-sm border-b border-gray-100"
    >
      <div
        class="container mx-auto px-6 py-4 flex justify-between items-center"
      >
        <div class="flex items-center gap-2">
          <div
            class="w-8 h-8 bg-alam-gelap rounded-lg flex items-center justify-center text-white font-bold"
          >
            C
          </div>
          <div>
            <h1 class="text-xl font-bold text-gray-800 leading-none">
              Curug Ibun Pelangi
            </h1>
            <p class="text-[10px] text-gray-500 tracking-wider uppercase">
              Wisata Majalengka
            </p>
          </div>
        </div>

        <nav class="hidden lg:block">
          <ul
            class="flex gap-6 text-xs font-bold text-gray-600 uppercase tracking-wide items-center"
          >
            <li>
              <a href="#beranda" class="hover:text-alam-gelap transition"
                >Beranda</a
              >
            </li>
            <li>
              <a href="#about" class="hover:text-alam-gelap transition"
                >About</a
              >
            </li>
            <li>
              <a href="#obyek" class="hover:text-alam-gelap transition"
                >Fasilitas</a
              >
            </li>
            <li>
              <a
                href="#paket"
                class="text-alam-gelap bg-green-100 px-3 py-1 rounded-full"
                >Paket Wisata</a
              >
            </li>
            <li>
              <a href="#galeri" class="hover:text-alam-gelap transition"
                >Galeri</a
              >
            </li>
            <li>
  <a href="modifikasi_pesanan.php" class="text-red-500 hover:text-red-700 transition font-bold border border-red-200 bg-red-50 px-3 py-1 rounded-full">
    Data Pesanan 
  </a>
            </li>
          </ul>
        </nav>

        <div class="lg:hidden text-2xl text-gray-600 cursor-pointer">☰</div>
      </div>
    </header>

    <section id="beranda" class="pt-28 pb-10 px-6 container mx-auto">
      <div class="text-center mb-8">
        <h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-3">
          Keindahan <span class="text-alam-gelap">Curug Ibun Pelangi</span>
        </h2>
        <p class="text-gray-500 max-w-2xl mx-auto">
          Rasakan pengalaman wisata alam yang otentik dengan sentuhan budaya
          lokal yang masih terjaga.
        </p>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 h-[400px]">
        <div
          class="col-span-2 row-span-2 relative rounded-3xl overflow-hidden group cursor-pointer"
        >
          <img
            src="/images/halaman atas4.jpg"
            class="w-full h-full object-cover transition duration-700 group-hover:scale-110"
            alt="Utama"
          />
          <div
            class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-6"
          >
            <span class="text-white font-bold text-lg"
              >Golden Hour di Curug Ibun Pelangi</span
            >
          </div>
        </div>
        <div class="relative rounded-3xl overflow-hidden group cursor-pointer">
          <img
            src="/images/halaman atas1.jpg"
            class="w-full h-full object-cover transition duration-700 group-hover:scale-110"
            alt="Kecil 1"
          />
        </div>
        <div class="relative rounded-3xl overflow-hidden group cursor-pointer">
          <img
            src="/images/halaman atas2.jpg"
            class="w-full h-full object-cover transition duration-700 group-hover:scale-110"
            alt="Kecil 2"
          />
        </div>
        <div
          class="col-span-2 relative rounded-3xl overflow-hidden group cursor-pointer"
        >
          <img
            src="/images/halaman atas3.png"
            class="w-full h-full object-cover transition duration-700 group-hover:scale-110"
            alt="Panjang"
          />
          <div
            class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition"
          ></div>
        </div>
      </div>
    </section>

    <div class="sticky top-20 z-40 px-6 mb-10">
      <div
        class="container mx-auto bg-white rounded-2xl shadow-xl shadow-gray-100 border border-gray-100 p-2"
      >
        <ul class="flex items-center gap-2 overflow-x-auto scrollbar-hide">
          <li class="shrink-0">
            <a
              href="#paket"
              class="block px-6 py-2 bg-alam-gelap text-white rounded-xl text-sm font-medium"
              >Semua Paket</a
            >
          </li>
          <li class="shrink-0">
            <a
              href="#galeri"
              class="block px-6 py-2 hover:bg-gray-50 text-gray-600 rounded-xl text-sm font-medium transition"
              >Galeri</a
            >
          </li>
        </ul>
      </div>
    </div>

    <div class="container mx-auto px-6 pb-20">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
        <main class="lg:col-span-2 space-y-8" id="paket">
          <div class="flex items-center justify-between">
            <h3 class="text-2xl font-bold text-gray-800">
              Paket Terpopuler 🔥
            </h3>
            <a
              href="#"
              class="text-alam-gelap text-sm font-medium hover:underline"
              >Lihat Semua</a
            >
          </div>

          <div
            class="bg-white rounded-[2rem] p-4 shadow-lg shadow-gray-100 border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition duration-300 cursor-pointer flex flex-col md:flex-row gap-6"
          >
            <div
              class="w-full md:w-1/3 h-48 rounded-2xl overflow-hidden relative"
            >
              <img
                src="/images/jembatan 2.avif"
                class="w-full h-full object-cover"
                alt="Paket 1"
              />
              <div
                class="absolute top-3 left-3 bg-white/90 backdrop-blur text-xs font-bold px-3 py-1 rounded-full text-aksen"
              >
                BEST SELLER
              </div>
            </div>
            <div class="flex-1 flex flex-col justify-center">
              <div class="flex justify-between items-start mb-2">
                <h4 class="text-xl font-bold text-gray-800">
                  Tiket Reguler Curug Ibun
                </h4>
                <div class="flex text-yellow-400 text-sm">★★★★★</div>
              </div>
              <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                Akses penuh ke area wisata, jembatan gantung, dan spot foto
                tebing lava.
              </p>
              <div
                class="mt-auto flex items-center justify-between border-t border-gray-100 pt-4"
              >
                <div>
                  <span class="text-xs text-gray-400 uppercase"
                    >Harga Tiket</span
                  >
                  <div class="text-xl font-bold text-alam-gelap">
                    Rp 15.000<span class="text-xs font-normal text-gray-400"
                      >/org</span
                    >
                  </div>
                </div>
               <a href="pemesanan.php" class="w-10 h-10 rounded-full bg-gray-50 text-alam-gelap flex items-center justify-center hover:bg-alam-gelap hover:text-white transition">
                  ➜
              </a>
              </div>
            </div>
          </div>

          <div
            class="bg-white rounded-[2rem] p-4 shadow-lg shadow-gray-100 border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition duration-300 cursor-pointer flex flex-col md:flex-row gap-6"
          >
            <div
              class="w-full md:w-1/3 h-48 rounded-2xl overflow-hidden relative"
            >
              <img
                src="/images/golden hour.jpg"
                class="w-full h-full object-cover"
                alt="Paket 2"
              />
              <div
                class="absolute top-3 left-3 bg-aksen text-white text-xs font-bold px-3 py-1 rounded-full"
              >
                PROMO
              </div>
            </div>
            <div class="flex-1 flex flex-col justify-center">
              <div class="flex justify-between items-start mb-2">
                <h4 class="text-xl font-bold text-gray-800">
                  Paket Hunting Foto + Guide
                </h4>
                <div class="flex text-yellow-400 text-sm">★★★★☆</div>
              </div>
              <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                Dapatkan foto terbaik di jam emas (golden hour) dengan bantuan
                pemandu lokal.
              </p>
              <div
                class="mt-auto flex items-center justify-between border-t border-gray-100 pt-4"
              >
                <div>
                  <span class="text-xs text-gray-400 uppercase"
                    >Harga Paket</span
                  >
                  <div class="text-xl font-bold text-aksen">
                    Rp 50.000<span class="text-xs font-normal text-gray-400"
                      >/paket</span
                    >
                  </div>
                </div>
                <a href="pemesanan.php" class="w-10 h-10 rounded-full bg-gray-50 text-alam-gelap flex items-center justify-center hover:bg-alam-gelap hover:text-white transition">
                  ➜
                </a>
              </div>
            </div>
          </div>
        </main>

        <aside class="space-y-8">
          <div
            class="bg-black rounded-[2.5rem] p-2 shadow-2xl overflow-hidden border-4 border-gray-800 relative"
          >
            <div
              class="absolute top-0 left-1/2 -translate-x-1/2 w-24 h-6 bg-gray-800 rounded-b-xl z-20"
            ></div>

            <div
              class="relative w-full aspect-[9/16] rounded-[2rem] overflow-hidden bg-gray-900 group cursor-pointer"
            >
              <a
                href="https://www.youtube.com/watch?v=qAKKY1ijQrk"
                target="_blank"
              >
                <img
                  src="https://img.youtube.com/vi/qAKKY1ijQrk/maxresdefault.jpg"
                  class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition duration-500"
                  alt="Video Thumbnail"
                />

                <div
                  class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 bg-white/20 backdrop-blur rounded-full flex items-center justify-center border border-white/30 group-hover:scale-110 transition"
                >
                  <svg
                    class="w-8 h-8 text-white fill-current ml-1"
                    viewBox="0 0 24 24"
                  >
                    <path d="M3 22v-20l18 10-18 10z" />
                  </svg>
                </div>

                <div
                  class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/90 to-transparent p-6 pt-20 pointer-events-none"
                >
                  <p class="text-white font-bold text-lg">
                    Intip Keseruan Curug Ibun Pelangi
                  </p>
                  <p class="text-gray-300 text-xs">Klik untuk menonton video</p>
                </div>
              </a>
            </div>
          </div>

          <div
            id="pemesanan"
            class="bg-gradient-to-br from-alam-gelap to-alam-terang rounded-3xl p-6 text-white shadow-lg shadow-green-200 relative overflow-hidden"
          >
            <div
              class="absolute -right-5 -top-5 w-24 h-24 bg-white/10 rounded-full blur-xl"
            ></div>
            <h4 class="font-bold text-lg mb-2">Bingung Pilih Paket ya?</h4>
            <p class="text-sm text-green-50 mb-4 opacity-90">
              Chat aja biar gampang xixi.
            </p>
            <button
              class="w-full py-3 bg-white text-alam-gelap font-bold rounded-xl text-sm hover:bg-gray-100 transition"
            >
              Hubungi Wangsapp
            </button>
          </div>
        </aside>
      </div>
    </div>

    <div class="bg-white pt-10 pb-20">
      <div class="container mx-auto px-6 space-y-16">
        <section id="about">
          <div class="flex flex-col md:flex-row items-center gap-8">
            <div class="md:w-1/2">
              <h3 class="text-3xl font-bold text-gray-800 mb-4">
                About <span class="text-alam-gelap">Curug Ibun Pelangi</span>
              </h3>
              <p class="text-gray-600 mb-6 text-justify">
                Dijuluki sebagai "Green Canyon"-nya Majalengka, Curug Ibun
                Pelangi menawarkan keindahan tebing batu lava yang menjulang
                tinggi mengapit aliran sungai jernih.
              </p>
              <div id="obyek" class="grid grid-cols-2 gap-4">
                <div class="p-4 bg-green-50 rounded-xl border border-green-100">
                  <span class="text-2xl">🧗</span>
                  <h5 class="font-bold text-sm mt-1">Tebing Lava</h5>
                </div>
                <div class="p-4 bg-green-50 rounded-xl border border-green-100">
                  <span class="text-2xl">📸</span>
                  <h5 class="font-bold text-sm mt-1">Ray of Light</h5>
                </div>
              </div>
            </div>
            <div class="md:w-1/2">
              <img
                src="/images/curug ibun.jpg"
                class="rounded-3xl shadow-lg rotate-2 border-4 border-white"
              />
            </div>
          </div>
        </section>

        <section id="fasilitas" class="text-center">
          <h3 class="text-2xl font-bold text-gray-800 mb-6">
            Fasilitas Wisata
          </h3>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="p-4 bg-gray-50 rounded-xl">🅿️ Parkir Luas</div>
            <div class="p-4 bg-gray-50 rounded-xl">🕌 Mushola</div>
            <div class="p-4 bg-gray-50 rounded-xl">🚿 Toilet Bersih</div>
            <div class="p-4 bg-gray-50 rounded-xl">☕ Warung Makan</div>
          </div>
        </section>

        <section id="galeri">
          <h3 class="text-2xl font-bold text-gray-800 mb-6">
            Galeri Pengunjung 📸
          </h3>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <img
              src="/images/maps.png"
              class="rounded-2xl hover:scale-105 transition"
            />
            <img
              src="/images/pengunjung3.webp"
              class="rounded-2xl hover:scale-105 transition"
            />
            <img
              src="/images/pengunjung.webp"
              class="rounded-2xl hover:scale-105 transition"
            />
            <div
              class="bg-gray-100 rounded-2xl flex items-center justify-center font-bold text-gray-400 cursor-pointer hover:bg-gray-200"
            >
              + More
            </div>
          </div>
        </section>
      </div>
    </div>

    <footer class="bg-white border-t border-gray-100 py-10 mt-10">
      <div
        class="container mx-auto px-6 text-center md:text-left flex flex-col md:flex-row justify-between items-center gap-4"
      >
        <div>
          <h5 class="font-bold text-gray-800">Wisata Curug</h5>
          <p class="text-sm text-gray-500">Majalengka</p>
        </div>
      </div>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
