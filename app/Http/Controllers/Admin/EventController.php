<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('id', 'desc')->get();
        return view('admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {

        // dd($request->all());
        $event = new Event();

            $event->topic = $request->topic;
            $event->image = $request->image->store('event', 'public');
            $event->location = $request->location;
            $event->date = $request->date;
            $event->time = $request->time;
            $event->description = $request->description;
            $event->map = $request->map;
            // $event->contact = $request->contact;
        
        $event->save();

        return redirect()->to('/admin/event')->with('message', 'Successfully Create Event');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        
        return view('admin.event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        
        return view('admin.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, $id)
    {
        $event = Event::findOrFail($id);

            $event->topic = $request->topic;
            if($request->image != '')
            {
                $event->image = $request->image->store('event', 'public');
            }
            $event->location = $request->location;
            $event->date = $request->date;
            $event->time = $request->time;
            $event->description = $request->description;
            $event->map = $request->map;
            // $event->contact = $request->contact;
        
        $event->save();

        return redirect()->to('/admin/event')->with('message', 'Successfully Update Event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        
        return redirect()->to('/admin/event')->with('message', 'Successfully Delete Event');
    }
}
