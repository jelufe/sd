<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TeacherController extends Controller
{
    public function index(){
        if(Auth::guest()){
            return Redirect::to('/home');
        } else {
            $professores = Teacher::get();
            return view('listaprofessor', ['professores' => $professores]);
        }
    }

    public function editar($id){
        $professor = Teacher::findOrFail($id);
        return view('editarprofessor', ['professor' => $professor]);
    }

    public function atualizar($id, Request $request){

        $professor = Teacher::findOrFail($id);
        $professor->update($request->all());
        \Session::flash('mensagem_sucesso', 'Professor atualizado com Sucesso!');
        return Redirect::to('Professor/'.$professor->id.'/editar');

    }

}
