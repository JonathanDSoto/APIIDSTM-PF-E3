<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaginationRequest;
use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Http\Resources\TagCollection;
use App\Http\Resources\TagResource;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PaginationRequest $request)
    {
        return new TagCollection(Tag::paginate($request->amount));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTagRequest $request)
    {
        return new TagResource(Tag::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return new TagResource($tag);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        if($tag->update($request->validated())){
            return new TagResource($tag);
        }
        return response()->setStatusCode(404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        if($tag->delete()){
            return response('');
        }
        return response('')->setStatusCode(404);
    }
}
