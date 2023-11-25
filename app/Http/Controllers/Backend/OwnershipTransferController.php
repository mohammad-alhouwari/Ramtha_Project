<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\OwnershipTransferDataTable;
use App\Http\Controllers\Controller;
use App\Models\OwnershipTransfer;
use Illuminate\Http\Request;

class OwnershipTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OwnershipTransferDataTable $dataTables)
    {
        return $dataTables->render('admin.pages.Ownership_Transfer.index');
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
        $ownershipTransfer = OwnershipTransfer::findOrFail($id);
        $ownershipTransfer->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
