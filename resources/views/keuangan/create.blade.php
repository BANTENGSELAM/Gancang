<x-app-layout>
    <div class="container mt-5 mx-auto">
        <form action="{{ route('keuangan.store') }}" method="POST" class="bg-white p-4 shadow rounded">
            <h1 class="text-xl font-bold text-center mb-4">Tambah Data Keuangan</h1>
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Kategori</label>
                <input type="text" name="kategori" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Jumlah</label>
                <input type="number" name="jumlah" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>