<x-app-layout>
    <div class="container mx-auto">
        <h1 class="text-xl font-bold text-center mt-5 mb-4">Daftar Keuangan</h1>
        {{-- <a href="{{ route('keuangan.create') }}" class="bg-blue-500 text-white px-4 mx-5 py-2 rounded mb-4 inline-block">Tambah Data</a> --}}
        <table class="w-full table-auto border-collapse border border-gray-200 text-gray-800">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2">Kategori</th>
                    <th class="border border-gray-300 px-4 py-2">Jumlah (Rp)</th>
                    <th class="border border-gray-300 px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($keuangan as $item)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->kategori }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ number_format($item->jumlah, 0, ',', ',') }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                       <center><a href="{{ route('keuangan.edit', $item->id) }}" class="bg-yellow-500 text-white px-14 py-2 rounded">Edit</a></center>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>