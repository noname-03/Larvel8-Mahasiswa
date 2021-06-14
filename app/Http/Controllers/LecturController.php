<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lectur;
use Facade\FlareClient\View;

class LecturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $lectur buat nyimpen data lectur yang kedua itu sesuai sama nama dari database yang singkrone sama model terus fungsi all yaitu mengambil semua data dari database yang kita mau
        $lecturs = Lectur::all();
        return view('Lectur.lectur', compact('lecturs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Lectur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $name = $request->file('photo')->getClientOriginalName();
       $request->photo->move(public_path('images'), $name);
       $request['namephoto'] = $name;
       Lectur::create($request->except('photo'));

        return redirect()->route('lectur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lectur $lectur)
    {
        return view('Lectur.show', compact('lectur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lectur $lectur)
    {
        $lecturs = Lectur::find($lectur);
        return view('Lectur.edit', compact('lecturs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lectur $lectur)
    {
        $name = $request->file('photo')->getClientOriginalName();
       $request->photo->move(public_path('images'), $name);
       $request['namephoto'] = $name;
        $lectur->update($request->except('photo'));

        return redirect()->route('lectur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lectur $lectur)
    {
        $lectur->delete();
        return redirect()->route('lectur.index');
    }
}
