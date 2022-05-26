<?php

namespace App\Http\Controllers;

use App\Models\Signage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignageController extends Controller
{
    public function power()
    {
        $meeting_room = "Power Up";
        $event_name = DB::table('signage')
                        ->where('meeting_room', '=', 'pu')
                        ->latest()
                        ->first();
        return view('signage', compact('meeting_room', 'event_name'));
    }

    public function gear()
    {
        $meeting_room = "Gear Up";
        $event_name = DB::table('signage')
                        ->where('meeting_room', '=', 'gu')
                        ->latest()
                        ->first();
        return view('signage', compact('meeting_room', 'event_name'));
    }

    public function light()
    {
        $meeting_room = "Light Up";
        $event_name = DB::table('signage')
                        ->where('meeting_room', '=', 'lu')
                        ->latest()
                        ->first();
        return view('signage', compact('meeting_room', 'event_name'));
    }

    public function index()
    {
        $data = DB::table('signage')
                ->latest()
                ->get();

        return view('list', compact('data'));
    }

    public function add()
    {
        $meeting_room = "Light Up";
        $event_name = "Jakarta";
        return view('signage', compact('meeting_room', 'event_name'));
    }

    public function store(Request $request)
    {

        Signage::create([
            'meeting_room'  => $request->meeting_room,
            'event_name'    => $request->event_name
        ]);

        return redirect('/');

    }
}
