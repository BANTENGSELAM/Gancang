<x-navbar-layout>

    <div class="max-w-7xl mx-auto px-6 py-12">
        <div class="bg-white p-6 rounded-xl shadow-lg space-y-6">
            
            <!-- Gambar Berita -->
            @if ($news->image)
                <div class="mb-6">
                    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-96 h-full object-cover rounded-lg shadow-md">
                </div>
            @endif
    
            <!-- Judul Berita -->
            <h1 class="text-4xl font-extrabold text-gray-800 mb-4">{{ $news->title }}</h1>
    
            <!-- Tanggal Pembuatan -->
            <p class="text-sm text-gray-500 mb-4">Dibuat pada: {{ $news->created_at->format('d M Y') }}</p>
    
            <!-- Konten Berita -->
            <p class="text-gray-700 leading-relaxed mb-6">{{ $news->content }}</p>
    
            <!-- Tombol Kembali -->
            <a href="{{ route('news.index') }}" class="inline-block px-6 py-3 bg-gray-500 text-white font-semibold rounded-lg hover:bg-gray-600 transition-all duration-300">
                Kembali ke Daftar Berita
            </a>
    
            <!-- Tombol Edit dan Hapus -->
            <div class="mt-6 flex space-x-4">
                <!-- Tombol Edit -->
                <a href="{{ route('news.edit', $news->id) }}" class="inline-block px-6 py-3 bg-yellow-500 text-white font-semibold rounded-lg hover:bg-yellow-600 transition-all duration-300">
                    Edit Berita
                </a>
    
                <!-- Tombol Hapus -->
                <form action="{{ route('news.destroy', $news->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="inline-block px-6 py-3 bg-red-500 text-white font-semibold rounded-lg hover:bg-red-600 transition-all duration-300">
                        Hapus Berita
                    </button>
                </form>
            </div>
        </div>
    </div>


</x-navbar-layout>