<?php

namespace App\Http\Controllers;
use App\Models\Cardocuments;
use Illuminate\Http\Request;

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
        return view('cardocuments.index')->with('cardocuments',$cardocuments);
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
        $input = $request->all();
        Cardocuments::create($input);
        return redirect('cardocuments')->with('flash_message','cardocuments added');
    }
    public function show($id)
    {
        $cardocuments= cardocuments::find($id);

        return view('cardocuments.show')->with('cardocuments',$cardocuments);
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

        return view('cardocuments.edit')->with('cardocuments',$cardocuments);
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
        $cardocuments = Cardocuments::find($id);
        $input = $request->all();
        $cardocuments->update($input);
        return redirect('cardocuments')->with('flash_message', 'cardocuments updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cardocuments::destroy($id);
        return redirect('cardocuments')->with('flash_message','Car document updated');
    }
}
