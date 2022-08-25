<?php

namespace App\Http\Controllers;

use App\Http\Resources\TerminResource;
use App\Models\Termin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TerminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TerminResource::collection(Termin::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//post
    {
        $validator = Validator::make($request->all(), [
            'frizer_id' => 'required',
            'frizura_id' => 'required',
            'datum' => 'required|string', 
            'vreme' => 'required|string',
          
             
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $t = Termin::create([
            'frizer_id' => $request->frizer_id, 
            'frizura_id' => $request->frizura_id, 
            'datum' => $request->datum,
            'vreme' => $request->vreme, 
        ]);
        $t->save();
        return response()->json(['Termin kreiran!', new TerminResource($t)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new TerminResource(Termin::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function edit(Termin $termin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id) //put
    {
        $validator = Validator::make($request->all(), [
            'frizer_id' => '',
            'frizura_id' => '',
            'datum' => 'string', 
            'vreme' => 'string',
          
             
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());

        $t = Termin::find($id);

        if($t){
            $t->frizer_id=$request->frizer_id;
            $t->frizura_id=$request->frizura_id;
            $t->datum=$request->datum;
            $t->vreme=$request->vreme; 

            $t->save();
            return response()->json(['Uspesno izmenjeno!',new TerminResource($t)]);

        }else{
            return response()->json('Trazeni objekat ne postoji u bazi');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)//delete
    {
        $t = Termin::find($id);
        if($t ){
            $t ->delete();
            return response()->json(['Uspesno obrisano!', new TerminResource($t)]);
        
        }
           
       return response()->json('Trazeni objekat ne postoji u bazi');
    }
}
