
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Desa XYZ - Website Resmi</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  
  <style>
   .swiper {
    width: 600px;
    height: 300px;
  }

  /* Tambahkan animasi dan transisi pada tombol */
  .learn-more-btn {
    background-color: #38a169; /* Hijau */
    padding: 12px 24px;
    color: white;
    border-radius: 8px;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.3s ease;
    display: inline-block;
  }

  /* Efek hover */
  .learn-more-btn:hover {
    background-color: #2f855a; /* Warna hijau lebih gelap */
    transform: scale(1.05); /* Sedikit memperbesar */
  }

  /* Efek klik untuk animasi */
  .learn-more-btn:active {
    transform: scale(0.95);
    transition: transform 0.1s ease;
  }
  </style>

</head>
<body class="bg-gray-100 text-gray-800">

<x-navbar-layout>
  
  <!-- Hero Section -->
  <section class="bg-cover bg-center h-screen" style="background-image: url('/image/fd1.jpg');">
    <div class="bg-black bg-opacity-50 h-full flex flex-col items-center justify-center text-center text-white px-6">
      <h2 class="text-4xl font-bold mb-4">Selamat Datang di Desa XYZ</h2>
      <p class="text-lg mb-6">Desa yang asri dan penuh dengan keindahan alam serta keramahan warga.</p>
      <a href="#about"  class="learn-more-btn">Lihat Lebih Lanjut</a>
    </div>
  </section>

  
  <!-- About Section -->
  <section id="about" class="py-16 bg-white text-center">
    <div class="container mx-auto px-6">
        <h3 class="text-3xl font-semibold mb-4">Tentang Desa XYZ</h3>
        <p class="text-gray-700 mb-8">Desa XYZ adalah desa yang terletak di kaki gunung...</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <x-service-card title="Sejarah Desa" description="Sejarah desa kami bermula dari..." />
            <x-service-card title="Budaya dan Tradisi" description="Berbagai macam tradisi dan budaya khas..." />
        </div>
    </div>
</section>

  <!-- Services Section -->
  <section id="services" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
      <h3 class="text-3xl font-semibold mb-4">Layanan Desa</h3>
      <br>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h4 class="text-xl font-semibold mb-2">Administrasi Kependudukan</h4>
          <p class="text-gray-600">Layanan pengurusan administrasi kependudukan seperti KTP, KK, dan lainnya.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h4 class="text-xl font-semibold mb-2">Pelayanan Kesehatan</h4>
          <p class="text-gray-600">Fasilitas Kesehatan untuk Warga Desa dengan Layanan Kesehatan Dasar dan Ambulan.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h4 class="text-xl font-semibold mb-2">Lapor Pemerintah Desa</h4>
          <p class="text-gray-600">Pelaporan Desa terkait hal yang diperlukan.</p>
        </div>
      </div>


      <br>
      <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow">
          <div class="flex w-full items-center justify-between space-x-6 p-6">
            <div class="flex-1 truncate">
              <div class="flex items-center space-x-3">
                <h3 class="truncate text-sm font-medium text-gray-900">Pablo Escobar</h3>
              </div>
              <p class="mt-1 truncate text-start text-sm text-gray-500">Administrasi Kependudukan</p>
            </div>
            <img class="h-10 w-10 flex-shrink-0 rounded-full bg-gray-300" src="/image/fpd.jpg" alt="">
          </div>
          <div>
            <div class="-mt-px flex divide-x divide-gray-200">
              <div class="-ml-px flex w-0 flex-1">
                <a href="tel:+1-202-555-0170" class="relative inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-br-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                  <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                  </svg>
                  Call
                </a>
              </div>
            </div>
          </div>
        </li>
      
        <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow">
          <div class="flex w-full items-center justify-between space-x-6 p-6">
            <div class="flex-1 truncate">
              <div class="flex items-center space-x-3">
                <h3 class="truncate text-sm font-medium text-gray-900">Erwin Romel</h3>
              </div>
              <p class="mt-1 truncate text-sm text-start text-gray-500">Pelayanan Kesehatan</p>
            </div>
            <img class="h-10 w-10 flex-shrink-0 rounded-full bg-gray-300" src="/image/fpd2.jpg" alt="">
          </div>
          <div>
            <div class="-mt-px flex divide-x divide-gray-200">
              <div class="-ml-px flex w-0 flex-1">
                <a href="tel:+1-202-555-0170" class="relative inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-br-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                  <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                  </svg>
                  Call
                </a>
              </div>
            </div>
          </div>
        </li>

        <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow">
          <div class="flex w-full items-center justify-between space-x-6 p-6">
            <div class="flex-1 truncate">
              <div class="flex items-center space-x-3">
                <h3 class="truncate text-sm font-medium text-gray-900">Olaf Scholz</h3>
              </div>
              <p class="mt-1 truncate text-start text-sm text-gray-500">Lapor Pemerintah Desa</p>
            </div>
            <img class="h-10 w-10 flex-shrink-0 rounded-full bg-gray-300" src="/image/fpd3.jpg" alt="">
          </div>
          <div>
            <div class="-mt-px flex divide-x divide-gray-200">
              <div class="-ml-px flex w-0 flex-1">
                <a href="tel:+1-202-555-0170" class="relative inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-br-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                  <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                  </svg>
                  Call
                </a>
              </div>
            </div>
          </div>
        </li>
   
     
      <!-- More people... -->
    </ul>

  </section>
 
<!-- Galeri Desa -->
<section id="gallery" class="py-16 bg-white">
  <div class="container mx-auto px-6 text-center">
    <h3 class="text-3xl font-semibold mb-4">Galeri Desa</h3>
  </div>
  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">
          <img src="/image/fd2.jpg" alt="Galeri Desa" class="w-full h-full object-cover rounded-lg shadow-md">
      </div>
      <div class="swiper-slide">
        <img src="/image/fd3.jpg" alt="Galeri Desa" class="w-full h-full object-cover rounded-lg shadow-md">
      </div>
      <div class="swiper-slide">
        <img src="/image/fd4.jpg" alt="Galeri Desa" class="w-full h-full object-cover rounded-lg shadow-md">
      </div>
    </div>

    </section>
      

  <!-- Contact Section -->
  <section id="contact" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
      <h3 class="text-3xl font-semibold mb-4">Kontak Kami</h3>
      <form class="max-w-lg mx-auto mt-8">
        <div class="mb-4">
          <input type="text" placeholder="Nama" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-600">
        </div>
        <div class="mb-4">
          <input type="email" placeholder="Email" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-600">
        </div>
        <div class="mb-4">
          <textarea placeholder="Pesan" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-600"></textarea>
        </div>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Kirim Pesan</button>
      </form>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper('.swiper' , {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },

  // document.getElementById('menu-toggle').addEventListener('click', function () {
  //     var menu = document.getElementById('mobile-menu');
  //     menu.classList.toggle('hidden');
  //   });
});


 

   // Smooth scroll saat tombol ditekan
   document.querySelector('.learn-more-btn').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('#about').scrollIntoView({ behavior: 'smooth' });
  });

  </script>
</body>
</html>

</x-navbar-layout>