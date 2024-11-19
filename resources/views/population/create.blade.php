<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-3xl font-semibold text-gray-700 mb-4">Tambah Data Kependudukan</h2>
    
        <form action="{{ route('population.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="year" class="block text-gray-700">Tahun</label>
                <input type="text" name="year" id="year" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="children" class="block text-gray-700">Anak-anak</label>
                <input type="number" name="children" id="children" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="teenagers" class="block text-gray-700">Remaja</label>
                <input type="number" name="teenagers" id="teenagers" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="adults" class="block text-gray-700">Dewasa</label>
                <input type="number" name="adults" id="adults" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="elderly" class="block text-gray-700">Lansia</label>
                <input type="number" name="elderly" id="elderly" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Simpan</button>
        </form>
    </div>
</x-app-layout>