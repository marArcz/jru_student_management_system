<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;

class ClerkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clerks = User::whereIn('user_type_id', UserType::select('id')->where('description','Clerk'))->get();
        return view('clerks.index',compact('clerks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clerks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'email|required|unique:users',
            'firstname' => 'required',
            'lastname' => 'required',
            'password' => 'required|min:8',
        ]);


        $clerkType = UserType::where('description','Clerk')->first();
        $clerkType->users()->create($request->all());

        return redirect(route('clerks.index'))->with('success','Successfully added a clerk!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $clerk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $clerk)
    {
        return view('clerks.edit',['clerk' => $clerk]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $clerk)
    {
        $request->validate([
            'email' => 'email|required|unique:users,email,' . $clerk->id,
            'firstname' => 'required',
            'lastname' => 'required',
        ]);

       $clerk->email = $request->input('email');
       $clerk->firstname = $request->input('firstname');
       $clerk->lastname = $request->input('lastname');

       if($request->has('password') && !empty($request->input('password'))){
            $clerk->password = $request->input('password');
       }

       $clerk->save();

        return redirect(route('clerks.index'))->with('success','Successfully updated clerk!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $clerk)
    {
        $clerk->delete();
        return redirect(route('clerks.index'))->with('success','Successfully deleted clerk!');
    }

    public function confirmDelete(User $clerk)
    {
        return view('clerks.confirm', ['clerk' => $clerk]);
    }
}
