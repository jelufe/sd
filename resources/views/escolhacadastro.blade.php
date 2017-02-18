@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div align="middle" class="panel panel-default">

                    <br/><br/>
                    <a class="btn btn-danger" href="{{ url('/cadastrodiretor') }}">Cadastro Diretor</a>
                    <br/>
                    <br/>
                    <a class="btn btn-primary" href="{{ url('/cadastrocoordenador') }}">Cadastro Coordenador</a>
                    <br/>
                    <br/>
                    <a class="btn btn-success" href="{{ url('/cadastroprofessor') }}">Cadastro Professor</a>
                    <br/><br/><br/>

                </div>
            </div>
        </div>
    </div>
@endsection
