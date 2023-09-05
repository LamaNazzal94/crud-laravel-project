<?php

namespace App\Http\Controllers;

use App\Models\Studant;
use App\Http\Requests\StoreStudantRequest;
use App\Http\Requests\UpdateStudantRequest;
use DB;

class StudantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {

$studants = DB::table('studants')->select('id','fname', 'lname','email','age')->get();

return view('home')->with('studants', $studants);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        DB::table('students')->where('id', '=', 1)->delete();
        return view('home');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Studant  $studant
     * @return \Illuminate\Http\Response
     */
    public function show(Studant $studant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Studant  $studant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studant=Studant::select('*')->find($id);
        return view('edit',['studant'=>$studant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudantRequest  $request
     * @param  \App\Models\Studant  $studant
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateStudantRequest $request)
{
    // Find the student record
    $studant = Studant::find($id);

    if (!$studant) {
        return redirect()->back()->with('error', 'Student not found.');
    }

    // Validate the input data
    $validatedData = $request->validated();

    // Update the student's information
    $studant->update([
        'fname' => $validatedData['fname'],
        'lname' => $validatedData['lname'],
        'email' => $validatedData['email'],
        'age'   => $validatedData['age'],
    ]);

    // Redirect back to the view with a success message
    return redirect()->route('home')->with('success', 'Student information updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Studant  $studant
     * @return \Illuminate\Http\Response
     */
    
}
