<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function index(){
        return Jabatan::all();
    }

    public function create(request $request){
        $jabatan = new Jabatan;
        $jabatan->nama_jabatan  = $request->nama_jabatan;
        $jabatan->id_level      = $request->id_level;
        $jabatan->save();

        return "Data succesfully created";
    }

    public function update(request $request, $id){
        $jabatan = Jabatan::find($id);
        $jabatan->nama_jabatan  = $request->nama_jabatan;
        $jabatan->id_level      = $request->id_level;
        $jabatan->save();

        return "Data succesfully updated";
    }

    public function delete($id){
        $jabatan = Jabatan::find($id);
        $jabatan->delete();

        return "Data succesfully deleted";
    }
}
