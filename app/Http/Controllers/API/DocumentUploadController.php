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
        $documentUpload = documentUpload::all();

        return response()->json($documentUpload);
    }
    public function view($id)
    {
        $documentUpload = DB::table('document_uploads')->where('document_uploads.id',$id)
        ->join('users','document_uploads.user_id','users.ic')

     
        ->select('document_uploads.*','users.name')
       
        ->get();
         return response()->json($documentUpload);
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
        $validateData = $request->validate([
            'user_id'=>'',
            'ref_number'=>'',
            'document_name'=>'required|min:3',
            'document_note'=>'',
            'purpose'=>'required',           
            'document_pdf'=>'required|pdf',
            'document_action'=>'',
            'document_pdf_action'=>'',
            'action_pic'=>'',
            'pic_pdf'=>'',

        ]);

        $name = $request->file('document_pdf')->getClientOriginalName();
        $filename = time().".".$name;
        $path = $request->file('document_pdf')->store('public/documents');
        $path_url = $path.$filename;
  
 
 

            $doc_save = new documentUpload();
            $doc_save->user_id = $request->user_id;
            $doc_save->ref_number = $request->ref_number;
            $doc_save->document_name = $request->document_name;
            $doc_save->document_note = $request->document_note;
            $doc_save->purpose = $request->purpose;
            $doc_save->document_pdf = $path_url;
                     
            $doc_save->save();

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
