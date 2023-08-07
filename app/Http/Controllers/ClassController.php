<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassModel;

class ClassController extends Controller
{
    public function list() {
        $data['header_title'] = 'Class List';
        return view('admin.class.list', $data);
    }
    public function add(){
        $data['header_title'] = 'Add Class Class';
        return view('admin.class.add', $data);
    }
    public function insert(Request $request){
        $save = new ClassModel;
        $save->name = $request->name;
        // $save->created
        $save->save();
        return redirect('admin/class/list')->with('success', 'Class Successfully created');
     }
}
    
