<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::all();

        return view("admin.tags.index", compact("tags"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.tags.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagRequest $request)
    {
        $validated = $request->validated();

        $new_tag = new Tag();
        $new_tag->fill($validated);
        $new_tag->save();

        return redirect()->route("admin.tags.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return view("admin.tags.show", compact("tag"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view("admin.tags.edit", compact("tag"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagRequest $request, Tag $tag)
    {
        $validated_tag = $request->validated();

        $tag->fill($validated_tag);
        $tag->save();

        return redirect()->route("admin.tags.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route("admin.tags.index");
    }
}
