<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Suggestion;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SuggestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pages.Suggestions.suggestions');
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
        // Data Validate
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'description' => ['required', 'string'],
            'place' => ['required', 'string', 'max:255'],
            'sector' => ['required', 'string', 'max:255'],
        ], [
            'name.required' => 'الرجاء إدخال الاسم.',
            'name.string' => 'يجب أن يكون الاسم نصًا.',
            'name.max' => 'الاسم يجب ألا يتجاوز 255 حرفًا.',

            'phone.required' => 'الرجاء إدخال رقم الهاتف.',
            'phone.string' => 'يجب أن يكون رقم الهاتف نصًا.',
            'phone.max' => 'رقم الهاتف يجب ألا يتجاوز 20 حرفًا.',

            'description.required' => 'الرجاء إدخال الوصف.',
            'description.string' => 'يجب أن يكون الوصف نصًا.',

            'place.required' => 'الرجاء إدخال المكان.',
            'place.string' => 'يجب أن يكون المكان نصًا.',
            'place.max' => 'المكان يجب ألا يتجاوز 255 حرفًا.',

            'sector.required' => 'الرجاء إدخال القطاع.',
            'sector.string' => 'يجب أن يكون القطاع نصًا.',
            'sector.max' => 'القطاع يجب ألا يتجاوز 255 حرفًا.',
        ]);


        Suggestion::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'description' => $request->input('description'),
            'place' => $request->input('place'),
            'sector' => $request->input('sector'),

        ]);

        Alert::success('Success', 'Your Suggestion is Submitted!');

        return redirect()->route('suggestions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
