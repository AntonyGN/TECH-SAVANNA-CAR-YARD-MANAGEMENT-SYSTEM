<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usermanagement;

class UsermanagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Usermanagement = usermanagement::all();
        return view('usermanagement.index')->with('usermanagement', $Usermanagement);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usermanagement.Create');
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
        usermanagement::create($input);
        return redirect('usermanagement')->with('flash_message', 'usermanagement added');
    }
    public function show($id)
    {
        $usermanagement = usermanagement::find($id);

        return view('usermanagement.show')->with('usermanagement', $usermanagement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usermanagement = usermanagement::find($id);

        return view('usermanagement.edit')->with('usermanagement', $usermanagement);
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
        $usermanagement = usermanagement::find($id);
        $input = $request->all();
        $usermanagement->update($input);
        return redirect('usermanagement')->with('flash_message', 'usermanagement updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        usermanagement::destroy($id);
        return redirect('usermanagement')->with('flash_message', 'usermanagement updated');
    }
}
