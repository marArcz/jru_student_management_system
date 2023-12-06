<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Student;
use Carbon\Carbon;
use Hamcrest\Text\MatchesPattern;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin'],['except' => ['index','show','verify','updateStatus','print']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programs = Program::all();
        return view('students.create', ['programs' => $programs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'program_id' => ['required'],
            'student_id_no' => ['required', 'unique:students,student_id_no','regex:/^(\d{4}-)\d{5}$/D'],
            'email' => ['required', 'unique:students,email','email'],
            'address' => ['required'],
            'phone' => ['required', 'regex:/^([0]{1}[9]{1})(\d{9})$/D'],
            'password' => ['required','min:8']
        ]);

        $student = Student::create($validated);
        return redirect()->route('students.index')->with('success', 'Successfully added a student!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {

        $data['student'] = $student;
        $data['programs'] = Program::all();

        return view('students.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'program_id' => ['required'],
            'student_id_no' => ['required', 'unique:students,student_id_no,' . $student->id, "regex:/^(\d{4}-)\d{5}$/D"],
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success','Successfully updated student!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Successfully deleted student!');
    }

    public function confirmDelete(Student $student)
    {
        return view('students.confirm', ['student' => $student]);
    }

    public function verify(Student $student){
        return view('students.verify',compact('student'));
    }

    public function updateStatus(Request $request, Student $student){
        $student->verified_at = Carbon::now()->toDateTimeString();
        $student->save();
        return redirect(route('studentId.show',$student->id))->with('success','Successfully verified student!');
    }

    // public function printId(Student $student){
    //     return view('students.print_id',compact('student'));
    // }

    public function print(Student $student){
        return view('printables.student_details',compact('student'));
    }

}
