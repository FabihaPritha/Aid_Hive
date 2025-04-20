<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Sector;
use Illuminate\Http\Request;

class PublicsController extends Controller
{
    // Homepage
    public function home()
    {
        return view('publics.home');
    }

    // All sectors
    public function sectors()
    {
        $sectors = Sector::all();
        return view('publics.sectors', compact('sectors'));
    }

    // All events
    public function events()
    {
        $events = Event::all();
        return view('publics.events', compact('events'));
    }

    // Single event details
    public function eventDetails($id)
    {
        $event = Event::findOrFail($id);
        return view('publics.event-details', compact('event'));
    }
}
