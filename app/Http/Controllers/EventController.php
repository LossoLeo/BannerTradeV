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

        return redirect('/addativos/create')->with('msg', 'Ativo Adionado com sucesso');

    }

    public function inicio(){

        return view('welcome');

    }

    public function dashboard(){

        $user = auth()->user();

        $events = $user->events;

        return view('addativos.dashboard', ['events' => $events]);


    }

    public function indexEdit()
    {
        $events = Event::All();

        return view('edit' , ['events' => $events]);
    }


    public function update(Request $request,  $id){

        $data = $request->all();

        $minutagem = $data['minutagem'];
        $nome = $data['nomeativo'];

        if ($minutagem != null){
            Event::where('id' , $id)->update(['minutagem' => $minutagem]);
        }
        if ($nome != null){
            Event::where('id' , $id)->update(['nomeativo' => $nome]);
        }

        return redirect('/edit-ativos');
    }

    public function delete($id)
    {
        Event::where('id' , $id)->delete();

        return redirect('/edit-ativos');
    }
}
