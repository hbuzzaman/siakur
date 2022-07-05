<?php

namespace App\Http\Controllers;

use App\Models\Pic;
use Illuminate\Http\Request;

class PicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pic.index', [
            'pics' => Pic::all()
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
        return view('pic.create');
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
            'name' => 'required|max:255|unique:pics',
            'nip' => 'required|numeric|unique:pics'
        ]);

        // dd($validatedData);
        Pic::create($validatedData);
        return redirect('/pic')->with('success', 'Success add PIC');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pic  $pic
     * @return \Illuminate\Http\Response
     */
    public function show(Pic $pic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pic  $pic
     * @return \Illuminate\Http\Response
     */
    public function edit(Pic $pic)
    {
        //
        return view('pic.edit',[
            'pic' => $pic
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pic  $pic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pic $pic)
    {
        //
        //proses edit $request=data yang baru $post=data yang lama
        $rules = [
            'name' => 'required|max:255',
            'nip' => 'required|numeric'
        ];

        $validatedData = $request->validate($rules);

        Pic::where('id', $pic->id)
            ->update($validatedData);

        return redirect('/pic')->with('success', 'PIC has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pic  $pic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pic $pic)
    {
        //
        Pic::destroy($pic->id);

        return redirect('/pic')->with('success', 'User has been deleted');
    }
}
