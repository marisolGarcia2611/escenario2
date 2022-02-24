<?php

namespace App\Http\Controllers;

use App\Models\UserCode;
use App\Http\Requests\StoreUserCodeRequest;
use App\Http\Requests\UpdateUserCodeRequest;

class UserCodeController extends Controller
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
     * @param  \App\Http\Requests\StoreUserCodeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserCodeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCode  $userCode
     * @return \Illuminate\Http\Response
     */
    public function show(UserCode $userCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCode  $userCode
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCode $userCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserCodeRequest  $request
     * @param  \App\Models\UserCode  $userCode
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserCodeRequest $request, UserCode $userCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCode  $userCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCode $userCode)
    {
        //
    }
}
