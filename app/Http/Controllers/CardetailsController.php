<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cardetails;

class CardetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cardetails = Cardetails::all();
        return view('cardetails.index')->with('cardetails',$cardetails);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cardetails.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
{
    $request->validate([
        'make' => 'required',
        'model' => 'required',
        'fueltype' => 'required',
        'yearofmanufacture' => 'required',
        'transmission' => 'required',
        'chassisno' => 'required|unique:cardetails',
    ], [
        'chassisno.unique' => 'The chassis number must be unique.',
    ]);

    $input = $request->all();
    Cardetails::create($input);

    return redirect('cardetails')->with('flash_message', 'Car details added successfully.');
}

    public function show($id)
    {
        $cardetail = Cardetails::find($id);

        return view('cardetails.show')->with('cardetails',$cardetail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cardetail = Cardetails::find($id);

        return view('cardetails.edit')->with('cardetails',$cardetail);
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
        $cardetail = Cardetails::find($id);
        $input = $request->all();
        $cardetail->update($input);
        return redirect('cardetails')->with('flash_message', 'cardetail updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cardetails::destroy($id);
        return redirect('cardetails')->with('flash_message','Cardetail updated');
    }
}
