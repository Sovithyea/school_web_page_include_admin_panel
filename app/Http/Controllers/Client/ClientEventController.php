<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class ClientEventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('id', 'desc')->get();
        
        return view('client.pages.event.index', compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        
        return view('client.pages.event.show', compact('event'));
    }
}
