<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index(){

        $events = Event::All();

        return view('banner' , ['events' => $events]);

    }

    public function create(){
        return view('addativos.create');
    }

    public function store(Request $request){

        $event = new Event;

        $event->nomeativo = $request->nomeativo;
        $event->minutagem = $request->minutagem;

        $event->save();

        return redirect('/banner');


    }

    public function inicio(){

        return view('welcome');

    }
}
