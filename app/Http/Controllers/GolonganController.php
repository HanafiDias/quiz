<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    public function index()
    {
        // Ambil data dari model Golongan
        $data = Golongan::all();
        // Kirim data ke view
        return view('golongan', ['data' => $data]);
    }

    public function create()
    {
        // Kode untuk menampilkan formulir tambah golongan
        return view('golongan', ['data' => Golongan::all()]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'gol_kode' => 'required',
            'gol_nama' => 'required',
        ]);

        Golongan::create($validatedData);
        return redirect()->route('/gol')->with('success', 'Golongan berhasil ditambahkan');
    }



    public function edit($id)
    {
        $golongan = Golongan::findOrFail($id);
        return view('golongan', compact('golongan')); // You need to create this view file
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gol_kode' => 'required',
            'gol_nama' => 'required',
        ]);

        $golongan = Golongan::findOrFail($id);

        $golongan->update([
            'gol_kode' => $request->gol_kode,
            'gol_nama' => $request->gol_nama,
        ]);

        return redirect()->route('golongan')->with('success', 'Golongan updated successfully');
    }

    public function destroy($id)
    {
        try {
            $golongan = Golongan::findOrFail($id);
            $golongan->delete();

            return redirect()->route('golongan')->with('success', 'Golongan deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('golongan')->with('error', 'Failed to delete Golongan');
        }
    }
}
