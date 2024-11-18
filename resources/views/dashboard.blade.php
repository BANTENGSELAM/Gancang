<!-- resources/views/dashboard/berita/index.blade.php -->
<x-app-layout>

    <x-slot name="header">
   
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Halaman Admin') }}
        </h2>     
       
        <body>
            
            <div class="max-w-7xl mx-auto px-6 py-8">
                {{-- Session Berita Berhasil dihapus --}}
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            
              
              {{-- Tombol Tambah Berita --}}
              <div class="mb-6">
                <a href="{{ route('berita.create') }}" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow hover:bg-blue-600 transition duration-300">
                    Tambah Berita
                </a>
            </div>

            {{-- Tombol Ubah Grafik --}}
            <div class="mb-6">
                <a href="{{ route('berita.create') }}" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow hover:bg-blue-600 transition duration-300">
                    Ubah Grafik
                </a>
            </div>

        
            {{-- Tabel Berita --}}
            <div class="overflow-hidden bg-white shadow-md sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Judul</th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Penulis</th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Konten</th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Gambar</th>
                            <th class="px-6 py-3 text-right text-xs font-bold text-gray-600 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($beritas as $berita)
                            <tr class="hover:bg-gray-100 transition duration-200">
                                <td class="px-6 py-4 text-gray-700">{{ $berita->judul }}</td>
                                <td class="px-6 py-4 text-gray-700">{{ $berita->penulis }}</td>
                                <td class="px-6 py-4 text-gray-600">{{ Str::limit($berita->konten, 50) }}</td>
                                <td class="px-6 py-4">
                                    <img src="{{ Storage::url($berita->gambar) }}" alt="Gambar Berita" class="h-16 w-auto rounded-md shadow-md">
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('berita.edit', $berita) }}" class="text-blue-500 font-semibold hover:text-blue-700 mr-3">Edit</a>
                                    <form action="{{ route('berita.destroy', $berita) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 font-semibold hover:text-red-700 mr-3">
                                            Hapus
                                        </button>
                                    </form>
                                    <a href="{{ route('berita.show', $berita->id) }}" class="text-green-500 font-semibold hover:text-green-700">
                                        Lihat
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </body>
         
        </x-slot>
</x-app-layout>