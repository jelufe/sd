@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" align="right"><h2 align="left">Coordenadores:</h2>
                        <a class="btn btn-success" href="{{ url('cadastrocoordenador') }}">Cadastrar um Novo Coordenador</a> </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        <table>
                            <th width="200">Nome</th>
                            <th width="200">Endereço</th>
                            <th width="200">Qualificacao</th>
                            <th>Ações</th>
                            <tbody>
                            @foreach($coordenadores as $coordenador)
                                <tr>
                                    <td height="50">{{$coordenador->nome}}</td>
                                    <td>{{$coordenador->endereco}}</td>
                                    <td>{{$coordenador->qualificacao}}</td>
                                    <td>
                                        <a href="/Coordenador/{{$coordenador->id}}/editar" class="btn btn-default btn-sm">Editar</a>
                                        {!! Form::open(['method' => 'DELETE', 'url' => 'Coordenador/'.$coordenador->id, 'style' => 'display: inline;']) !!}
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
