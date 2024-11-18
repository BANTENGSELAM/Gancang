{{-- resources/views/dashboard/berita/show.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detail Berita') }}
        </h2>

        <div class="max-w-4xl mx-auto px-6 py-12">
            <!-- Judul Berita -->
            <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $berita->judul }}</h1>
            
            <!-- Penulis dan Tanggal -->
            <p class="text-gray-500 mb-6 italic">Ditulis oleh <span class="font-semibold">{{ $berita->penulis }}</span> pada {{ $berita->created_at->format('d M Y') }}</p>
    
            <!-- Gambar Berita (jika ada) -->
            @if ($berita->gambar)
                <div class="mb-6">
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita" class="w-full h-auto rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                </div>
            @endif
    
            <!-- Konten Berita -->
            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                {!! nl2br(e($berita->konten)) !!}
            </div>
    
            <!-- Tombol Kembali -->
            <div class="mt-8">
                <a href="{{ route('dashboard') }}" class="inline-block px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow hover:bg-blue-600 transition-all duration-300">
                    Kembali ke Daftar Berita
                </a>
            </div>
        </div>

    </x-slot>

</x-app-layout>
