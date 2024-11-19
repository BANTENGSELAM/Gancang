{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Grafik Desa') }}
        </h2>

        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Atur Data Grafik</h3>
                <form action="{{ route('grafikdesa.update') }}" method="POST">
                    @csrf
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="chartData">Data Grafik (JSON Format)</label>
                    <textarea name="chartData" id="chartData" class="w-full border rounded-md p-2 mb-4" rows="4">
                    {
                    "labels": ["2020", "2021", "2022", "2023"],
                    "datasets": [
                        { "label": "Penduduk", "data": [100, 150, 200, 250], "backgroundColor": "#4CAF50" }
                    ]
                    }
                    </textarea>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Simpan Data
                    </button>
                </form>
            </div>
        </div>

    </x-slot>
</x-app-layout> --}}
