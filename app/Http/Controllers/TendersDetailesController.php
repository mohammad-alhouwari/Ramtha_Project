<?php

namespace App\Http\Controllers;

use App\Models\TendersDetailes;
use App\Http\Requests\StoreTendersDetailesRequest;
use App\Http\Requests\UpdateTendersDetailesRequest;

class TendersDetailesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lama.tedersDetailes');

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
     * @param  \App\Http\Requests\StoreTendersDetailesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTendersDetailesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TendersDetailes  $tendersDetailes
     * @return \Illuminate\Http\Response
     */
    public function show(TendersDetailes $tendersDetailes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TendersDetailes  $tendersDetailes
     * @return \Illuminate\Http\Response
     */
    public function edit(TendersDetailes $tendersDetailes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTendersDetailesRequest  $request
     * @param  \App\Models\TendersDetailes  $tendersDetailes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTendersDetailesRequest $request, TendersDetailes $tendersDetailes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TendersDetailes  $tendersDetailes
     * @return \Illuminate\Http\Response
     */
    public function destroy(TendersDetailes $tendersDetailes)
    {
        //
    }
}
