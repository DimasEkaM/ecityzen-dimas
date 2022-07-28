<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index(){
        return Department::all();
    }

    public function create(request $request){
        $department = new Department;
        $department->nama_dept  = $request->nama_dept;
        $department->save();

        return "Data succesfully created";
    }

    public function update(request $request, $id){
        $department = Department::find($id);
        $department->nama_dept  = $request->nama_dept;
        $department->save();

        return "Data succesfully updated";
    }

    public function delete($id){
        $department = Department::find($id);
        $department->delete();

        return "Data succesfully deleted";
    }
}
