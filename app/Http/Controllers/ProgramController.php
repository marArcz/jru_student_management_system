<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::all();

        return view('programs.index', ['programs' => $programs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('programs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:programs'
        ]);

        $program = Program::create($request->all());
        return redirect()->route('programs.index')->with('success', 'Successfully added new program!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        return view('programs.edit',['program' => $program]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        $request->validate([
            'name' => 'required|unique:programs,name,' . $program->id
        ]);

        $program->update($request->all());
        return redirect()->route('programs.index')->with('success', 'Successfully updated program!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('programs.index')->with('success', 'Successfully deleted program!');
    }

    public function confirmDelete(Program $program)
    {
        return view('programs.confirm', ['program' => $program]);
    }
}
