<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticlesRequest;
use App\Http\Requests\UpdateArticlesRequest;

class ArtikelsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of Article.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Article::all();

        return view('artikels.index', compact('artikels'));
    }

    /**
     * Show the form for creating new Article.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikels.create');
    }

    /**
     * Store a newly created Article in storage.
     *
     * @param  \App\Http\Requests\StoreArticlesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticlesRequest $request)
    {
        Article::create($request->all());

        return redirect()->route('artikels.index');
    }


    /**
     * Show the form for editing Article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Article::findOrFail($id);

        return view('artikels.edit', compact('artikel'));
    }

    /**
     * Update Article in storage.
     *
     * @param  \App\Http\Requests\UpdateArticlesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticlesRequest $request, $id)
    {
        $artikel = Article::findOrFail($id);
        $artikel->update($request->all());

        return redirect()->route('artikels.index');
    }


    /**
     * Display Article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Article::findOrFail($id);

        return view('artikels.show', compact('artikel'));
    }


    /**
     * Remove Article from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Article::findOrFail($id);
        $artikel->delete();

        return redirect()->route('artikels.index');
    }

    /**
     * Delete all selected Article at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Article::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
