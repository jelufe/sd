<?php

namespace App\Http\Controllers;

use App\Director;
use App\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CadastroController extends Controller
{

    public function index(){
        return view('escolhacadastro');
    }

    public function diretor(){
        return view('cadastrodiretor');
    }

    public function coordenador(){
        return view('cadastrocoordenador');
    }

    public function professor(){
        return view('cadastroprofessor');
    }

    public function salvarDiretor(Request $request){
        $diretor = new Director();
        $user = new User();



        $diretor = $diretor->create($request->all());

        $user->insert(['email' => $request->email, 'password' =>  $request->password, 'id_referenciado' => $diretor->id, 'nivel' => 1]);


        \Session::flash('mensagem_sucesso', 'Usúario cadastrado com Sucesso!');


        return Redirect::to('/');
    }

}
