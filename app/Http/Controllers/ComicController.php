<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:80',
            'description' => 'nullable',
            'thumb' => 'max:1000',
            'price' => 'required|numeric|min:2|max:99',
            'series' => 'required|max:80',
            'sale_date' => 'date',
            'type' => 'required|max:50'
        ]);

        $comic = new Comic;
        $comic->title=$request->input('title');
        $comic->description=$request->input('description');
        $comic->thumb=$request->input('thumb');
        $comic->price=$request->input('price');
        $comic->series=$request->input('series');
        $comic->sale_date=$request->input('sale_date');
        $comic->type=$request->input('type');
        $comic->save();
        return redirect()->route('comics.show', ['comic'=>$comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|max:80',
            'description' => 'nullable',
            'thumb' => 'max:1000',
            'price' => 'required|numeric|min:2|max:99',
            'series' => 'required|max:80',
            'sale_date' => 'date',
            'type' => 'required|max:50'
        ]);
        $comic->title=$request->input('title');
        $comic->description=$request->input('description');
        $comic->thumb=$request->input('thumb');
        $comic->price=$request->input('price');
        $comic->series=$request->input('series');
        $comic->sale_date=$request->input('sale_date');
        $comic->type=$request->input('type');
        $comic->save();
        return redirect()->route('comics.show', ['comic'=>$comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
