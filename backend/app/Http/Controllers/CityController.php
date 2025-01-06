<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Http\Resources\CityResource;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        return CityResource::collection(City::with('city')->get());
    }

    public function show($id)
    {
        $skyscraper = City::findOrFail($id);
        return new CityResource($skyscraper);

    }

    public function store(StoreCityRequest $request)
    {
        $skyscraper = $request->validated();
        return $skyscraper;

    }

    public function update(StoreCityRequest $request, $id)
    {
        $skyscraper = City::findOrFail($id);
        $skyscraper->update($request->all())->validated();
        return new CityResource($skyscraper);

    }

    public function destroy($id)
    {
        $skyscraper = City::findOrFail($id);
        $skyscraper->delete(); 
        return new CityResource($skyscraper);

    }
}
