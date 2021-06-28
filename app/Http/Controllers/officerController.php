<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\officer;
use App\Http\Requests\officerValidateRequest;

class officerController extends Controller
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

       $officers=officer::all();
       return view('owners/officer.index')
            ->with('officers',$officers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('owners/officer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(officerValidateRequest $request)
    {
        $request->validated();
        $newImageName=time().$request->name.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);
        
        $officer=officer::create([
            'user_id'=>Auth()->user()->id,
            'officer_id'=>$request->input('officerid'),
            'officer_name'=>$request->input('officername'),
            'officer_description'=>$request->input('officerdescription'),
            'officer_rank'=>$request->input('officerrank'),
            'armouryvehicle'=>$request->input('armouryvehicle'),
            'indiscipline'=>$request->input('indiscipline'),
            'familymembers'=>$request->input('familymembers'),
            'contact'=>$request->input('contact'),
            'email'=>$request->input('email'),
            'image_path'=>$newImageName,
        ]);
        return redirect('/officer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $officer=officer::find($id);
        return view('owners/officer.show')
            ->with('officer',$officer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $officer=officer::find($id);

        return view('owners/officer.edit')
            ->with('officer',$officer);
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
            'officername'=>'required',
            'officerdescription'=>'required',
            'officerrank'=>'required',
            'armouryvehicle'=>'required',
            'indiscipline'=>'required',
            'familymembers'=>'required',
            'image'=>'mimes:jpg,png,jpeg,webp|max:5048'
        ]);
        if(empty($request->file('image'))){
            $officer=officer::where('id',$id)
            ->update([
            'officer_id'=>$request->input('officerid'),
            'officer_name'=>$request->input('officername'),
            'officer_description'=>$request->input('officerdescription'),
            'officer_rank'=>$request->input('officerrank'),
            'armouryvehicle'=>$request->input('armouryvehicle'),
            'indiscipline'=>$request->input('indiscipline'),
            'familymembers'=>$request->input('familymembers'),
        ]);
        }
        else{
            $newImageName=time().$request->name.'.'.$request->image->extension();
            $request->image->move(public_path('images'),$newImageName);

            $officer=officer::where('id',$id)
            ->update([
            'officer_id'=>$request->input('officerid'),
            'officer_name'=>$request->input('officername'),
            'officer_description'=>$request->input('officerdescription'),
            'officer_rank'=>$request->input('officerrank'),
            'armouryvehicle'=>$request->input('armouryvehicle'),
            'indiscipline'=>$request->input('indiscipline'),
            'familymembers'=>$request->input('familymembers'),
            'image_path'=>$newImageName,
        ]);
        }

        return redirect('/officer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $officer=officer::find($id);

        $officer->where('id','=',$officer->id)->delete();

        return redirect('/officer');
    }
}
