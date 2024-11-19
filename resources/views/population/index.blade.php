<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-3xl font-semibold text-gray-700 mb-4">Data Kependudukan</h2>
        {{-- <a href="{{ route('population.create') }}" class="bg-blue-500 text-white p-2 rounded-md mb-4">Tambah Data</a> --}}
        
        <table class="min-w-full bg-white mt-5 border border-gray-300 rounded-lg shadow-md">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left">Tahun</th>
                    <th class="px-4 py-2 text-left">Anak-anak</th>
                    <th class="px-4 py-2 text-left">Remaja</th>
                    <th class="px-4 py-2 text-left">Dewasa</th>
                    <th class="px-4 py-2 text-left">Lansia</th>
                    <th class="px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $population)
                    <tr>
                        <td class="px-4 py-2">{{ $population->year }}</td>
                        <td class="px-4 py-2">{{ $population->children }}</td>
                        <td class="px-4 py-2">{{ $population->teenagers }}</td>
                        <td class="px-4 py-2">{{ $population->adults }}</td>
                        <td class="px-4 py-2">{{ $population->elderly }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('population.edit', $population) }}" class="text-yellow-500">Edit</a> 
                            {{-- <form action="{{ route('population.destroy', $population) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Hapus</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>