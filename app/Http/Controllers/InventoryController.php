<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    
    public function create()
    {
        return view('invetory.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Contact::create($input);
        return redirect('invetory')->with('flash_message', 'Invetory Addedd!');  
    }
 
    
    public function show($id)
    {
        $invetory = Invetory::find($id);
        return view('invetory.show')->with('invetory', $contact);
    }
 
    
    public function edit($id)
    {
        $invetory = Invetory::find($id);
        return view('invetory.edit')->with('invetory', $contact);
    }
 
  
    public function update(Request $request, $id)
    {
        $invetory = Invetory::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('invetory')->with('flash_message', 'Invetory Updated!');  
    }
 
  
    public function destroy($id)
    {
        inventory::destroy($id);
        return redirect('invetory')->with('flash_message', 'Invetory deleted!');  
    }
}

