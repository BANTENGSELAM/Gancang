<x-navbar-layout>
    <div class="max-w-5xl mx-auto px-6 py-12">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Transparansi Keuangan Desa</h1>

        <!-- Tabel Data Keuangan -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Data Keuangan Desa</h2>
            <table id="dataKeuangan" class="w-full table-auto border-collapse border border-gray-200 text-gray-800">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2">Kategori</th>
                        <th class="border border-gray-300 px-4 py-2">Jumlah (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-category="infrastruktur">
                        <td class="border border-gray-300 px-4 py-2 cursor-pointer">Pembangunan Infrastruktur</td>
                        <td class="border border-gray-300 px-4 py-2">50,000,000</td>
                    </tr>
                    <tr data-category="pendidikan">
                        <td class="border border-gray-300 px-4 py-2 cursor-pointer">Pendidikan</td>
                        <td class="border border-gray-300 px-4 py-2">20,000,000</td>
                    </tr>
                    <tr data-category="kesehatan">
                        <td class="border border-gray-300 px-4 py-2 cursor-pointer">Kesehatan</td>
                        <td class="border border-gray-300 px-4 py-2">15,000,000</td>
                    </tr>
                    <tr data-category="lainnya">
                        <td class="border border-gray-300 px-4 py-2 cursor-pointer">Lain-lain</td>
                        <td class="border border-gray-300 px-4 py-2">10,000,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Grafik Keuangan -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Visualisasi Keuangan</h2>
            <canvas id="chartKeuangan" class="h-40 w-40"></canvas>
        </div>

        <!-- Detail Kategori yang Diketik -->
        <div id="categoryDetail" class="bg-white p-6 rounded-lg shadow-lg hidden">
            <h3 id="categoryTitle" class="text-xl font-semibold text-gray-800 mb-4"></h3>
            <p id="categoryDescription" class="text-gray-800"></p>
        </div>
    </div>

    <script>
        // Mengambil data dari tabel
        const table = document.getElementById("dataKeuangan");
        const rows = table.querySelectorAll("tbody tr");
        const labels = [];
        const data = [];
        const categories = {};

        rows.forEach(row => {
            const cols = row.querySelectorAll("td");
            const category = row.dataset.category; // Mengambil kategori dari data-attribute
            const value = parseInt(cols[1].innerText.replace(/,/g, ""));

            labels.push(cols[0].innerText); // Kategori
            data.push(value); // Jumlah

            categories[category] = {
                label: cols[0].innerText,
                value: value,
                isVisible: true, // Setiap kategori awalnya terlihat
                description: `Deskripsi untuk kategori ${cols[0].innerText}. Ini adalah deskripsi untuk anggaran yang digunakan dalam kategori ini.` // Deskripsi kategori
            };
        });

        // Membuat Chart.js
        const ctx = document.getElementById("chartKeuangan").getContext("2d");
        const chart = new Chart(ctx, {
            type: "bar", // Ganti ke tipe bar
            data: {
                labels: labels,
                datasets: [{
                    label: "Jumlah",
                    data: data,
                    backgroundColor: [
                        "#4CAF50",
                        "#FF9800",
                        "#2196F3",
                        "#F44336"
                    ],
                    hoverBackgroundColor: [
                        "#66BB6A",
                        "#FFB74D",
                        "#42A5F5",
                        "#EF5350"
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: "top"
                    },
                    title: {
                        display: true,
                        text: "Transparansi Keuangan Desa"
                    },
                },
                animation: {
                    duration: 2900, // Durasi animasi dalam milidetik
                    easing: 'linear', // Efek animasi, contoh: easeInOutBounce, linear, dll.
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return 'Rp ' + value.toLocaleString(); // Format Rupiah
                            }
                        },
                        title: {
                            display: true,
                            text: 'Jumlah (Rp)'
                        },
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Kategori'
                        }
                    },
                },
            }
        });

        // Fungsi untuk menangani klik kategori di tabel
        function toggleCategoryVisibility(category) {
            const index = labels.indexOf(categories[category].label);
            const dataset = chart.data.datasets[0];

            // Toggle visibility untuk kategori yang dipilih
            if (categories[category].isVisible) {
                dataset.data[index] = null; // Sembunyikan kategori
            } else {
                dataset.data[index] = categories[category].value; // Tampilkan kategori
            }

            categories[category].isVisible = !categories[category].isVisible;

            // Update chart setelah perubahan
            chart.update();

            // Tampilkan detail kategori
            showCategoryDetail(category);
        }

        // Menampilkan detail kategori
        function showCategoryDetail(category) {
            const detailElement = document.getElementById("categoryDetail");
            const titleElement = document.getElementById("categoryTitle");
            const descriptionElement = document.getElementById("categoryDescription");

            // Menampilkan detail kategori
            titleElement.innerText = categories[category].label;
            descriptionElement.innerText = categories[category].description;

            // Menampilkan elemen detail
            detailElement.classList.remove("hidden");
        }

        // Menambahkan event listener untuk kategori di tabel
        rows.forEach(row => {
            const category = row.dataset.category;
            const categoryCell = row.querySelector("td");

            categoryCell.addEventListener("click", () => toggleCategoryVisibility(category));
        });
    </script>
</x-navbar-layout>
