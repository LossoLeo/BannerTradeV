<?php

namespace App\Http\Controllers;

use App\Models\Live;
use App\Models\LiveModel;
use Illuminate\Http\Request;
use App\Models\Lives;

class LiveController extends Controller
{
    public function indexLive()
    {
        $lives = LiveModel::all();
        return view('addlives.lives', [
           'lives'=> $lives
        ]);

    }

    public function addLive(Request $request){

        $data = $request->all();

        Live::create($data);

        return view('addativos.create', [
            'id_live' => $data['id_live']
        ]);
    }

    public function indexTrocarLive()
    {
        $lives = LiveModel::all();
        return view('trocarlive',[
            'lives'=>$lives
        ]);
    }
}
