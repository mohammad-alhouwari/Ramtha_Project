<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ComplainController extends Controller
{

    public function index()
    {
        return view('pages.Complains.complains');
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
            'name' => 'required|string',
            'email' => 'required|email',
            'national_id' => 'required|string',
            'phone' => 'required|string',
            'complain_type' => 'required|string',
            'address' => 'nullable|string',
            'complain_details' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
        ]);

        // Create a new Complain instance with the validated data
        $complain = new Complain([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'national_id' => $request->input('national_id'),
            'phone' => $request->input('phone'),
            'complain_type' => $request->input('complain_type'),
            'address' => $request->input('address'),
            'complain_details' => $request->input('complain_details'),
        ]);

        // Check if an image file was provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $complain->image = $imageName;
        }

        // Save the Complain instance to the database
        $complain->save();

        // Redirect to a success page or return a response as needed
        return redirect()->route('complains.index')->with('success', 'Complain submitted successfully!')->with('alert', 'success');
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
