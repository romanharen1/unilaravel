<?php

namespace App\Http\Controllers;

use App\Events;
use Hamcrest\Core\Every;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::all();
        return response()->json($events);
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
        $events = new Events();
        $events->fill($request->all());
        $events->save();

        return response()->json($events, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $events = Events::with('hosts')->find($id);

        if (!$events) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($events);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $events)
    {
        $input = $request->all();

        $events->title = $input['title'];
        $events->description = $input['description'];
        $events->status = $input['status'];
        $events->startdate = $input['startdate'];
        $events->enddate = $input['enddate'];
        $events->price = $input['price'];
        $events->images = $input['images'];
        $events->save();

        return $this->sendResponse(new Events($events[]), 'Event updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events)
    {
        $events->delete();
        return $this->sendResponse([], 'Event deleted sucessfully');
    }
}
