<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\documentUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class DocumentUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentUpload = DB::table('document_uploads')->where('document_uploads.id',$id)
        ->join('users','document_uploads.user_id','users.ic')

       // ->join('pkus','items.category_id','pkus.id')
        ->select('items.*','categories.category_name','skus.sku')
       //  ->orderBy('descriptions','asc')
        ->get();
         return response()->json($items);
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
     * @param  \App\Models\documentUpload  $documentUpload
     * @return \Illuminate\Http\Response
     */
    public function show(documentUpload $documentUpload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\documentUpload  $documentUpload
     * @return \Illuminate\Http\Response
     */
    public function edit(documentUpload $documentUpload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\documentUpload  $documentUpload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, documentUpload $documentUpload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\documentUpload  $documentUpload
     * @return \Illuminate\Http\Response
     */
    public function destroy(documentUpload $documentUpload)
    {
        //
    }
}
