<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customers::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $customers = new Customers;
        $customers->name = $request->name;
        $customers->email = $request->email;
        $customers->phone = $request->phone;
        $customers->save();

        return redirect()->route('customers.index')->with('success', 'Customer added successfully.');
    }

    public function show($id)
    {
        $customers = Customers::find($id);
        return view('customers.show', compact('customers'));
    }

    public function edit($id)
    {
        $customers = Customers::find($id);
        return view('customers.edit', compact('customers'));
    }

    public function update(Request $request, $id)
    {
        $customers = Customers::find($id);
        $customers->name = $request->name;
        $customers->email = $request->email;
        $customers->phone = $request->phone;
        $customers->save();

        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }

    public function destroy($id)
    {
        $customers = Customers::find($id);
        $customers->delete();

        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }
}
