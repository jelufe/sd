<?php

namespace App\Http\Controllers;

use App\Coordinator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CoordinatorController extends Controller
{
    public function index(){
        if(Auth::guest()){
            return Redirect::to('/home');
        } else {
            $coordenadores = Coordinator::get();
            return view('listacoordenador', ['coordenadores' => $coordenadores]);
        }
    }

    public function editar($id){
        $coordenador = Coordinator::findOrFail($id);
        return view('editarcoordenador', ['coordenador' => $coordenador]);
    }

    public function atualizar($id, Request $request){

            $coordenador = Coordinator::findOrFail($id);
            $coordenador->update($request->all());
            \Session::flash('mensagem_sucesso', 'Coordenador atualizado com Sucesso!');
            return Redirect::to('Coordenador/'.$coordenador->id.'/editar');

    }

}
