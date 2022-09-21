<?php

namespace App\Http\Controllers;

use App\Models\UserAchievement;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserAchievementRequest;
use App\Http\Requests\UpdateUserAchievementRequest;

class UserAchievementController extends Controller
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
     * @param  \App\Http\Requests\StoreUserAchievementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserAchievementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserAchievement  $userAchievement
     * @return \Illuminate\Http\Response
     */
    public function show(UserAchievement $userAchievement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserAchievementRequest  $request
     * @param  \App\Models\UserAchievement  $userAchievement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserAchievementRequest $request, UserAchievement $userAchievement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserAchievement  $userAchievement
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAchievement $userAchievement)
    {
        //
    }
}
