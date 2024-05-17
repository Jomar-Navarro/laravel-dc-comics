<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Functions\Helper;


class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $Comics = Comic::all();
        $Comics = Comic::paginate(8);


        return view('Comics.index', compact('Comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $new_comic = new Comic();
            // $new_comic->title = $data['title'];
            // $new_comic->description = $data['description'];
            // $new_comic->slug = Helper::generateSlug($new_comic->title, new Comic());
            // $new_comic->thumb = $data['thumb'];
            // $new_comic->price = $data['price'];
            // $new_comic->series = $data['series'];
            // $new_comic->sale_date = $data['sale_date'];
            // $new_comic->type = $data['type'];

            // if (is_array($data['artists'])) {
            // $new_comic->artists = implode(', ', $data['artists']);
            // } else {
            // $new_comic->artists = $data['artists'];
            // }

            // if (is_array($data['writers'])) {
            // $new_comic->writers = implode(', ', $data['writers']);
            // } else {
            // $new_comic->writers = $data['writers'];
            // }


            $data['slug'] = Helper::generateSlug($data['title'], new Comic());
            $new_comic->fill($data);
            $new_comic->save();



            return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('Comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('Comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
