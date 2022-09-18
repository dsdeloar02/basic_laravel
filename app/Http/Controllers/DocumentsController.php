<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use App\Http\Requests\DocumentRequest;

class DocumentsController extends Controller
{
    public function create(){
        $documents = Document::orderBy('id', 'DESC')->paginate(6);
        return view('documents.create', compact('documents'));
    }

    public function store(DocumentRequest $request){
        foreach($request->documents as $i => $documentFile){
            $document = new Document();
            $document->name = $request->name . '-' . $i + 1;
            $fileName = $i + 1 . '-' . time(). '.' .$documentFile->extension();
            $document->file =$documentFile->storePubliclyAs('public/documents', $fileName);
            $document->save();
            
        }

        
        session()->flash('success', 'Documents Added successful!');

        return redirect()->route('documents.create');
    }
}
