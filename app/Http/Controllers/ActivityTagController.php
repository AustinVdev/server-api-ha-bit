<?php

namespace App\Http\Controllers;

use App\Models\ActivityTag;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreActivityTagRequest;
use App\Http\Requests\UpdateActivityTagRequest;

class ActivityTagController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActivityTagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivityTagRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ActivityTag  $activityTag
     * @return \Illuminate\Http\Response
     */
    public function show(ActivityTag $activityTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActivityTagRequest  $request
     * @param  \App\Models\ActivityTag  $activityTag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActivityTagRequest $request, ActivityTag $activityTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ActivityTag  $activityTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActivityTag $activityTag)
    {
        //
    }
}
