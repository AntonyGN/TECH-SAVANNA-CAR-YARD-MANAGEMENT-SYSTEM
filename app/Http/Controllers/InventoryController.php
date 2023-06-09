<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{

    public function index()
    {
        $inventory = Inventory::all();
        return view('inventory.index')->with('inventory', $inventory);
    }
    
    public function create()
    {
        return view('inventory.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Contact::create($input);
        return redirect('inventory')->with('flash_message', 'Inventory Addedd!');  
    }
 
    
    public function show($id)
    {
        $inventory = Inventory::find($id);
        return view('inventory.show')->with('inventory', $contact);
    }
 
    
    public function edit($id)
    {
        $inventory = Inventory::find($id);
        return view('inventory.edit')->with('inventory', $contact);
    }
 
  
    public function update(Request $request, $id)
    {
        $inventory = Inventory::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('inventory')->with('flash_message', 'Inventory Updated!');  
    }
 
  
    public function destroy($id)
    {
        inventory::destroy($id);
        return redirect('inventory')->with('flash_message', 'Inventory deleted!');  
    }
}

