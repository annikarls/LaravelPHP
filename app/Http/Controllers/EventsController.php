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
        $event->eventTitle = request('title');
        $event->eventImage = request('image');
        $event->eventLocation = request('location');
        $event->eventDescription = request('description');
        $event->eventDate = request('date');
        $event->eventTime = request('time');
        $event->save();
    
        return redirect('/events');
    }
    
    public function edit(Event $event) {
        return view('events.edit', compact('event'));
    }
    
    public function update(Event $event) {
      $event->eventTitle = request('title');
      $event->eventImage = request('image');
      $event->eventLocation = request('location');
      $event->eventDescription = request('description');
      $event->eventDate = request('date');
      $event->eventTime = request('time');
      $event->save();

        return redirect('/events');
    }
    
    public function destroy(Event $event) {
        $event->delete();

        return redirect('/events');
    }

}
