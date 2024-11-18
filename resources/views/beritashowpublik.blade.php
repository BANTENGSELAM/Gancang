<!-- resources/views/beritaShowPublik.blade.php -->
<x-navbar-layout>

    <div class="max-w-7xl mx-auto px-6 py-12">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-4xl font-extrabold text-gray-800">{{ $berita->judul }}</h1>
            @if($berita->gambar)
                <div class="mt-4">
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full h-auto rounded-lg shadow-md">
                </div>
            @endif
            <p class="mt-4 text-lg text-gray-700">{!! nl2br(e($berita->konten)) !!}</p>
            <p class="mt-2 text-sm text-gray-500">Penulis: {{ $berita->penulis }} pada {{ $berita->created_at->format('d M Y') }} </p>
          
            <div class="mt-6">
                <a href="{{ route('beritapublik') }}" class="text-blue-500">Kembali ke Daftar Berita</a>
            </div>
        </div>
    </div>
</x-navbar-layout>
