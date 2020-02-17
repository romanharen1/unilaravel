<?php

namespace App\Http\Controllers;

use App\Hosts;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class HostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hosts = Hosts::all();
        return response()->json($hosts);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hosts = new Hosts();
        $hosts->fill($request->all());
        $hosts->save();

        return response()->json($hosts, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hosts  $hosts
     * @return \Illuminate\Http\Response
     */
    public function show(Hosts $hosts)
    {
        $hosts = Hosts::find($hosts);

        if (!$hosts) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($hosts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hosts  $hosts
     * @return \Illuminate\Http\Response
     */
    public function edit(Hosts $hosts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hosts  $hosts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hosts $hosts)
    {
        $hosts = Hosts::find($hosts);

        if (!$hosts) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $hosts->fill($request->all());
        $hosts->save();

        return response()->json($hosts);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hosts  $hosts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hosts $hosts)
    {
        //
    }
}
