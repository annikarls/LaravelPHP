<?php

namespace App\Http\Controllers;

use App\Event;

class EventsController extends Controller
{
    public function index() {    
        $events = Event::all();    
        return view('events.index', compact('events'));
    }

    public function create() {
    
        return view('events.create');
    }
    
    public function store() {
    
        $event = new Event();
        $event->eventLocation = request('location');
        $event->eventTitle = request('title');
        $event->eventDescription = request('description');
        $event->eventDate = request('date');
        $event->eventTime = request('time');
        $event->save();
    
        return redirect('/events');
    }

}
