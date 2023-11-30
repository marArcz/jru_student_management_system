<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentAuthController extends Controller
{
   public function login(Request $request){
        $student = Student::where('student_id_no', $request->input('student_id_no'));
        if($student){
            // chck if password match
            if(Hash::verify($student->password,$request->password)){
            }
        }
   }
}
