<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
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
        $articles = \DB::table('articles')
            ->join('publicites', 'publicites.id', '=', 'publicite_id')
            ->select('articles.*', 'publicite')->get();
        $publicites = \App\Publicite::all();
        return view('pages.articles', compact('articles', 'publicites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publicites = \App\Publicite::all();
        return view('pages.articles.create', compact('publicites'));
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

        if ($request->hasFile('img'))
            $data['img'] = $request->file('img')->store('articles');

        \App\Article::create($data);
        return redirect()->route('articles.index');
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
        $publicites = \App\Publicite::all();
        $article = \App\Article::find($id);
        return view('pages.articles.update', compact('publicites', 'article'));
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
        $annonce = \App\Article::find($id);
        if ($request->hasFile('img'))
            $data['img'] = $request->file('img')->store('articles');

        $annonce->update($data);
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Article::destroy([$id]);
        return redirect()->route('articles.index');
    }
}
