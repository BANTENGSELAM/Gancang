<x-navbar-layout>
    <div class="max-w-7xl mx-auto px-6 py-12">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Masyarakat Desa Gancang</h1>
        
        <section class="mb-12">
            <h2 class="text-3xl font-semibold text-gray-700 mb-4">Statistik Penduduk 2024</h2>
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
        
         <!-- Tabel Data Kependudukan -->
         <section class="mb-12 hidden">
            <h2 class="text-3xl font-semibold text-gray-700 mb-4">Data Kependudukan</h2>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <table id="dataKependudukan" class="table-auto w-full text-gray-600">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left">Tahun</th>
                            <th class="px-4 py-2 text-left">Anak-anak</th>
                            <th class="px-4 py-2 text-left">Remaja</th>
                            <th class="px-4 py-2 text-left">Dewasa</th>
                            <th class="px-4 py-2 text-left">Lansia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $population)
                        <tr>
                            <td class="px-4 py-2">{{ $population->year }}</td>
                            <td class="px-4 py-2">{{ $population->children }}</td>
                            <td class="px-4 py-2">{{ $population->teenagers }}</td>
                            <td class="px-4 py-2">{{ $population->adults }}</td>
                            <td class="px-4 py-2">{{ $population->elderly }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
        // Ambil data dari tabel HTML
        function getDataFromTable() {
            const table = document.getElementById('dataKependudukan');
            const rows = table.getElementsByTagName('tr');
            
            const labels = [];
            const anakAnakData = [];
            const remajaData = [];
            const dewasaData = [];
            const lansiaData = [];
            
            // Iterasi melalui baris tabel dan ambil data
            for (let i = 1; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName('td');
                labels.push(cells[0].innerText); // Tahun
                anakAnakData.push(cells[1].innerText); // Jumlah Anak-anak
                remajaData.push(cells[2].innerText); // Jumlah Remaja
                dewasaData.push(cells[3].innerText); // Jumlah Dewasa
                lansiaData.push(cells[4].innerText); // Jumlah Lansia
            }
            
            return {
                labels,
                anakAnakData,
                remajaData,
                dewasaData,
                lansiaData
            };
        }

        // Ambil data dari tabel
        const dataKependudukan = getDataFromTable();

        // Data untuk grafik Chart.js
        const chartData = {
            labels: dataKependudukan.labels,
            datasets: [
                {
                    label: 'Jumlah Penduduk Anak-anak',
                    data: dataKependudukan.anakAnakData,
                    backgroundColor: '#4CAF50',
                    hoverBackgroundColor: '#66BB6A'
                },
                {
                    label: 'Jumlah Penduduk Remaja',
                    data: dataKependudukan.remajaData,
                    backgroundColor: '#FF9800',
                    hoverBackgroundColor: '#FFB74D'
                },
                {
                    label: 'Jumlah Penduduk Dewasa',
                    data: dataKependudukan.dewasaData,
                    backgroundColor: '#2196F3',
                    hoverBackgroundColor: '#42A5F5'
                },
                {
                    label: 'Jumlah Penduduk Lansia',
                    data: dataKependudukan.lansiaData,
                    backgroundColor: '#F44336',
                    hoverBackgroundColor: '#EF5350'
                }
            ]
        };

        // Konfigurasi untuk grafik (jenis bar)
        const config = {
            type: 'bar', // Jenis grafik
            data: chartData,
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
                    duration: 2900,
                    easing: 'linear'
                }
            }
        };

        // Render grafik
        const ctx = document.getElementById('grafikKependudukan').getContext('2d');
        new Chart(ctx, config);
    </script>
    
</x-navbar-layout>