<?php

namespace App\Http\Controllers;

use App\Models\joinus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // dd(joinus::create($request->all()));


        $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|max:255',
            'address' => 'required|max:100',
            'address2' => 'max:100',
            'country' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'city' => 'required',
            'age' => 'required',
            'imageaddress' => 'required|image',
            'designation' => 'required'
        ]);


        // $joinus = new joinus();
        // $joinus->email = $data["email"];
        // $joinus->address = $data["address"];
        // $joinus->user_id = Auth::id();
        // $joinus->country=$data["country"];
        // $joinus->address2=$request->address2;
        // $joinus->age=$data["age"];
        // $joinus->zip=$data["zip"];
        // $joinus->designation=$data["designation"];



        dd(joinus::create($data));
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
