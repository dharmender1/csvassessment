<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;
use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Student;
use Event;
use App\Events\sendemail;
class StudentController extends Controller
{
    
    public function index(Request $request)
    {
         $numofrecord = $request->numofrecord;
        
        $exitCode = Artisan::call('create:generatecsv', [
            'totalrow' => $numofrecord
        ]);
        if(isset($exitCode)){
            Event::dispatch(new sendemail(1));
            return Excel::download(new StudentsExport, time().'students.csv');
        }
     

        // $students = Student::get();
        // return view('students', compact('students'));
    }
      
    // public function export() 
    // {
    //     return Excel::download(new StudentsExport, time().'students.csv');
    // }

}
