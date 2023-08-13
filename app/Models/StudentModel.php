<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class StudentModel extends Model
{
    use HasFactory;
    protected $table = 'student';

    static public function getSingle($id){
        return self::find($id);
    }

    static public function getStudent(){
        $return = StudentModel::select('student.*')
                    ->where('student.is_delete','=','0')
                    ->orderBy('student.id','desc')
                    ->paginate(30);
            if(!empty(Request::get('admission_number'))){
                $return = $return->where('student.admission_number','like',"%" .Request::get('admission_number'),'%');
            }
            if(!empty(Request::get('first_name'))){
                $return = $return->where('student.first_name','like',"%" .Request::get('first_name'),'%');
            }
            if(!empty(Request::get('department'))){
                $return = $return->where('student.department','like',"%" .Request::get('department'),'%');
            }
            if(!empty(Request::get('class_id'))){
                $return = $return->where('student.class_id','like',"%" .Request::get('class_id'),'%');
            }
            if(!empty(Request::get('last_name'))){
                $return = $return->where('student.last_name','like',"%" .Request::get('last_name'),'%');
            }

        return $return;
    }
}
