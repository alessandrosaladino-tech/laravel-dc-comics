<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ComicStoreRequest;
use App\Http\Requests\ComicUpdateRequest;
use Illuminate\Support\Facades\Storage;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.comics.index', ['comics' => Comic::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComicStoreRequest $request)
    {
        //dd($request);
        $val_data = $request->validated();
        $new_comic = new Comic();

        if ($request->has('thumb')) {
            $file_path = Storage::put('comics_images', $request->thumb);
            $val_data['thumb'] = $file_path;
        }

        Comic::create($val_data);

        return to_route('comics.index')->with('message', 'Stored succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', ['comic' => $comic]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', ['comic' => $comic]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComicUpdateRequest $request, Comic $comic)
    {
        $val_data = $request->validated();

        if ($request->has('thumb')) {
            $file_path = Storage::put('comics_images', $request->thumb);
            $val_data['thumb'] = $file_path;
            if ($comic->thumb) {
                Storage::delete($comic->thumb);
            }
        }

        $comic->update($val_data);
        return to_route('comics.index', $comic)->with('message', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index');
    }
}