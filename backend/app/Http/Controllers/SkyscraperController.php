<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkyscraperRequest;
use App\Http\Requests\UpdateSkyscraperRequest;
use App\Http\Resources\SkyscraperResource;
use App\Models\Skyscraper;

class SkyscraperController extends Controller
{
    public function index()
    {
        return SkyscraperResource::collection(Skyscraper::with('city')->get());
    }

    public function show($id)
    {
        $skyscraper = Skyscraper::findOrFail($id);
        return new SkyscraperResource($skyscraper);

    }

    public function store(StoreSkyscraperRequest $request)
    {
        $skyscraper = $request->validated();
        return $skyscraper;

    }

    public function update(StoreSkyscraperRequest $request, $id)
    {
        $skyscraper = Skyscraper::findOrFail($id);
        $skyscraper->update($request->all())->validated();
        return new SkyscraperResource($skyscraper);

    }

    public function destroy($id)
    {
        $skyscraper = Skyscraper::findOrFail($id);
        $skyscraper->delete(); 
        return new SkyscraperResource($skyscraper);

    }
}
