<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TacheController extends Controller
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
        $taches = \DB::table('taches')
            ->join('taches', 'taches.id', '=', 'id_projet')
            ->join('users', 'users.id', '=', 'id_users')
            ->select('taches.*', 'projet', 'first_name', 'last_name');
        return view('pages.taches.taches', compact('taches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projets = \App\Projet::all();
        $users = \App\User::all();
        return view('pages.taches.create', compact('projets', 'users'));
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
        \App\Tache::create($data);
        return redirect()->route('taches.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projets = \App\Projet::all();
        $users = \App\User::all();
        $tache = \App\Tache::find($id);
        return view('pages.taches.edit', compact('projets', 'users', 'tache'));
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
        $tache = \App\Tache::find($id);
        $tache->update($data);
        return redirect()->route('taches.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Tache::destroy([$id]);
        return redirect()->route('taches.index');
    }
}
