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
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
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

    public function search(Request $request)
    {
        $query = $request->input('query');
        $siswas = Siswa::where('nama', 'LIKE', '%' . $query . '%')->get();
    
        return view('data_siswa', ['data_siswa' => $siswas]);
    }
}
