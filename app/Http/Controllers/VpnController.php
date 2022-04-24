<?php

namespace App\Http\Controllers;

use App\Models\vpn;
use App\Http\Requests\StorevpnRequest;
use App\Http\Requests\UpdatevpnRequest;

class VpnController extends Controller
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
     * @param  \App\Http\Requests\StorevpnRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevpnRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vpn  $vpn
     * @return \Illuminate\Http\Response
     */
    public function show(vpn $vpn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vpn  $vpn
     * @return \Illuminate\Http\Response
     */
    public function edit(vpn $vpn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevpnRequest  $request
     * @param  \App\Models\vpn  $vpn
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevpnRequest $request, vpn $vpn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vpn  $vpn
     * @return \Illuminate\Http\Response
     */
    public function destroy(vpn $vpn)
    {
        //
    }
}
