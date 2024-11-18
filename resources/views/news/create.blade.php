<x-navbar-layout>

    <div class="max-w-7xl mx-auto px-6 py-12">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Tambah Berita Desa Gancang</h1>
    
        <!-- Form Tambah Berita -->
        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="title" class="block text-lg font-semibold text-gray-700">Judul Berita</label>
                <input type="text" id="title" name="title" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('title') }}" required>
            </div>
    
            <div class="mb-6">
                <label for="content" class="block text-lg font-semibold text-gray-700">Isi Berita</label>
                <textarea id="content" name="content" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" rows="5" required>{{ old('content') }}</textarea>
            </div>
    
            <div class="mb-6">
                <label for="image_url" class="block text-lg font-semibold text-gray-700">Gambar Berita</label>
                <input type="file" id="image_url" name="image_url" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
    
            <button type="submit" class="w-full px-6 py-3 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition">Simpan Berita</button>
        </form>
    </div>


</x-navbar-layout>