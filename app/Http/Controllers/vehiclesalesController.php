<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiclesales;

class vehiclesalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiclesales = Vehiclesales::all();
        return view('vehiclesales.index')->with('vehiclesales',$vehiclesales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehiclesales.create');
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
        Vehiclesales::create($input);
        return redirect('vehiclesales')->with('flash_message','vehiclesales added');
    }
    public function show($id)
    {
        $vehiclesales = Vehiclesales::find($id);

        return view('vehiclesales.show')->with('vehiclesales',$vehiclesales);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiclesales = Vehiclesales::find($id);

        return view('vehiclesales.edit')->with('vehiclesales',$vehiclesales);
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
        $vehiclesales = Vehiclesales::find($id);
        $input = $request->all();
        $vehiclesales->update($input);
        return redirect('vehiclesales')->with('flash_message', 'vehiclesales updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vehiclesales::destroy($id);
        return redirect('vehiclesales')->with('flash_message','vehiclesales updated');
    }
}

