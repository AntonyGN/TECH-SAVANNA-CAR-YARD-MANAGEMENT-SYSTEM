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
        return view('inventory.Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cartype' => 'required',
            'carmodel' => 'required',
            'availablecars' => 'required',
            'soldcars' => 'required',
        ]);

        $input = $request->all();
        Inventory::create($input);
        return redirect('inventory')->with('flash_message', 'Inventory Added!');
    }

    public function show($id)
    {
        $inventory = Inventory::find($id);
        return view('inventory.show')->with('inventory', $inventory);
    }

    public function edit($id)
    {
        $inventory = Inventory::find($id);
        return view('inventory.edit')->with('inventory', $inventory);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cartype' => 'required',
            'carmodel' => 'required',
            'availablecars' => 'required',
            'soldcars' => 'required',
        ]);

        $inventory = Inventory::find($id);
        $input = $request->all();
        $inventory->update($input);
        return redirect('inventory')->with('flash_message', 'Inventory Updated!');
    }

    public function destroy($id)
    {
        Inventory::destroy($id);
        return redirect('inventory')->with('flash_message', 'Inventory deleted!');
    }
}


