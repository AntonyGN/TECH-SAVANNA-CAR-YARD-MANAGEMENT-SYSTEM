<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        return view('cardetails.index')->with('cardetails', $cardetails);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carMakes = [
            'Toyota',
            'Honda',
            'Ford',
            'Chevrolet',
            'Nissan',
            'BMW',
            'Mercedes-Benz',
            'Audi',
            'Volkswagen',
            'Hyundai',
            'Kia',
            'Mazda',
            'Subaru',
            'Lexus',
            'Volvo',
            'Jeep',
            'Tesla',
            'Ferrari',
            'Lamborghini',
            'Porsche',
            // Add more car makes as needed
        ];
        $fuelTypes = [
            'Gasoline (Petrol)',
            'Diesel',
            'Electric',
            'Hybrid',
            'LPG (Liquefied Petroleum Gas)',
            'CNG (Compressed Natural Gas)',
            'Biofuel',
            'Hydrogen',
            'Ethanol',
            'Biodiesel',
            'Methanol',
            // Add more fuel types as needed
        ];
        $transmissions = [
            'Automatic',
            'Manual',
            'CVT (Continuously Variable Transmission)',
            'DCT (Dual-Clutch Transmission)',
            'Semi-Automatic',
            'Tiptronic',
            'AMT (Automated Manual Transmission)',
            'DSG (Direct-Shift Gearbox)',
            'iMT (Intelligent Manual Transmission)',
            'e-CVT (Electronically Controlled Continuously Variable Transmission)',
            'Torque Converter',
            'PDK (Porsche Doppelkupplung)',
            'DSG (Direct-Shift Gearbox)',
            'S-Tronic',
            'SMG (Sequential Manual Gearbox)',
            'ZF',
            'DSG (Direct-Shift Gearbox)',
            'Automated Clutch',
            'e-Gear',
            'Xtronic',
            // Add more transmission types as needed
        ];
    
        // Generate an array of years from the current year to 50 years ago
        $currentYear = Carbon::now()->year;
        $yearRange = range($currentYear, $currentYear - 50);
        $years = array_combine($yearRange, $yearRange);
    
        return view('cardetails.create', compact('carMakes', 'fuelTypes', 'transmissions', 'years'));
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
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cardetail = Cardetails::find($id);
        return view('cardetails.show')->with('cardetails', $cardetail);
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
        return view('cardetails.edit')->with('cardetails', $cardetail);
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
        return redirect('cardetails')->with('flash_message', 'Car details updated successfully.');
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
        return redirect('cardetails')->with('flash_message', 'Car details deleted successfully.');
    }
}
