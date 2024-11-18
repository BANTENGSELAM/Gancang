<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        // Ambil semua data berita dari database
        $news = News::all();

        // Kirim variabel $news ke tampilan 'news.index'
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $news = new News;
        $news->title = $request->title;
        $news->content = $request->content;

        if ($request->hasFile('image_url')) {
            $imagePath = Storage::disk('public')->putFile("news", $request->file("image_url"));
            $news->image = $imagePath;
        }

        $news->save();

        return redirect()->route('news.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function show($id)
    {
        // Ambil data berita berdasarkan ID
        $news = News::findOrFail($id);

        // Kirim variabel $news ke tampilan 'news.show'
        return view('news.show', compact('news'));
    }

        public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

        public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        // Validasi input
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,svg',
        ]);

        // Mengupdate data berita
        $news->title = $request->title;
        $news->content = $request->content;

        // Jika ada gambar baru
        if ($request->hasFile('image_url')) {
            $imagePath = Storage::disk('public')->putFile("news", $request->file("image_url"));
            $news->image_url = $imagePath;
        }

        $news->save();

        return redirect()->route('news.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus!');
    }
}