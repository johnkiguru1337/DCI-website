<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\crime;
use App\Http\Requests\crimeValidateRequest;

class crimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth',['except'=>['index','show']]);
    }
    public function index()
    {
        $crimes=crime::all();
        return view('owners/crime.index')
            ->with('crimes',$crimes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owners/crime.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(crimeValidateRequest $request)
    {
        $request->validated();
        $crime=crime::create([
            'user_id'=>Auth()->user()->id,
            'crime_id'=>$request->input('crimeid'),
            'officer_id'=>$request->input('officerid'),
            'crime_description'=>$request->input('crimedescription'),
        ]);
        return redirect('/crime');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crime=crime::find($id);

        return view('owners/crime.show')
            ->with('crime',$crime);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crime=crime::find($id);

        return view('/owners/crime.edit')
            ->with('crime',$crime);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'officerid'=>'required',
            'crimedescription'=>'required'
        ]);
        $officer=crime::where('id',$id)
            ->update([
                'officer_id'=>$request->input('officerid'),
                'crime_description'=>$request->input('crimedescription'),
        ]);

        return redirect('/crime');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crime=crime::find($id);

        $crime->where('id','=',$crime->id)->delete();

        return redirect('/crime');
    }
}
