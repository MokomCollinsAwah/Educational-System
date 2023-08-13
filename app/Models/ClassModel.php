<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;
    protected $table = 'class';

    static public function getSingle($id){
        return self::find($id);
    }

    static public function getRecord(){
        $return = ClassModel::select('class.*')
                    // ->where('class.is_delete','=','0')
                    // ->orderBy('class.id','desc')
                    ->paginate(20);

        return $return;
    }

    static public function getClass(){
        $return = ClassModel::select('class.*');
                // ->join('users','users.id')
                // ->get();
        return $return;
    }
}