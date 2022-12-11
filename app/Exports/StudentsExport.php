<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Student::all();
        return Student::select("id", "name", "email","class","school","total_score","address","phone")->get();
    }

    public function headings(): array
    {
        return ["ID", "Name", "Email", "Class", "School", "Total_score", "Address", "Phone"];
    }
}
