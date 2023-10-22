<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

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
            'nama' => 'required|string|regex:/^[A-Za-z]+$/',
            'jenis_kelamin' => 'required|string|in:Pria,Wanita,pria,wanita',
            'tempat_lahir' => 'required|string|regex:/^[A-Za-z]+$/',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'no_telp' => 'required|numeric',
        ]);

        Siswa::create($request->all());
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
        $siswa = Siswa::find($nis);
        $request->validate([
            'nama' => 'required|string|regex:/^[A-Za-z]+$/',
            'jenis_kelamin' => 'required|string|in:Pria,Wanita,pria,wanita',
            'tempat_lahir' => 'required|string|regex:/^[A-Za-z]+$/',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'no_telp' => 'required|numeric',
        ]);

        $siswa->update($request->all());
        return redirect()->route('siswa.index');
    }

    //Menghapus data Siswa
    public function destroy($nis)
    {
        $siswa = Siswa::find($nis);
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}
