<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('location.index', [
            'locations' => Location::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:locations',
            'description' => 'required'
        ]);

        // dd($validatedData);
        Location::create($validatedData);
        return redirect('/lokasi')->with('success', 'Success add location');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $lokasi)
    {
        //
        $location = $lokasi;
        return view('location.edit',[
            'location' => $location
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $lokasi)
    {
        //
        //proses edit $request=data yang baru $post=data yang lama
        $location = $lokasi;
        $rules = [
            'name' => 'required|max:255',
            'description' => 'required'
        ];


        $validatedData = $request->validate($rules);

        Location::where('id', $location->id)
            ->update($validatedData);

        return redirect('/lokasi')->with('success', 'Location has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $lokasi)
    {
        //
        $location = $lokasi;
        Location::destroy($location->id);
        
        return redirect('/lokasi')->with('success', 'Location has been deleted');
    }
}
