<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Pic;
use App\Models\Alatukur;
use Illuminate\Http\Request;

class AkurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('akur.index', [
            'akurs' => Alatukur::all()
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
        return view('akur.create', [
            'pics' => Pic::all(), //bisa diambil dari model pic
            'locations' => Location::all()
        ]);
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
            'name' => 'required|max:255',
            'no_seri' => 'required|numeric|unique:alatukurs',
            'pic_id' => 'required',
            'location_id' => 'required'
        ]);

        // dd($validatedData);
        Alatukur::create($validatedData);
        return redirect('/alatukur')->with('success', 'Success add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alatukur  $alatukur
     * @return \Illuminate\Http\Response
     */
    public function show(Alatukur $alatukur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alatukur  $alatukur
     * @return \Illuminate\Http\Response
     */
    public function edit(Alatukur $alatukur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alatukur  $alatukur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alatukur $alatukur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alatukur  $alatukur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alatukur $alatukur)
    {
        //
    }
}
