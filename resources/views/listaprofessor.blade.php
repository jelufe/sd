@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" align="right"><h2 align="left">Professores:</h2>
                        <a class="btn btn-success" href="{{ url('cadastroprofessor') }}">Cadastrar um Novo Professor</a> </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        <table>
                            <th width="200">Nome</th>
                            <th width="200">Endereço</th>
                            <th width="200">Qualificacao</th>
                            <th width="">Ações</th>
                            <tbody>
                            @foreach($professores as $professor)
                                <tr>
                                    <td height="50">{{$professor->nome}}</td>
                                    <td>{{$professor->endereco}}</td>
                                    <td>{{$professor->qualificacao}}</td>
                                    <td>
                                        <a href="/Professor/{{$professor->id}}/editar" class="btn btn-default btn-sm">Editar</a>
                                        {!! Form::open(['method' => 'DELETE', 'url' => 'Professor/'.$professor->id, 'style' => 'display: inline;']) !!}
                                        <button type="submit" class="btn btn-default btn-sm">Excluir</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
