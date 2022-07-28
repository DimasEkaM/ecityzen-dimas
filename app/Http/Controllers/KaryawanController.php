<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Http\Requests\KaryawanRequest;

class KaryawanController extends Controller
{
    public function index(){
        return Karyawan::all();
    }

    public function create(KaryawanRequest $request){
        $karyawan = new Karyawan;
        $karyawan->nik          = $request->nik;
        $karyawan->nama         = $request->nama;
        $karyawan->ttl          = $request->ttl;
        $karyawan->alamat       = $request->alamat;
        $karyawan->id_jabatan   = $request->id_jabatan;
        $karyawan->save();
        return response()->json(['success' => true , 'message' => 'Data succesfully created' ]);
    }

    public function update(request $request, $id){
        $karyawan = Karyawan::find($id);
        $karyawan->nik          = $request->nik;
        $karyawan->nama         = $request->nama;
        $karyawan->ttl          = $request->ttl;
        $karyawan->alamat       = $request->alamat;
        $karyawan->id_jabatan   = $request->id_jabatan;
        $karyawan->save();
        return response()->json(['success' => true , 'message' => 'Data succesfully updated' ]);
    }

    public function delete($id){
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return response()->json(['success' => true , 'message' => 'Data succesfully deleted' ]);
    }
}
