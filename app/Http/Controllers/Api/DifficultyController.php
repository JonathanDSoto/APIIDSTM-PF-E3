<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaginationRequest;
use App\Models\Difficulty;
use App\Http\Requests\StoreDifficultyRequest;
use App\Http\Requests\UpdateDifficultyRequest;
use App\Http\Resources\DifficultyCollection;
use App\Http\Resources\DifficultyResource;

class DifficultyController extends Controller
{
    public function index(PaginationRequest $request)
    {
        return new DifficultyCollection(Difficulty::paginate($request->amount));
    }

    public function store(StoreDifficultyRequest $request)
    {
        return new DifficultyResource(Difficulty::create($request->validated()));
    }

    public function show(Difficulty $difficulty)
    {
        return new DifficultyResource($difficulty);
    }

    public function update(UpdateDifficultyRequest $request, Difficulty $difficulty)
    {
        if(!$difficulty->update($request->validated())){
            return response()->setStatusCode(404);
        }
        return new DifficultyResource($difficulty);
    }

    public function destroy(Difficulty $difficulty)
    {
        if(!$difficulty->delete()){
            return response()->setStatusCode(404);
        }
        return response('');
    }
}
