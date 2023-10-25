<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Alert;
use Illuminate\Validation\Rule;

class SiswaController extends Controller
{
    //Menampilkan Semua data Siswa
    public function index()
    {
        $siswa = siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    //Menampilkan form penambahan data Siswa
    public function create()
    {
        return view('siswa.create');
    }

    //Menyimpan data yang ditambahkan
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|numeric|unique:siswa',
            'nama' => 'required|string',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'no_telp' => 'required|numeric',
        ]);

        Siswa::create($request->all());
        toast('Data Berhasil Ditambah', 'success')->position('top')->timerProgressBar();
        return redirect()->route('siswa.index');
    }

    //Menampilkan data yang Siswa akan diubah
    public function edit($nis)
    {
        $siswa = Siswa::find($nis);
        return view('siswa.edit', compact('siswa'));
    }

    //Menyimpan perubahan data Siswa
    public function update(Request $request, $nis)
    {   
        $siswa = Siswa::FindorFail($nis);
        
        $validasi = $request->validate([
            "nis" => [
                "required",
                Rule::unique('siswa', 'nis')->ignore($nis, 'nis'),
            ],
                'nama' => 'required|string',
                'jenis_kelamin' => 'required',
                'tempat_lahir' => 'required|string',
                'tanggal_lahir' => 'required|date',
                'alamat' => 'required',
                'no_telp' => 'required|numeric'
        ]);


        Siswa::where("nis", $siswa->nis)->update($validasi);
        toast('Data Berhasil Diubah', 'success')->position('top')->timerProgressBar();
        return redirect()->route('siswa.index');
    }

    //Menghapus data Siswa
    public function destroy($nis)
    {
        $siswa = Siswa::find($nis);
        $siswa->delete();
        toast('Data Berhasil Dihapus', 'success')->position('top')->timerProgressBar();
        return redirect()->route('siswa.index');
    }
}
