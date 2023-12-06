<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

class StudentAuthController extends Controller
{
    public function __construct()
    {
        // return $this->middleware(['guest:student'],['except'=>['logout']]);
    }

    public function index()
    {
        return view('students.auth.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'student_id_no' => ['required', 'regex:/^(\d{4}-)\d{5}$/D'],
            'password' => 'required',
        ]);
        $student = Student::where('student_id_no', $request->input('student_id_no'))->first();
        if ($student) {
            // chck if password match
            if (Hash::check($validated['password'], $student->password)) {
                Auth::guard('student')->login($student);
                return redirect()->route('students.home.index');
            } else {
                throw ValidationException::withMessages([
                    'password' => 'You entered an incorrect password!',
                ]);
            }
        } else {
            throw ValidationException::withMessages([
                'student_id_no' => 'Sorry the student id number you entered is not found!'
            ]);
        }
    }

    public function create()
    {
        $programs = Program::all();
        return view('students.auth.register', compact('programs'));
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'middlename' => 'nullable',
            'student_id_no' => ['required', 'unique:students,student_id_no', 'regex:/^(\d{4}-)\d{5}$/D'],
            'password' => ['required', 'confirmed', 'min:8'],
            'program_id' => 'required',
            'email' => ['required', 'unique:students,email', 'email'],
            'address' => ['required'],
            'phone' => ['required', 'regex:/^([0]{1}[9]{1})(\d{9})$/D'],
        ]);

        $student = Student::create($validated);
        Auth::guard('student')->login($student);
        return redirect(route('students.home.index'));
    }

    public function logout(Request $request){
        Auth::guard('student')->logout();

        return redirect(route('students.auth.index'));
    }
}
