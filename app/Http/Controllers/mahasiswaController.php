<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    // index
    function index()
    {
        return view('mahasiswa');
    }

    // tambah
    function tambah()
    {
        return view('mahasiswa_tambah');
    }

    // simpan tambah
    function simpan_tambah(Request $request)
    {
        // nanti isi logic simpan ke database
        return redirect('/mahasiswa');
    }

    // edit
    function edit($id)
    {
        // ambil data mahasiswa berdasarkan id
        return view('mahasiswa_edit', compact('id'));
    }

    // simpan edit
    function simpan_edit(Request $request, $id)
    {
        // logic edit database
        return redirect('/mahasiswa');
    }

    // detail
    function detail($id)
    {
        // tampilkan data
        return view('mahasiswa_detail', compact('id'));
    }

    // hapus
    function hapus($id)
    {
        // logic hapus
        return redirect('/mahasiswa');
    }
}
