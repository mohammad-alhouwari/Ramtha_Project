<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\ComplainDataTable;
use App\Http\Controllers\Controller;
use App\Models\Complain;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;

class ComplainController extends Controller
{
    use ImageUploadTrait;


    public function index(ComplainDataTable $dataTables)
    {
        return $dataTables->render('admin.pages.complain.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $complain = Complain::findOrFail($id);
        // $this->deleteImage($complain->image);
        $complain->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
