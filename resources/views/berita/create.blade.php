<!-- resources/views/dashboard/berita/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Berita') }}
        </h2>

        <div class="max-w-7xl mx-auto px-6 py-12">
            <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700">Judul</label>
                    <input type="text" name="judul" class="w-full mt-1 p-2 border rounded" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Penulis</label>
                    <input type="text" name="penulis" class="w-full mt-1 p-2 border rounded" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Konten</label>
                    <textarea name="konten" class="w-full mt-1 p-2 border rounded" rows="5" required></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Gambar</label>
                    <input type="file" name="gambar" class="w-full mt-1 p-2 border rounded" required>
                </div>
                <button type="submit" class="inline-block px-4 mb-3 py-1 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 transition-all duration-300">Simpan</button>
            </form>
        </div>

    </x-slot>


</x-app-layout>
