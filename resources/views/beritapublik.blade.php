<!-- resources/views/beritaPublik.blade.php -->
<x-navbar-layout>

<div class="max-w-7xl mx-auto px-6 py-12">
    <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-8">Berita Terbaru Desa Gancang</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($beritas as $berita)
            <div class="bg-white rounded-lg shadow-lg p-6">
                <img src="{{ asset('/storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="mt-4 text-2xl font-semibold text-gray-800">{{ $berita->judul }}</h2>
                <p class="mt-2 text-gray-600">{{ Str::limit($berita->konten, 100) }}</p>
                <a href="{{ route('beritashowpublik', $berita->id) }}" class="text-blue-500 mt-4 inline-block">Baca Selengkapnya</a>
            </div>
        @endforeach
    </div>
</div>

</x-navbar-layout>