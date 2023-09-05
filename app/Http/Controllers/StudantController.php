<?php

namespace App\Http\Controllers;

use App\Models\Studant;
use App\Http\Requests\StoreStudantRequest;
use App\Http\Requests\UpdateStudantRequest;
use Illuminate\Http\Request;
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
        // $studants = DB::table('studants')->select('id', 'fname', 'lname', 'email', 'age')->get();
        // $students = Studant::select('id', 'fname', 'lname', 'email', 'age')->get();
        $students = DB::select("SELECT * FROM  studants ");
       

        DB::table('studants')->where('id', '=', 2)->delete();
        // return redirect('home');
        return redirect('home')->with('studants', $students);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $students = DB::select("SELECT * FROM  studants ");

        //    $request->validate([
    //         'fname' => 'required|string|max:255',
    //         'lname' => 'required|string|max:255',
    //         'email' => 'required|email|unique:students|max:255',
    //         'age' => 'required|integer',
    //     ]);
        $post= new Studant();
       $post->fname= $request->input('fname');
        $post->lname= $request->input('lname');
        $post->email= $request->input('email');
        $post->age=$request->input('age');
        $post->save();
        return redirect('home')->with('studants', $students);
        // return redirect('home1');
     
        




        // Create a new student record

        // Redirect back with a success message
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Studant  $studant
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Studant  $studant
     * @return \Illuminate\Http\Response
     */
    public function edit(Studant $studant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudantRequest  $request
     * @param  \App\Models\Studant  $studant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudantRequest $request, Studant $studant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Studant  $studant
     * @return \Illuminate\Http\Response
     */
   
}
