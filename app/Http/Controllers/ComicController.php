<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        // dd($comics);
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        // dd($request->all());

        $validated = $request->validated();
        // dd($validated);

        $comic = new Comic();
        $comic->title = $validated['title'];
        $comic->description = $validated['description'];
        $comic->thumb = $validated['thumb'];
        $comic->price = $validated['price'];
        $comic->series = $validated['series'];
        $comic->sale_date = $validated['sale_date'];
        $comic->type = $validated['type'];
        $comic->save();

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // dd($comic);
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        // dd($request->all());

        $validated = $request->validated();
        // dd($validated);

        $comic->title = $validated['title'];
        $comic->description = $validated['description'];
        $comic->thumb = $validated['thumb'];
        $comic->price = $validated['price'];
        $comic->series = $validated['series'];
        $comic->sale_date = $validated['sale_date'];
        $comic->type = $validated['type'];
        $comic->save();

        return to_route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->Route('comics.index');
    }
}
