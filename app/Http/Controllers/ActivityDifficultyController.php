<?php

namespace App\Http\Controllers;

use App\Models\ActivityDifficulty;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreActivityDifficultyRequest;
use App\Http\Requests\UpdateActivityDifficultyRequest;

class ActivityDifficultyController extends Controller
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
     * @param  \App\Http\Requests\StoreActivityDifficultyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivityDifficultyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ActivityDifficulty  $activityDifficulty
     * @return \Illuminate\Http\Response
     */
    public function show(ActivityDifficulty $activityDifficulty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActivityDifficultyRequest  $request
     * @param  \App\Models\ActivityDifficulty  $activityDifficulty
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActivityDifficultyRequest $request, ActivityDifficulty $activityDifficulty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ActivityDifficulty  $activityDifficulty
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActivityDifficulty $activityDifficulty)
    {
        //
    }
}
