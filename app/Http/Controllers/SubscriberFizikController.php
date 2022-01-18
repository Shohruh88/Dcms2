<?php

namespace App\Http\Controllers;

use App\Models\SubscriberFizik;
use Illuminate\Http\Request;

class SubscriberFizikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriberFiziks = SubscriberFizik::all();
        return view('subscriberfizik.index', [
            'subscriberF' => $subscriberFiziks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subscriberfizik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subscriberFiziks = new SubscriberFizik([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'middlename' => $request->get('middlename'),
            'email' => $request->get('tel'),
            'tel' => $request->get('email'),
            'user_id' => $request->get('user_id')
        ]);

        $subscriberFiziks->save();

        return redirect()->route('subscriberfizik.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subscriber = SubscriberFizik::findOrFail($id);
        return view('subscriberfizik.edit', [
            'subscriber' => $subscriber
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
        $data = SubscriberFizik::findOrFail($id);
        $subscriber = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'middlename' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'user_id' => 'required'
        ]);
        $data->update($subscriber);
        return redirect()->route('subscriberfizik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SubscriberFizik::find($id);
        $data->delete();
        return redirect()->route('subscriberfizik.index');
    }
}
