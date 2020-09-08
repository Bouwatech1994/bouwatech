<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
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
        $users = \DB::table('users')
            ->join('groupes', 'groupes.id', '=', 'groupe_id')
            ->select('users.*', 'groupe')->get();
        $groupes = \App\Groupe::all();
        return view('pages.users', compact('users', 'groupes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groupes = \App\Groupe::all();
        return view('pages.users', compact('groupes', 'users'));
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

        if ($request->hasFile('photo'))
            $data['photo'] = $request->file('photo')->store('photos');

        if ($request->has('password'))
            $data['password'] = sha1($data['password']);

        \App\User::create($data);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $groupes = \App\Groupe::all();
        $user = \App\User::find($id);
        return view('pages.users.edit', compact('groupes', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groupes = \App\Groupe::all();
        $user = \App\User::find($id);
        return view('pages.users.edit', compact('groupes', 'user'));
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
        $user = \App\User::find($id);
        if ($request->hasFile('photo'))
            $data['photo'] = $request->file('photo')->store('photos');
        $user->update($data);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\User::destroy([$id]);
        return redirect()->route('users.index');
    }
}
