<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('dashboard', compact('beritas'));
    }

    // public function getGrafik()
    // {
    //     return view('grafikdesa.update');
    // }

    // public function updateGrafik(Request $request)
    // {
    //     $request->validate([
    //         'chartData' => 'required|json', // Pastikan data berbentuk JSON
    //     ]);

    //     // Simpan data ke file atau database (sesuai kebutuhan)
    //     Storage::put('grafik_data.json', $request->chartData);

    //     return redirect()->route('grafikdesa.update')->with('success', 'Data grafik berhasil diperbarui.');
    // }

    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'konten' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg'
        ]);

        $path = Storage::disk('public')->putFile('berita', $request->file('gambar'));

        Berita::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'konten' => $request->konten,
            'gambar' => $path
        ]);

        return redirect()->route('dashboard')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit(Berita $berita)
    {
        return view('berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'konten' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg'
        ]);

        if ($request->hasFile('gambar')) {
            Storage::delete($berita->gambar);
            $path = Storage::disk('public')->putFile("berita", $request->file("gambar"));
            $berita->gambar = $path;
        }

        $berita->judul = $request->judul;
        $berita->penulis = $request->penulis;
        $berita->konten = $request->konten;
        $berita->save();

        return redirect()->route('dashboard')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(Berita $berita)
    {
        Storage::delete($berita->gambar);
        $berita->delete();

        return redirect()->route('dashboard')->with('success', 'Berita berhasil dihapus.');
    }

        public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.show', compact('berita'));
    }


        public function indexPublik()
    {
        $beritas = Berita::latest()->get(); // Ambil berita terbaru
        return view('beritaPublik', compact('beritas'));
    }

    public function beritashowpublik($id)
    {
        $berita = Berita::findOrFail($id);  // Menemukan berita berdasarkan ID
        return view('beritashowpublik', compact('berita'));  // Mengirimkan data berita ke tampilan
    }   

}