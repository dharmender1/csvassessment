<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'class',
        'school', 
        'total_score', 
        'address', 
        'phone'

        //name, email, class, school, total-score, address, phone
    ];

    public static function getAllStudents()
    {

        $result = DB::table('students')
        ->select('id','name','email','class','school','total_score','address','phone')
        ->get()->toArray();

        return $result;
    }
}
