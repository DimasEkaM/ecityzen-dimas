<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Http\Requests\DepartmentRequest;

class DepartmentController extends Controller
{
    public function index(){
        return Department::all();
    }

    public function create(DepartmentRequest $request){
        $department = new Department;
        $department->nama_dept  = $request->nama_dept;
        $department->save();
        return response()->json(['success' => true , 'message' => 'Data succesfully created' ]);
    }

    public function update(DepartmentRequest $request, $id){
        $department = Department::find($id);
        $department->nama_dept  = $request->nama_dept;
        $department->save();
        return response()->json(['success' => true , 'message' => 'Data succesfully updated' ]);
    }

    public function delete($id){
        $department = Department::find($id);
        $department->delete();
        return response()->json(['success' => true , 'message' => 'Data succesfully deleted' ]);
    }
}
