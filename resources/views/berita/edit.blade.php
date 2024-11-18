{{-- resources/views/dashboard/berita/edit.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Berita') }}
        </h2>

        <div class="max-w-7xl mx-auto px-6 py-12">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Berita</h1>
    
            <!-- Form Edit Berita -->
            <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
    
                <!-- Judul -->
                <div class="mb-4">
                    <label for="judul" class="block text-gray-700 font-semibold">Judul Berita</label>
                    <input type="text" name="judul" id="judul" value="{{ old('judul', $berita->judul) }}"
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                </div>
    
                <!-- Penulis -->
                <div class="mb-4">
                    <label for="penulis" class="block text-gray-700 font-semibold">Penulis</label>
                    <input type="text" name="penulis" id="penulis" value="{{ old('penulis', $berita->penulis) }}"
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                </div>
    
                <!-- Konten -->
                <div class="mb-4">
                    <label for="konten" class="block text-gray-700 font-semibold">Konten</label>
                    <textarea name="konten" id="konten" rows="6"
                              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>{{ old('konten', $berita->konten) }}</textarea>
                </div>
    
                <!-- Gambar -->
                <div class="mb-4">
                    <label for="gambar" class="block text-gray-700 font-semibold">Gambar Berita</label>
                    <input type="file" name="gambar" id="gambar" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    @if($berita->gambar)
                        <p class="mt-2 text-gray-600">Gambar saat ini: <a href="{{ asset('/storage/' . $berita->gambar) }}" target="_blank" class="text-blue-500 hover:underline">Lihat Gambar</a></p>
                    @endif
                </div>
    
                <!-- Tombol Simpan -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">Simpan Perubahan</button>
                </div>
            </form>
        </div>

    </x-slot>

    
</x-app-layout>
