<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;
use App\Http\Requests\LevelRequest;

class LevelController extends Controller
{
    public function index(){
        return Level::all();
    }

    public function create(LevelRequest $request){
        $level = new Level;
        $level->nama_level  = $request->nama_level;
        $level->id_dept      = $request->id_dept;
        $level->save();
        return response()->json(['success' => true , 'message' => 'Data succesfully created' ]);
    }

    public function update(LevelRequest $request, $id){
        $level = Level::find($id);
        $level->nama_level  = $request->nama_level;
        $level->id_dept      = $request->id_dept;
        $level->save();
        return response()->json(['success' => true , 'message' => 'Data succesfully updated' ]);
    }

    public function delete($id){
        $level = Level::find($id);
        $level->delete();
        return response()->json(['success' => true , 'message' => 'Data succesfully deleted' ]);
    }
}
