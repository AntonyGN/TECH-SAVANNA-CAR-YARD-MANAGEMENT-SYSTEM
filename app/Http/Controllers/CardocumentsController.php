<?php

namespace App\Http\Controllers;

use App\Models\Cardocuments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CardocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cardocuments = Cardocuments::all();
        return view('cardocuments.index')->with('cardocuments', $cardocuments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cardocuments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->only(['logbook', 'registrationdocument', 'roadworthiness']);
        Cardocuments::create($input);
        return redirect('cardocuments')->with('flash_message', 'Car documents added');
    }

    /**
     * Upload a document.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $request->validate([
            'document' => 'required|mimes:pdf|max:2048', // Only allow PDF files up to 2MB
        ]);

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $documentData = file_get_contents($file);

            // Get file information
            $fileName = $file->getClientOriginalName();
            $fileExtension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();

            // Generate a unique file name
            $uniqueFileName = $fileName . '_' . time() . '.' . $fileExtension;

            // Move the uploaded file to the storage directory
            $file->storeAs('documents', $uniqueFileName);

            // Create and save the Cardocuments instance
            $cardocument = new Cardocuments();
            $cardocument->logbook = $request->input('logbook');
            $cardocument->registrationdocument = $request->input('registrationdocument');
            $cardocument->roadworthiness = $request->input('roadworthiness');
            $cardocument->name = $uniqueFileName; // Assign the unique file name
            $cardocument->mime_type = $file->getClientMimeType();
            $cardocument->size = $fileSize;
            $cardocument->file_path = 'documents/' . $uniqueFileName;
            $cardocument->save();

            return redirect('cardocuments')->with('flash_message', 'Car document uploaded successfully.');
        }

        return redirect('cardocuments')->with('error_message', 'Error uploading car document.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * 
     */
   

    public function download($id)
    {
        $cardocuments = Cardocuments::find($id);
        if ($cardocuments) {
            $file = Storage::get($cardocuments->file_path);
            return response($file, 200)->header('Content-Type', $cardocuments->mime_type);
        }
        return redirect('cardocuments')->with('error_message', 'Document not found.');
    }
    
     public function show($id)
    {
        $cardocuments = Cardocuments::find($id);
        return view('cardocuments.show')->with('cardocuments', $cardocuments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cardocuments = Cardocuments::find($id);
        return view('cardocuments.edit')->with('cardocuments', $cardocuments);
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
        $input = $request->only(['logbook', 'registrationdocument', 'roadworthiness']);
        $cardocuments = Cardocuments::find($id);
        $cardocuments->update($input);
        return redirect('cardocuments')->with('flash_message', 'Car documents updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cardocuments = Cardocuments::find($id);
        $cardocuments->delete();
        return redirect('cardocuments')->with('flash_message', 'Car documents deleted');
    }
    
}
