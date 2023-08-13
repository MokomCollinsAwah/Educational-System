<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use App\Models\StudentModel;
use Illuminate\Http\Request;
use Hash;
use Auth;



class StudentController extends Controller
{
    public function list() {
        $data['getRecord'] = StudentModel::getStudent();
        $data['header_title'] = 'Student List';
        return view('admin.student.list', $data);
    }

    public function add(){
        $data['getClass'] = ClassModel::getClass();
        $data['header_title'] = 'Add New Student';
        return view('admin.student.add', $data);
    }

    public function insert(Request $request){
        request()->


        $save = new StudentModel;
        $save->first_name = trim($request->first_name);
        $save->last_name = trim($request->last_name);
        $save->admission_number = trim($request->admission_number);
        $save->department = trim($request->department);
        $save->class_id = trim($request->class_id);
        $save->gender = trim($request->gender);
        $save->date_of_birth = trim($request->date_of_birth);
        $save->department = trim($request->department);
        $save->parents_contact = trim($request->parents_contact);
        // $save->created
        $save->save();
        return redirect('admin/student/list')->with('success', 'Student Successfully created');
    }


    public function edit($id){
        $data['getRecord'] = StudentModel::getSingle($id);
        if(!empty($data['getRecord']))
        {
            // $data['getStudent'] = StudentModel::getStudent();
            $data['header_title'] = 'Edit Student';
            return view('admin.student.edit',$data);
        }
        else{
            abort(404);
        }
     }

     public function update($id, Request $request){
        $save = StudentModel::getSingle($id);
        $save->first_name = trim($request->first_name);
        $save->last_name = trim($request->last_name);
        $save->admission_number = trim($request->admission_number);
        $save->department = trim($request->department);
        $save->class_id = trim($request->class_id);
        $save->gender = trim($request->gender);
        $save->date_of_birth = trim($request->date_of_birth);
        $save->department = trim($request->department);
        $save->parents_contact = trim($request->parents_contact);
        // $save->created
        $save->save();

        return redirect('admin/student/list')->with('success', 'Student Successfully updated!');
    }
    
    public function delete($id){
        $save = StudentModel::getSingle($id);
        if(!empty($save)){
            $save-> is_delete = 1;
            $save->save();
            
            return redirect('admin/student/list')->with('success', 'Student Successfully Deleted!');

        }

        return redirect()->back()->with('success', 'Student Successfully deleted!');
     }

}
