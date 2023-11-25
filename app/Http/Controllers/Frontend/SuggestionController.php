<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MunicipalityInfo;
use App\Models\Suggestion;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SuggestionController extends Controller
{

    public function index()
    {
        $municipalityInfo=MunicipalityInfo::latest()->first();
        return view('Pages.Suggestions.suggestions',compact('municipalityInfo'));
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
            'phone' => ['required', 'numeric', 'digits:10', 'regex:/^07\d{8}$/'],
            'description' => ['required', 'string'],
            'place' => ['required', 'string', 'max:255'],
            'sector' => ['required', 'string', 'max:255'],
        ], [
            'name.required' => 'الرجاء إدخال الاسم.',
            'name.string' => 'يجب أن يكون الاسم نصًا.',
            'name.max' => 'الاسم يجب ألا يتجاوز 255 حرفًا.',

            'phone.required' => 'الرجاء إدخال رقم الهاتف.',
            'phone.numeric' => 'يجب أن يكون رقم الهاتف رقمًا.',
            'phone.digits' => 'يجب أن يتألف رقم الهاتف من 10 أرقام.',
            'phone.regex' => 'يجب أن يبدأ رقم الهاتف بـ "07" ويتبعه 8 أرقام أخرى.',

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

        Alert::success('تم بنجاح', 'تقديم فكرة مُبادرتك!');
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
