<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contracts;

class ContractsController extends Controller
{
  
    public function index()
    {
        $contracts = Contracts::all();
      return view ('contracts.index')->with('contracts', $contracts);
    }

    
    public function create()
    {
        return view('contracts.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        Contracts::create($input);
        return redirect('contracts')->with('flash_message', 'contracts Added!');  
    }

    
    public function show($id)
    {
        $contracts = Contracts::find($id);
        return view('contracts.show')->with('contracts', $contracts);
    }

    
    public function edit($id)
    {
        $contracts = Contracts::find($id);
        return view('contracts.edit')->with('contracts', $contracts);
    }

  
    public function update(Request $request, $id)
    {
        $contracts = Contracts::find($id);
        $input = $request->all();
        $contracts->update($input);
        return redirect('contracts')->with('flash_message', ' Updated!');  
    }

   
    public function destroy($id)
    {
        Contracts::destroy($id);
        return redirect('contracts')->with('flash_message', 'Contracts deleted!');  
    }
}