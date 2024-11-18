<x-navbar-layout>

    <div class="max-w-7xl mx-auto px-6 py-12">
        <div class="bg-white p-6 rounded-xl shadow-lg">
            <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Edit Berita</h1>
    
            <!-- Form Edit Berita -->
            <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
    
                <!-- Judul -->
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Judul Berita</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $news->title) }}" class="w-full p-3 border border-gray-300 rounded-lg mt-2" required>
                </div>
    
                <!-- Konten -->
                <div class="mb-4">
                    <label for="content" class="block text-sm font-medium text-gray-700">Konten Berita</label>
                    <textarea id="content" name="content" rows="6" class="w-full p-3 border border-gray-300 rounded-lg mt-2" required>{{ old('content', $news->content) }}</textarea>
                </div>
    
                <!-- Gambar -->
                <div class="mb-4">
                    <label for="image_url" class="block text-sm font-medium text-gray-700">Gambar Berita</label>
                    <input type="file" id="image_url" name="image_url" class="w-full p-3 border border-gray-300 rounded-lg mt-2">
                </div>
    
                <div class="flex justify-end space-x-4">
                    <a href="{{ route('news.index') }}" class="px-6 py-3 bg-gray-500 text-white font-semibold rounded-lg hover:bg-gray-600 transition-all duration-300">
                        Batal
                    </a>
                    <button type="submit" class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition-all duration-300">
                        Perbarui Berita
                    </button>
                </div>
            </form>
        </div>
    </div>


</x-navbar-layout>