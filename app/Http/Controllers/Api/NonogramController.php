<?php

namespace App\Http\Controllers\Api;

use App\Models\Nonogram;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNonogramRequest;
use App\Http\Requests\UpdateNonogramRequest;
use App\Http\Resources\NonogramCollection;
use App\Http\Resources\NonogramResource;
use Exception;

class NonogramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new NonogramCollection(Nonogram::with('category')->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNonogramRequest $request)
    {
        $nonogram = Nonogram::create($request->all());
        return new NonogramResource($nonogram);
    }

    /**
     * Display the specified resource.
     */
    public function show(Nonogram $nonogram)
    {
        return new NonogramResource($nonogram);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNonogramRequest $request, Nonogram $nonogram)
    {
        if($nonogram->update($request->all())){
            return $nonogram;
        }
        return response()->setStatusCode(404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nonogram $nonogram)
    {
        if($nonogram->delete()){
            return response('');
        }
        return response('')->setStatusCode(404);
    }
}
