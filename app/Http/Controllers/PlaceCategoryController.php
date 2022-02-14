<?php

namespace App\Http\Controllers;

use App\Models\PlaceCategory;
use App\Http\Requests\StorePlaceCategoryRequest;
use App\Http\Requests\UpdatePlaceCategoryRequest;

class PlaceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlaceCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlaceCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlaceCategory  $placeCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PlaceCategory $placeCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlaceCategory  $placeCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PlaceCategory $placeCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlaceCategoryRequest  $request
     * @param  \App\Models\PlaceCategory  $placeCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlaceCategoryRequest $request, PlaceCategory $placeCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlaceCategory  $placeCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlaceCategory $placeCategory)
    {
        //
    }
}
