<x-navbar-layout>
    <div class="max-w-7xl mx-auto px-6 py-12">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Masyarakat Desa Gancang</h1>
        
        <!-- Statistik Penduduk -->
        <section class="mb-12">
            <h2 class="text-3xl font-semibold text-gray-700 mb-4">Statistik Penduduk</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Total Penduduk -->
                <div class="bg-blue-100 p-6 rounded-lg shadow-lg text-center">
                    <h3 class="text-2xl font-semibold text-gray-800">Total Penduduk</h3>
                    <p class="text-4xl font-bold text-blue-600 mt-4">10,345</p>
                </div>
    
                <!-- Jumlah Pria -->
                <div class="bg-green-100 p-6 rounded-lg shadow-lg text-center">
                    <h3 class="text-2xl font-semibold text-gray-800">Jumlah Pria</h3>
                    <p class="text-4xl font-bold text-green-600 mt-4">6,200</p>
                </div>
    
                <!-- Jumlah Wanita -->
                <div class="bg-pink-100 p-6 rounded-lg shadow-lg text-center">
                    <h3 class="text-2xl font-semibold text-gray-800">Jumlah Wanita</h3>
                    <p class="text-4xl font-bold text-pink-600 mt-4">6,145</p>
                </div>
            </div>
        </section>
    
        <!-- Grafik Kependudukan -->
        <section class="mb-5">
            <h2 class="text-3xl font-semibold text-gray-700 mb-7 ">Grafik Kependudukan</h2>
            <div class="bg-white p-5 rounded-lg shadow-lg">
            <canvas id="grafikKependudukan" class="h-96 w-56"></canvas> <!-- Canvas untuk grafik -->
            </div>
        </section>
    
        <!-- Pendidikan di Desa -->
        <section class="mb-12">
            <h2 class="text-3xl font-semibold text-gray-700 mb-4">Pendidikan di Desa</h2>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold text-gray-800">Fasilitas Pendidikan</h3>
                <ul class="list-disc list-inside text-gray-600 mt-4">
                    <li>Jumlah Sekolah Dasar: 5</li>
                    <li>Jumlah Sekolah Menengah: 2</li>
                    <li>Jumlah Lulusan: 80% melanjutkan pendidikan</li>
                </ul>
            </div>
        </section>
    
        <!-- Kesehatan Masyarakat -->
        <section class="mb-12">
            <h2 class="text-3xl font-semibold text-gray-700 mb-4">Kesehatan Masyarakat</h2>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold text-gray-800">Layanan Kesehatan di Desa</h3>
                <ul class="list-disc list-inside text-gray-600 mt-4">
                    <li>Puskesmas: 1</li>
                    <li>Posyandu: 3</li>
                    <li>Jumlah Dokter: 2</li>
                    <li>Jumlah Bidan: 3</li>
                </ul>
            </div>
        </section>
    
        {{-- <!-- Perekonomian Desa -->
        <section class="mb-12">
            <h2 class="text-3xl font-semibold text-gray-700 mb-4">Perekonomian Desa</h2>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold text-gray-800">Sektor Ekonomi Desa</h3>
                <ul class="list-disc list-inside text-gray-600 mt-4">
                    <li>Jumlah Usaha Mikro: 50</li>
                    <li>Jumlah Petani: 80% dari total penduduk</li>
                    <li>Produk Unggulan: Kopi, Sayuran, Buah-buahan</li>
                </ul>
            </div>
        </section> --}}
    
        <!-- Program Sosial Desa -->
        <section class="mb-12">
            <h2 class="text-3xl font-semibold text-gray-700 mb-4">Program Sosial Desa</h2>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold text-gray-800">Program Unggulan Sosial</h3>
                <ul class="list-disc list-inside text-gray-600 mt-4">
                    <li>Program Bantuan Langsung Tunai (BLT)</li>
                    <li>Program Kesejahteraan Lansia</li>
                    <li>Pelatihan Keahlian untuk Pemuda</li>
                </ul>
            </div>
        </section>
    
    </div>

    <script>
        // Data contoh untuk grafik
        const dataKependudukan = {
          labels: ['2020', '2021', '2022', '2023'], // Tahun sebagai label di sumbu X
          datasets: [{
            label: 'Jumlah Penduduk Anak-anak',
            data: [500, 550, 600, 650], // Data jumlah anak-anak per tahun
            backgroundColor: '#4CAF50',
            hoverBackgroundColor: '#66BB6A'
          },
          {
            label: 'Jumlah Penduduk Remaja',
            data: [100, 120, 130, 150], // Data jumlah remaja per tahun
            backgroundColor: '#FF9800',
            hoverBackgroundColor: '#FFB74D'
          },
          {
            label: 'Jumlah Penduduk Dewasa',
            data: [1200, 1300, 1400, 1500], // Data jumlah dewasa per tahun
            backgroundColor: '#2196F3',
            hoverBackgroundColor: '#42A5F5'
          },
          {
            label: 'Jumlah Penduduk Lansia',
            data: [300, 350, 400, 450], // Data jumlah lansia per tahun
            backgroundColor: '#F44336',
            hoverBackgroundColor: '#EF5350'
          }]
        };

    
        // Konfigurasi untuk grafik (jenis bar)
        const config = {
          type: 'bar', // Bisa diganti menjadi 'pie' atau 'doughnut' untuk grafik lainnya
          data: dataKependudukan,
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: {
                position: 'top'
              },
              title: {
                display: true,
                text: 'Kependudukan Berdasarkan Kelompok Umur'
              }
               },
               animation: {
                duration: 2900, // Durasi animasi dalam milidetik
                easing: 'linear', // Efek animasi, contoh: easeInOutBounce, linear, dll.
            },
           }
        };
    
        // Render grafik
        const ctx = document.getElementById('grafikKependudukan').getContext('2d');
        new Chart(ctx, config);
      </script>
    
</x-navbar-layout>
