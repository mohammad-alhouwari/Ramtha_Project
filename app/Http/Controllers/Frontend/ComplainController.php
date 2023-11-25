<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Complain;
use App\Http\Controllers\Controller;
use App\Models\MunicipalityInfo;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ComplainController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {
        $municipalityInfo = MunicipalityInfo::first();
        return view('pages.Complains.complains', ['municipalityInfo' => $municipalityInfo]);
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
        // Validate the incoming request data
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'national_id' => ['required', 'numeric', 'min:10'],
            'phone' => ['required', 'numeric', 'digits:10', 'regex:/^(079|078|077|06|02)[0-9]{7}$/'],
            'complain_type' => ['required', 'string'],
            'address' => ['required', 'string', 'max:255'],
            'complain_details' => ['required', 'string'],
            'image' => ['nullable'],
        ], [
            'name.required' => 'الرجاء إدخال الاسم.',
            'name.string' => 'يجب أن يكون الاسم نصًا.',
            'name.max' => 'الاسم يجب ألا يتجاوز 255 حرفًا.',

            'email.required' => 'الرجاء إدخال البريد الإلكتروني.',
            'email.email' => 'البريد الإلكتروني يجب أن يكون صالحًا.',

            'national_id.required' => 'الرجاء إدخال الهوية الوطنية.',
            'national_id.numeric' => 'يجب أن تكون الهوية الوطنية رقمًا.',
            'national_id.digits' => 'يجب أن تتكون الهوية الوطنية من 10 أرقام.',

            'phone.required' => 'الرجاء إدخال رقم الهاتف.',
            'phone.numeric' => 'يجب أن يكون رقم الهاتف رقمًا.',
            'phone.digits' => 'يجب أن يتكون رقم الهاتف من 10 أرقام.',
            'phone.regex' => 'رقم الهاتف يجب أن يبدأ بـ 079 أو 078 أو 077 أو 06 أو 02.',

            'complain_type.required' => 'الرجاء اختيار نوع الشكوى.',
            'complain_type.string' => 'يجب أن يكون نوع الشكوى نصًا.',

            'address.required' => 'الرجاء إدخال المكان.',
            'address.string' => 'يجب أن يكون المكان نصًا.',
            'address.max' => 'المكان يجب ألا يتجاوز 255 حرفًا.',

            'complain_details.required' => 'الرجاء إدخال تفاصيل الشكوى.',
            'complain_details.string' => 'يجب أن تكون تفاصيل الشكوى نصًا.',

        ]);

        $imagePath = $this->uploadImage($request, 'image', 'uploads');
        // Create a new Complain instance with the validated data
        $complain = new Complain([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'national_id' => $request->input('national_id'),
            'phone' => $request->input('phone'),
            'complain_type' => $request->input('complain_type'),
            'address' => $request->input('address'),
            'complain_details' => $request->input('complain_details'),
            'image' => $imagePath,


        ]);

        // Save the Complain instance to the database
        $complain->save();

        // Redirect to a success page or return a response as needed
        Alert::success('نجاح!', 'تم تقديم الشكوى بنجاح!');
        $municipalityInfo = MunicipalityInfo::first();
        return redirect()->route('complains.index')->with(['municipalityInfo' => $municipalityInfo]);
        
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function show(Complain $complain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function edit(Complain $complain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complain $complain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complain $complain)
    {
        //
    }
}
