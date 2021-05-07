<?php

namespace App\Http\Controllers;

use App\Models\joinus;
use Illuminate\Http\Request;

class JoinusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('joinus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'email' => 'required|max:255',
            'address' => 'required|max:100',
            'country' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'designation' => 'required'
        ]);

        joinus::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\joinus  $joinus
     * @return \Illuminate\Http\Response
     */
    public function show(joinus $joinus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\joinus  $joinus
     * @return \Illuminate\Http\Response
     */
    public function edit(joinus $joinus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\joinus  $joinus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, joinus $joinus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\joinus  $joinus
     * @return \Illuminate\Http\Response
     */
    public function destroy(joinus $joinus)
    {
        //
    }
}
