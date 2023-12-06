<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $programs = Program::all();
        return view('students.profile.edit', compact('student', 'programs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move(public_path('images'), $image->getClientOriginalName());

            $student->image = 'images/' . $image->getClientOriginalName();
            $student->save();

            return redirect(route('students.home.index'))->with('success', 'Successfully changed photo!');
        } else {
            $validated = $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'middlename' => 'string|nullable',
                'program_id' => 'required',
                'student_id_no' => ['required', 'unique:students,student_id_no,' . $student->id, "regex:/^(\d{4}-)\d{5}$/D"],
                'email' => ['required', 'unique:students,email,' . $student->id, 'email'],
                'address' => ['required'],
                'phone' => ['required', 'regex:/^([0]{1}[9]{1})(\d{9})$/D'],
            ]);

            $student->update($validated);
            return redirect(route('students.home.index'))->with('success', 'Successfully updated information!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
