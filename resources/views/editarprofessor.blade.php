@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Informe abaixo as informações do Professor
                        <a class="pull-right" href="{{ url('professores') }}">Ver todos os Professores</a> </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        {!! Form::model($professor, ['method' => 'PATCH' ,'url' => '/Professor/'.$professor->id]) !!}

                        {!! Form::label('nome', 'Nome:') !!}
                        {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']) !!}
                        {!! Form::label('endereco', 'Endereço:') !!}
                        {!! Form::input('text', 'endereco', null, ['class' => 'form-control', 'placeholder' => 'Endereço']) !!}
                        {!! Form::label('sexo', 'Sexo:') !!}
                        {!! Form::input('text', 'sexo', null, ['class' => 'form-control',  'placeholder' => 'Sexo']) !!}
                        {!! Form::label('qualificacao', 'Qualificação:') !!}
                        {!! Form::input('text', 'qualificacao', null, ['class' => 'form-control',  'placeholder' => 'Qualificação']) !!}
                        {!! Form::label('cpf', 'Cpf:') !!}
                        {!! Form::input('text', 'cpf', null, ['class' => 'form-control',  'placeholder' => 'Cpf']) !!}

                        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
