<x-navbar-layout>
    <div class="max-w-7xl mx-auto px-6 py-12">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Potensi Desa Gancang</h1>

        <!-- Deskripsi Potensi Desa -->
        <section class="mb-12">
            <h2 class="text-3xl font-semibold text-gray-700 mb-4">Deskripsi Potensi Desa</h2>
            <p class="text-gray-600">
                Desa Gancang memiliki berbagai potensi yang mendukung kesejahteraan masyarakatnya, seperti sektor
                pertanian, peternakan, wisata alam, dan industri kreatif. Potensi ini terus berkembang dengan dukungan
                masyarakat dan program pemerintah.
            </p>
        </section>

        <!-- Kategori Potensi Desa -->
        <section class="mb-12">
            <h2 class="text-3xl font-semibold text-gray-700 mb-4">Kategori Potensi Desa</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Pertanian -->
                <div class="bg-green-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800">Pertanian</h3>
                    <p class="text-gray-600 mt-2">
                        Hasil panen unggulan: Padi, Jagung, Sayuran. Kontribusi besar untuk ekonomi desa.
                    </p>
                </div>

                <!-- Peternakan -->
                <div class="bg-yellow-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800">Peternakan</h3>
                    <p class="text-gray-600 mt-2">
                        Peternakan sapi dan kambing, serta budidaya ikan air tawar.
                    </p>
                </div>

                <!-- Pariwisata -->
                <div class="bg-blue-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800">Pariwisata</h3>
                    <p class="text-gray-600 mt-2">
                        Wisata alam: Air Terjun Cangkringan, Perbukitan Hijau, dan Kampung Wisata.
                    </p>
                </div>

                <!-- Industri Kreatif -->
                <div class="bg-purple-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800">Industri Kreatif</h3>
                    <p class="text-gray-600 mt-2">
                        Produk kerajinan bambu, batik lokal, dan makanan khas desa.
                    </p>
                </div>
            </div>
        </section>

        <!-- Grafik Potensi Desa -->
        <section class="mb-10  ">
            <h2 class="text-3xl font-semibold text-gray-700 mb-4">Grafik Potensi Desa</h2>
            <div class="bg-white p-6 rounded-lg shadow-lg flex justify-center h-96 w-auto">
                <canvas id="grafikPotensi" ></canvas>
            </div>
        </section>

        {{-- <!-- Galeri Potensi Desa -->
        <section class="mb-12">
            <h2 class="text-3xl font-semibold text-gray-700 mb-4">Galeri Potensi Desa</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <img src="https://via.placeholder.com/300" alt="Potensi Desa" class="rounded-lg shadow-md">
                <img src="https://via.placeholder.com/300" alt="Potensi Desa" class="rounded-lg shadow-md">
                <img src="https://via.placeholder.com/300" alt="Potensi Desa" class="rounded-lg shadow-md">
            </div>
        </section> --}}
    </div>

    <!-- Chart.js Integration -->
    <script>
        // Data contoh untuk grafik
        const ctx = document.getElementById('grafikPotensi').getContext('2d');
        const chartData = {
            labels: ['Pertanian', 'Peternakan', 'Pariwisata', 'Industri Kreatif'],
            datasets: [{
                label: 'Kontribusi Potensi (%)',
                data: [40, 25, 20, 15], // Data dummy
                backgroundColor: ['#4CAF50', '#FFC107', '#2196F3', '#9C27B0'],
                hoverBackgroundColor: ['#66BB6A', '#FFD54F', '#42A5F5', '#AB47BC']
            }]
        };


    
        // Konfigurasi untuk grafik (jenis bar)
        const chartConfig = {
            type: 'pie',
            data: chartData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    },
                    title: {
                        display: true,
                        text: 'Kontribusi Potensi Desa Gancang'
                    }
                },

                animation: {
                duration: 2900, // Durasi animasi dalam milidetik
                easing: 'linear', // Efek animasi, contoh: easeInOutBounce, linear, dll.
            },

            }
        };
    
        // Render grafik
        new Chart(ctx, chartConfig);
      </script>
</x-navbar-layout>
