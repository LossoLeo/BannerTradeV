<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use Illuminate\Support\Facades\Events;

class EventController extends Controller
{
    public function index(){

        $data = date('d/m');


        $events = Event::whereDate('created_at',date('Y-m-d'))->get();


        return view('banner' , [
            'events' => $events,
            'data' => $data
            ]);

    }

    public function createLive(){

        return view('lives');

    }

    public function create(){
        return view('addativos.create');
    }

    public function store(Request $request){

        $event = new Event;

        $event->nomeativo = $request->nomeativo;
        $event->minutagem = $request->minutagem;

        $event->save();

        return redirect()->to('/addativos/create')->with('msg', 'Ativo adicionado com sucesso');

    }

    public function inicio(){

        return view('welcome');

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

    public function delete($id){

        Event::where('id' , $id)->delete();

        return redirect('/edit-ativos');
    }

    public function live(){

        $data = date('d/m');


        $events = Event::whereDate('created_at',date('Y-m-d'))->get();


        $total = [];


        foreach($events as $item){
            $total[] = $item->nomeativo." - ".$item->minutagem;

        }

        $palavra = $total;
        $string = implode( "     |     ", $palavra);

        $cont = count($events);


        return view('bannerlive' , [
        'events' => $events,
        'palavra' => $string,
        'tam' => $cont
        ]);

    }

    public function busca(Request $request){

        $data = $request->all();


        $events = Event::whereDate('created_at', $data['busca'])->get();

        $pesquisa = $data['busca'];

        $item = date("d/m" , strtotime($pesquisa));

        return view('banner' , [
            'events' => $events,
            'data' => $item
        ]);

    }

    public function conta(){
        return view('conta');

    }

    public function buscaedit(Request $request){

        $data = $request->all();
        $events = Event::whereDate('created_at', $data['buscaedit'])->get();

        $pesquisaedit = $data['buscaedit'];

        $item = date("d/m/y" , strtotime($pesquisaedit));

        return view('edit' , [
            'events' => $events,
            'data' => $item
        ]);


    }

}
