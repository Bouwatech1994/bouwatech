<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $partenaires = \App\Partenaire::all();
        return view('pages.partenaires', compact('partenaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.partenaires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token', 'create']);

        if ($request->hasFile('partenariat'))
            $data['partenariat'] = $request->file('partenariat')->store('partenariats');
        \App\Partenaire::create($data);
        return redirect()->route('partenaires.index');
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
        //
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
        $data = $request->except(['_token', 'edit']);
        $partenaire = \App\Partenaire::find($id);

        if ($request->hasFile('partenariat'))
            $data['partenariat'] = $request->file('partenariat')->store('partenariats');

        $partenaire->update($data);
        return redirect()->route('partenaires.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Partenaire::destroy([$id]);
        return redirect()->route('partenaires.index');
    }
}
