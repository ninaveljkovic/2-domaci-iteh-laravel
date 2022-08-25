<?php

namespace App\Http\Controllers;

use App\Models\Frizer;
use Illuminate\Http\Request;

class FrizerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Frizer::all();
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frizer  $frizer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Frizer::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frizer  $frizer
     * @return \Illuminate\Http\Response
     */
    public function edit(Frizer $frizer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frizer  $frizer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Frizer $frizer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frizer  $frizer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frizer $frizer)
    {
        //
    }
}
