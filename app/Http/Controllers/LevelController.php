<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;

class LevelController extends Controller
{
    public function index(){
        return Level::all();
    }

    public function create(request $request){
        $level = new Level;
        $level->nama_level  = $request->nama_level;
        $level->id_dept      = $request->id_dept;
        $level->save();

        return "Data succesfully created";
    }

    public function update(request $request, $id){
        $level = Level::find($id);
        $level->nama_level  = $request->nama_level;
        $level->id_dept      = $request->id_dept;
        $level->save();

        return "Data succesfully updated";
    }

    public function delete($id){
        $level = Level::find($id);
        $level->delete();

        return "Data succesfully deleted";
    }
}
