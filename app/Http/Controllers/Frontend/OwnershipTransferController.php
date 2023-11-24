<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\OwnershipTransfer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OwnershipTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pages.Ownership_Transfer.ownership_transfer');
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
            'landlord_phone' => ['required', 'numeric', 'digits:10', 'regex:/^07\d{8}$/'],
            'new_owner_name' => ['required', 'string', 'max:255'],
            'new_owner_phone' => ['required', 'numeric', 'digits:10', 'regex:/^07\d{8}$/'],
            'national_id' => ['required', 'numeric', 'digits:10'],
            'property_number' => ['required'],
            'municipality_name' => ['required', 'string', 'max:255'],
            'basin' => ['required', 'string', 'max:255'],
            'district' => ['required', 'string', 'max:255'],
            'land_number' => ['required', 'string', 'max:20'],
        ], [
            'landlord_phone.required' => 'الرجاء إدخال رقم هاتف المالك الحالي.',
            'landlord_phone.numeric' => 'يجب أن يكون رقم هاتف المالك الحالي رقمًا.',
            'landlord_phone.digits' => 'يجب أن يتألف رقم هاتف المالك الحالي من 10 أرقام.',
            'landlord_phone.regex' => 'يجب أن يبدأ رقم هاتف المالك الحالي بـ "07" ويتبعه 8 أرقام أخرى.',

            'new_owner_name.required' => 'الرجاء إدخال اسم المالك الجديد.',
            'new_owner_name.string' => 'يجب أن يكون اسم المالك الجديد نصًا.',
            'new_owner_name.max' => 'الاسم يجب ألا يتجاوز 255 حرفًا.',

            'new_owner_phone.required' => 'الرجاء إدخال رقم هاتف المالك الجديد.',
            'new_owner_phone.numeric' => 'يجب أن يكون رقم هاتف المالك الجديد رقمًا.',
            'new_owner_phone.digits' => 'يجب أن يتألف رقم هاتف المالك الجديد من 10 أرقام.',
            'new_owner_phone.regex' => 'يجب أن يبدأ رقم هاتف المالك الجديد بـ "07" ويتبعه 8 أرقام أخرى.',

            'national_id.required' => 'الرجاء إدخال الرقم الوطني.',
            'national_id.numeric' => 'يجب أن يكون الرقم الوطني رقمًا.',
            'national_id.digits' => 'يجب أن يتألف الرقم الوطني من 10 أرقام.',



            'property_number.required' => 'الرجاء إدخال رقم العقار.',

            'municipality_name.required' => 'الرجاء إدخال اسم البلدية.',
            'municipality_name.string' => 'يجب أن يكون اسم البلدية نصًا.',
            'municipality_name.max' => 'اسم البلدية يجب ألا يتجاوز 255 حرفًا.',

            'basin.required' => 'الرجاء إدخال اسم الحوض.',
            'basin.string' => 'يجب أن يكون اسم الحوض نصًا.',
            'basin.max' => 'اسم الحوض يجب ألا يتجاوز 255 حرفًا.',

            'district.required' => 'الرجاء إدخال اسم الحي.',
            'district.string' => 'يجب أن يكون اسم الحي نصًا.',
            'district.max' => 'اسم الحي يجب ألا يتجاوز 255 حرفًا.',

            'land_number.required' => 'الرجاء إدخال رقم الأرض.',


        ]);

        // Data Insertion
        OwnershipTransfer::create([
            'landlord_phone' => $request->input('landlord_phone'),
            'new_owner_name' => $request->input('new_owner_name'),
            'new_owner_phone' => $request->input('new_owner_phone'),
            'national_id' => $request->input('national_id'),
            'property_number' => $request->input('property_number'),
            'municipality_name' => $request->input('municipality_name'),
            'basin' => $request->input('basin'),
            'district' => $request->input('district'),
            'land_number' => $request->input('land_number'),
        ]);

        // Alert Message
        Alert::success('تم بنجاح', 'تقديم معلوماتك لطلب نقل الملكية!');

        // Redirection
        return redirect()->route('ownership_transfer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OwnershipTransfer  $ownershipTransfer
     * @return \Illuminate\Http\Response
     */
    public function show(OwnershipTransfer $ownershipTransfer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OwnershipTransfer  $ownershipTransfer
     * @return \Illuminate\Http\Response
     */
    public function edit(OwnershipTransfer $ownershipTransfer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OwnershipTransfer  $ownershipTransfer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OwnershipTransfer $ownershipTransfer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OwnershipTransfer  $ownershipTransfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(OwnershipTransfer $ownershipTransfer)
    {
        //
    }
}
