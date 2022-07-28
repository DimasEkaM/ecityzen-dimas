<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index(){
        return Karyawan::all();
    }

    public function create(request $request){
        $karyawan = new Karyawan;
        $karyawan->nik          = $request->nik;
        $karyawan->nama         = $request->nama;
        $karyawan->ttl          = $request->ttl;
        $karyawan->alamat       = $request->alamat;
        $karyawan->id_jabatan   = $request->id_jabatan;
        $karyawan->save();

        return "Data succesfully created";
    }

    public function update(request $request, $id){
        $karyawan = Karyawan::find($id);
        $karyawan->nik          = $request->nik;
        $karyawan->nama         = $request->nama;
        $karyawan->ttl          = $request->ttl;
        $karyawan->alamat       = $request->alamat;
        $karyawan->id_jabatan   = $request->id_jabatan;
        $karyawan->save();

        return "Data succesfully updated";
    }

    public function delete($id){
        $karyawan = Karyawan::find($id);
        $karyawan->delete();

        return "Data succesfully deleted";
    }
}
