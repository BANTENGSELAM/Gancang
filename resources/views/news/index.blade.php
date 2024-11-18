<x-navbar-layout>
<div class="max-w-7xl mx-auto px-6 py-12">
    <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-8">Daftar Berita Desa Gancang</h1>

    <!-- Daftar Berita -->
    <section class="mb-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($news as $item)
                <div class="bg-white p-6 rounded-xl shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <!-- Thumbnail / Image -->
                    <div class="mb-6">
                        <img src="/storage/{{ $item->image }}" alt="{{ $item->title }}" class="w-full h-48 object-cover rounded-lg">
                    </div>

                    <!-- Title -->
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3 hover:text-blue-600 transition-all duration-300">{{ $item->title }}</h3>

                    <!-- Content Preview -->
                    <p class="text-gray-600 mb-4 line-clamp-4">{{ \Str::limit($item->content, 150) }}</p>

                    <!-- Read More Button -->
                    <a href="{{ route('news.show', $item->id) }}" class="inline-block text-blue-500 font-semibold hover:text-blue-700 transition-all duration-300">
                        Baca Selengkapnya
                    </a>
                </div>
            @endforeach
        </div>
    </section>
</div>

</x-navbar-layout>