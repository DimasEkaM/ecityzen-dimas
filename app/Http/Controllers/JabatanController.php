<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;
use App\Http\Requests\JabatanRequest;

class JabatanController extends Controller
{
    public function index(){
        return Jabatan::all();
    }

    public function create(JabatanRequest $request){
        $jabatan = new Jabatan;
        $jabatan->nama_jabatan  = $request->nama_jabatan;
        $jabatan->id_level      = $request->id_level;
        $jabatan->save();
        return response()->json(['success' => true , 'message' => 'Data succesfully created' ]);
    }

    public function update(JabatanRequest $request, $id){
        $jabatan = Jabatan::find($id);
        $jabatan->nama_jabatan  = $request->nama_jabatan;
        $jabatan->id_level      = $request->id_level;
        $jabatan->save();
        return response()->json(['success' => true , 'message' => 'Data succesfully updated' ]);
    }

    public function delete($id){
        $jabatan = Jabatan::find($id);
        $jabatan->delete();
        return response()->json(['success' => true , 'message' => 'Data succesfully deleted' ]);
    }
}
