<x-navbar-layout>
    <div class="max-w-7xl mx-auto px-6 py-12 bg-gray-100">
        <h1 class="text-4xl font-bold text-center text-green-800 mb-10">Profil Pemerintah Desa Gancang</h1>
        
        <!-- Struktur Organisasi Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-semibold text-green-700 mb-6">Struktur Organisasi Pemerintah Desa</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Kepala Desa -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="{{ asset('/image/fkd.jpg') }}" alt="Kepala Desa" class="w-24 h-24 mx-auto rounded-full mb-4">
                    <h3 class="text-2xl font-semibold text-green-800">Kepala Desa</h3>
                    <p class="text-gray-600 mt-2 font-semibold">Nama: Abu Ubaidah</p>
                    <p class="text-gray-500 mt-2 text-sm">Memimpin pemerintahan desa dan bertanggung jawab atas seluruh kebijakan serta pembangunan.</p>
                </div>
                <!-- Sekretaris Desa -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="{{ asset('/image/fkd2.jpg') }}" alt="Sekretaris Desa" class="w-24 h-24 mx-auto rounded-full mb-4">
                    <h3 class="text-2xl font-semibold text-green-800">Sekretaris Desa</h3>
                    <p class="text-gray-600 mt-2 font-semibold">Nama: Ramzan Kadyrov </p>
                    <p class="text-gray-500 mt-2 text-sm">Mengelola administrasi, koordinasi kegiatan, serta menyusun laporan pemerintahan.</p>
                </div>
                <!-- Bendahara Desa -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="{{ asset('/image/fkd3.jpg') }}" alt="Bendahara Desa" class="w-24 h-24 mx-auto rounded-full mb-4">
                    <h3 class="text-2xl font-semibold text-green-800">Bendahara Desa</h3>
                    <p class="text-gray-600 mt-2 font-semibold">Nama: Abdul Ghani Baradar </p>
                    <p class="text-gray-500 mt-2 text-sm">Mengelola keuangan desa, laporan keuangan, dan penggunaan dana desa yang transparan.</p>
                </div>
            </div>
        </section>
    
        <!-- Wilayah Desa Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-semibold text-green-700 mb-6">Wilayah Desa</h2>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-green-800 mb-4">Gambaran Umum Wilayah Desa Gancang</h3>
                <p class="text-gray-600 mb-4">
                    Desa Gancang terletak di daerah perbukitan dengan luas sekitar [Luas Wilayah] hektar. Desa ini berbatasan dengan:
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-4">
                    <li>Sebelah Utara: Desa [Nama Desa]</li>
                    <li>Sebelah Timur: Desa [Nama Desa]</li>
                    <li>Sebelah Selatan: Desa [Nama Desa]</li>
                    <li>Sebelah Barat: Desa [Nama Desa]</li>
                </ul>
                <p class="text-gray-600 mb-4">
                    Desa Gancang terbagi menjadi beberapa wilayah dusun yang meliputi:
                </p>
                <ul class="list-disc list-inside text-gray-600">
                    <li>Dusun 1: [Deskripsi Singkat atau Nama Ketua Dusun]</li>
                    <li>Dusun 2: [Deskripsi Singkat atau Nama Ketua Dusun]</li>
                    <li>Dusun 3: [Deskripsi Singkat atau Nama Ketua Dusun]</li>
                    <!-- Tambahkan dusun lainnya jika diperlukan -->
                </ul>
                <p class="text-gray-600 mt-4">
                    Desa ini dikenal dengan [karakteristik khusus, seperti pertanian, peternakan, atau potensi wisata], yang menjadi ciri khas masyarakat Desa Gancang.
                </p>
    
                <!-- Google Maps Embed -->
                <div class="mt-8">
                    <h3 class="text-xl font-semibold text-green-800 mb-4">Lokasi Desa Gancang</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15826.254694480678!2d109.00966673271971!3d-7.402686381716264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6562de476d4989%3A0xcfcef14ae6be0a3e!2sGancang%2C%20Kec.%20Gumelar%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1731319671796!5m2!1sid!2sid"
                        width="100%"
                        height="400"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="rounded-lg shadow-lg">
                    </iframe>
                </div>
            </div>
        </section>
    
        <!-- Visi, Misi, dan Program Kerja Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-semibold text-green-700 mb-6">Visi, Misi, dan Program Kerja Pemerintah Desa</h2>
            
            <!-- Visi -->
            <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                <h3 class="text-xl font-semibold text-green-800">Visi</h3>
                <p class="text-gray-600 mt-2">
                    "Mewujudkan Desa Gancang yang mandiri, sejahtera, dan berdaya saing dengan tetap menjaga nilai budaya dan kearifan lokal."
                </p>
            </div>
            
            <!-- Misi -->
            <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                <h3 class="text-xl font-semibold text-green-800">Misi</h3>
                <ul class="list-disc list-inside text-gray-600 mt-2">
                    <li>Meningkatkan kualitas pendidikan dan kesehatan masyarakat desa.</li>
                    <li>Mendorong pemberdayaan ekonomi lokal melalui sektor pertanian dan usaha kecil.</li>
                    <li>Mengembangkan infrastruktur desa yang mendukung pertumbuhan berkelanjutan.</li>
                    <li>Memperkuat kelembagaan desa dan partisipasi masyarakat dalam pembangunan.</li>
                </ul>
            </div>
            
            <!-- Program Kerja -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-green-800">Program Kerja</h3>
                <p class="text-gray-600 mt-2 mb-4">Berikut adalah beberapa program kerja utama yang dilaksanakan oleh Pemerintah Desa Gancang:</p>
                <ul class="list-disc list-inside text-gray-600">
                    <li>Program Pembangunan Infrastruktur Desa: Meningkatkan aksesibilitas dengan pembangunan jalan dan jembatan desa.</li>
                    <li>Program Pemberdayaan Masyarakat: Pelatihan keterampilan untuk warga agar lebih produktif dalam berwirausaha.</li>
                    <li>Program Kesehatan Desa: Mendirikan pos kesehatan desa untuk memberikan layanan kesehatan dasar bagi masyarakat.</li>
                    <li>Program Lingkungan Bersih: Mengadakan kegiatan gotong royong setiap bulan untuk menjaga kebersihan desa.</li>
                </ul>
            </div>
        </section>
    </div>
</x-navbar-layout>