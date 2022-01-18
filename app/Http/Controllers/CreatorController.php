<?php

namespace App\Http\Controllers;

use App\Models\Creator;
use Illuminate\Http\Request;

class CreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creators = Creator::all();
        return view('creators.index', compact('creators'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creators.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $creator = new Creator([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'description' => $request->get('description')
        ]);

        $creator->save();

        return redirect()->route('creator.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $creator = Creator::findOrFail($id);
        return view('creators.show', [
            'creator' => $creator
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $creator = Creator::findOrFail($id);
        return view('creators.edit', [
            'creator' => $creator
        ]);
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
        $data = Creator::findOrFail($id);
        $creator = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'description' => 'required'
        ]);
       
  
        $data->update($creator);
  
        return redirect()->route('creator.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Creator::find($id);
        $data->delete();
        return redirect()->route('creator.index');
    }
}
