<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view('pelanggan', compact('pelanggans'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pel_nama' => 'required|string|max:255',
            'pel_alamat' => 'required|string|max:255',
            'pel_hp' => 'required|string|max:15',
            'pel_ktp' => 'required|string|max:20',
            'pel_seri' => 'required|string|max:20',
            'pel_meteran' => 'required|string|max:20',
            'pel_aktif' => 'required|string|max:255',
            'pel_id_user' => 'required|string|max:255',
        ]);

        Pelanggan::create($request->all());

        return redirect('/pel')->with('success', 'Pelanggan added successfully!');
    }

    public function show(Pelanggan $pelanggan)
    {
        return view('pelanggan.show', compact('pelanggan'));
    }

    public function edit(Pelanggan $pelanggan)
    {
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, Pelanggan $pelanggan)
    {
        $request->validate([
            'pel_nama' => 'required|string|max:255',
            'pel_alamat' => 'required|string|max:255',
            'pel_hp' => 'required|string|max:15',
            'pel_ktp' => 'required|string|max:20',
            'pel_seri' => 'required|string|max:20',
            'pel_meteran' => 'required|string|max:20',
            'pel_aktif' => 'required|string|max:255',
            'pel_id_user' => 'required|string|max:255',
        ]);

        $pelanggan->update($request->all());

        return redirect('/pel')->with('success', 'Pelanggan updated successfully!');
    }

    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();
        return redirect('/pel')->with('success', 'Pelanggan deleted successfully!');
    }
}
