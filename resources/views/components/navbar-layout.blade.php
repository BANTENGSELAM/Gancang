<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Tambahkan Chart.js -->
</head>
<body>
  <!-- Header (Navbar) -->
  <header class="bg-green-700 text-white">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
      <!-- Logo Desa -->
      <div class="flex items-center">
        <img src="/image/logokabupatenbanyumaskosong.png" alt="Logo Desa" class="h-16 w-auto mr-3">
        <div>
          <h1 class="text-xl font-semibold">Desa Gancang</h1>
          <p>Kecamatan Gumelar Banyumas</p>
        </div>
      </div>

      <!-- Tombol Toggle untuk Mobile -->
      <button id="menu-toggle" class="md:hidden flex items-center text-white focus:outline-none">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>

      <!-- Menu Utama -->
      <nav id="mobile-menu" class="hidden md:flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 text-center mt-4 md:mt-0">
        <a href="/" class="hover:text-gray-200">Beranda</a>

        <!-- Dropdown Lembaga Desa -->
        <div class="relative group">
          <button class="hover:text-gray-200 focus:outline-none">Lembaga Desa</button>
          <div class="absolute hidden group-hover:block md:group-hover:block bg-white text-gray-800 py-2 rounded shadow-md">
            <a href="/pemerintahdesa" class="block px-4 py-2 hover:bg-gray-200">Pemerintah Desa</a>
            <a href="/masyarakat" class="block px-4 py-2 hover:bg-gray-200">Masyarakat</a>
            <a href="/perekonomian" class="block px-4 py-2 hover:bg-gray-200">Potensi Ekonomi</a>
          </div>
        </div>

        <!-- Dropdown Keuangan Desa -->
        <div class="relative group">  
        <a href="/lkdikd" class="hover:text-gray-200">Data Keuangan</a>
        </div>


        <!-- Link Berita Desa -->
        <div class="relative group">
        <a href="{{ route('beritapublik') }}" class="hover:text-gray-200">Berita Desa</a>
        </div>

      </nav>
    </div>
  </header>

  <main class="">
    {{$slot}}
  </main>

 

  <!-- JavaScript for Toggle Menu -->
  <script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
      var menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    });
  </script>

   <!-- Footer -->
   <footer class="  bg-green-700 text-white py-4">
    <div class="container mx-auto px-6 text-center">
        <p>&copy; 2024 Desa XYZ. Hak cipta dilindungi.</p>
    </div>
</footer>

</body>
</html>
