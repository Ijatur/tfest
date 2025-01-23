<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    // Menampilkan halaman index dengan daftar merchandise
    public function index()
    {
        // Mengambil semua merchandise
        $merchandises = Merchandise::all();

        return view('front.index', compact('merchandises'));
    }

    // Menyimpan merchandise baru
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menyimpan merchandise baru
        $merchandise = new Merchandise();
        $merchandise->name = $validated['name'];
        $merchandise->description = $validated['description'] ?? '';
        $merchandise->price = $validated['price'];

        // Menyimpan gambar jika ada
        if ($request->hasFile('thumbnail')) {
            $imageName = time().'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('images'), $imageName);
            $merchandise->thumbnail = $imageName;
        }

        $merchandise->save();

        return redirect()->route('index')->with('success', 'Merchandise berhasil ditambahkan!');
    }
}