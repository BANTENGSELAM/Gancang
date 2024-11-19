<x-app-layout>
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Edit Data Keuangan</h1>
        <form action="{{ route('keuangan.update', $keuangan->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-gray-700">Kategori</label>
                <input type="text" name="kategori" class="w-full border border-gray-300 p-2 rounded" value="{{ $keuangan->kategori }}" required>
            </div>
            <div>
                <label class="block text-gray-700">Jumlah (Rp)</label>
                <input type="number" name="jumlah" class="w-full border border-gray-300 p-2 rounded" value="{{ $keuangan->jumlah }}" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Perbarui</button>
        </form>
    </div>
</x-app-layout>