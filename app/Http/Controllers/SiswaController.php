<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function store(Request $request)
    {
        Siswa::create([
            'nama' => $request->input('nama'),
            'ttl' => $request->input('ttl'),
            'sekolah' => $request->input('sekolah'),
            'keterangan' => $request->input('keterangan'),
        ]);

        return redirect()->back()->with('success', 'Data siswa berhasil ditambahkan!');
    }

    public function update(Request $request, $id) {
        Siswa::find($id)->update($request->all());

        return redirect()->back()->with('success', 'Data siswa berhasil diupdate!');
    }

    public function delete($id) {
        Siswa::where('id', $id)->delete();

        return redirect()->back()->with('success', 'Data siswa berhasil ditambahkan!');
    }
}
